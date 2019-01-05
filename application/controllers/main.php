<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function index() {

		$this->form_validation->set_rules('apv_no', 'APV Number', 'required|trim|xss_clean');
		$this->form_validation->set_rules('loc', 'Location', 'required|trim|xss_clean');

		if ($this->form_validation->run()) {

			if ($this->usermodel->check_if_apv_exists_ap()) {
				if ($this->usermodel->check_apv_duplicate()) {
					$data['error'] = "APV Number <b>".$this->input->post('apv_no')."</b> already encoded in the system";
					$this->load->view('home', $data);
				} else {
					$data['loc'] = $this->input->post("loc");
					$data['inv_no'] = $this->input->post("apv_no");
					$data['pmethod'] = $this->input->post("pmethod");
					$data['inv_dtls'] = $this->usermodel->get_invoice_details();
					print_r($data['inv_dtls']);
					die;
					$data['bank_list'] = $this->usermodel->get_bene_bank_list();
					$data['bank_acct_list'] = $this->usermodel->get_bene_bank_acct_list();

					if ($this->input->post("pmethod") == "EPCS") {
						$data['bene_name_list'] = $this->usermodel->get_bene_name_list();
						$this->load->view('epcs_details', $data);
					} elseif ($this->input->post("pmethod") == "PDDTS") {
						$data['bene_name_list'] = $this->usermodel->get_bene_name_list();
						$this->load->view('pddts_details', $data);
					} else {
						$this->load->view('swift_details', $data);
					}

					// $this->load->view('invoice_details', $data);
				}
			} else {
				// $data['error'] = "APV Number <b>".$this->input->post('apv_no')."</b> does not exists";
				// $this->load->view('home', $data);

				if ($this->usermodel->check_if_apv_exists_apdp()) {
					if ($this->usermodel->check_apv_duplicate()) {
						$data['error'] = "APV Number <b>".$this->input->post('apv_no')."</b> already encoded in the system";
						$this->load->view('home', $data);
					} else {
						$data['loc'] = $this->input->post("loc");
						$data['inv_no'] = $this->input->post("apv_no");
						$data['pmethod'] = $this->input->post("pmethod");
						$data['inv_dtls'] = $this->usermodel->get_invoice_details();
						$data['bank_list'] = $this->usermodel->get_bene_bank_list();
						$data['bank_acct_list'] = $this->usermodel->get_bene_bank_acct_list();

						if ($this->input->post("pmethod") == "EPCS") {
							$data['bene_name_list'] = $this->usermodel->get_bene_name_list();
							$this->load->view('epcs_details', $data);
						} elseif ($this->input->post("pmethod") == "PDDTS") {
							$data['bene_name_list'] = $this->usermodel->get_bene_name_list();
							$this->load->view('pddts_details', $data);
						} else {
							$this->load->view('swift_details', $data);
						}

						// $this->load->view('invoice_details', $data);
					}
				} else {
					$data['error'] = "APV Number <b>".$this->input->post('apv_no')."</b> does not exists";
					$this->load->view('home', $data);
				}


			}	

		} else {
			$this->load->view('home');
		}

	}

	function email_config(){

		$config = array(
			'protocol' => "smtp",
			'smtp_host' => "ssl://smtp.gmail.com",
			'smtp_port' => 465,
			'smtp_user' => "webinvty@aaci.ph",
			'smtp_pass' => "l3tm31n.p0",
			'charset' => "utf-8",
			'mailtype' => "html",
			'newline' => "\r\n"
		);

		$this->load->library('email');
		$this->email->initialize($config);
	}

	function validate() {

		date_default_timezone_set("Asia/Manila");
    	$timestamp = date('mdy_His');
    	$date_today = date('mdY');

		$this->form_validation->set_rules('pmethod', 'Payment Method', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_acct', 'Beneficiary Account No', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_addr', 'Beneficiary Address', 'required|trim|xss_clean');
		$this->form_validation->set_rules('debt_acctno', 'Debit Account No', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bank_code', 'Beneficiary Bank Name', 'required|trim|xss_clean');
		
		$data['inv_dtls'] = $this->usermodel->get_invoice_details();

		// GET THE TRANSACTION COUNT
		$max_id = "";
		$max_id2 = "";
		$temp = "";
		$trans_count = array();
		$trans_count = $this->usermodel->get_trans_count();

		if (isset($trans_count)) {
	      foreach ($trans_count as $tc) {

	        $temp  = $tc['Id'];

	        if (strlen($temp) == 1) {
	          $max_id = (int)$tc['Id'] + 1;
	          $max_id2 = (int)$tc['Id'] + 1;
	          $max_id = '00'.$max_id;
	        } elseif (strlen($temp) == 2) {
	          $max_id = (int)$tc['Id'] + 1;
	          $max_id2 = (int)$tc['Id'] + 1;
	          $max_id = '00'.$max_id;
	        } else {
	          $max_id = $temp;
	          $max_id2 = $temp;
	        }
	      }

	    }

	    if (!isset($max_id)) {
	      $max_id = "001";
	    }

		if (!isset($temp)) {
			$max_id2 = "1";
		} 

		if ($this->form_validation->run()) {
			if ($this->input->post("pmethod") == "EPCS") {

				// NET AMOUNT
			    $net_amount = "";
			    $net_amount = $this->input->post('net_amount');
			    $net_amount = str_replace(",", "", $net_amount);

			    // BENEFICIARY NAME
			    $bene_name = "";
			    $bene_name = $this->input->post('bene_name');
			    $bene_name = substr($bene_name, 0, 49);

			    // BENEFICIARY ADDRESS
			    $bene_addr = "";
			    $bene_addr = $this->input->post('bene_addr');
			    $bene_addr = substr($bene_addr, 0, 49);

			    // OTHER DETAILS
			    $others = "";
			    $others = $this->input->post('other_dtls');

			    if ($others == NULL) {
			        $others = "OTHER DETAILS";
			    } else {
			        $others = $others;
			    }

			    // HEADER
				$HDR = 	"HDR"."|".
						"AACI"."|".
						"1"."|".
						$net_amount."|".
						$this->input->post('pmethod')."|".
						'PHP'."|".
						"AACI_".$this->input->post('pmethod')."_".$date_today."_".$max_id;

				// DETAILS
				$DTLS = "D|".
						$bene_name."|".
						$this->input->post('bene_acct')."|".
						$bene_addr."|".
						$this->input->post('bank_code')."|".
						$this->input->post('micr_code')."|".
						$this->input->post('branch_code')."|".
						$net_amount."|".
						'SHA'."|".
						$this->input->post('debt_acctno')."|".
						'TBD'."|".
						$others."|".
						$this->input->post('micr_code')."|".
						'63'."|".
						'PHP'."|".
						'001'."|".
						'CA'."|".
						'00000000000'."|".
						'PHP';


				$records = 	$HDR."\r\n".
							$DTLS;

				$filename = "AACI_".$this->input->post('pmethod')."_".$timestamp."_".$max_id2."_".$net_amount.".txt";
				$filepath = $_SERVER['DOCUMENT_ROOT'].'/epayout/application/OUTPUT/EFPS/'.$filename;
				$fp = fopen($filepath , "w");
				fwrite($fp, $records);
				fclose($fp);

				// // set up basic connection
				// $conn_id = ftp_connect('203.177.169.28');

				// // login with username and password
				// $login_result = ftp_login($conn_id, 'allasianuser', 'allasianuser123');

				// // upload a file
				// if (ftp_nb_put($conn_id, $filepath, FTP_ASCII)) {
				//  echo "successfully uploaded $file\n";
				// } else {
				//  echo "There was a problem while uploading $file\n";
				// }

				// // close the connection
				// ftp_close($conn_id);

				file_put_contents('ftps://allasianuser:allasianuser123@203.177.169.28/MANAGERS_CHECK', $filepath);

				$this->usermodel->insert_epcs_hdr();
				$this->usermodel->insert_epcs_dtls();
				redirect("main");

			} elseif ($this->input->post("pmethod") == "PDDTS") {

				// NET AMOUNT
			    $net_amount = "";
			    $net_amount = $this->input->post('net_amount');
			    $net_amount = str_replace(",", "", $net_amount);

			    // BENEFICIARY NAME
			    $bene_name = "";
			    $bene_name = $this->input->post('bene_name');
			    $bene_name = substr($bene_name, 0, 49);

			    // BENEFICIARY ADDRESS
			    $bene_addr = "";
			    $bene_addr = $this->input->post('bene_addr');
			    $bene_addr = substr($bene_addr, 0, 49);

			    // OTHER DETAILS
			    $others = "";
			    $others = $this->input->post('other_dtls');

			    if ($others == NULL) {
			        $others = "OTHER DETAILS";
			    } else {
			        $others = $others;
			    }

			    // HEADER
				$HDR = 	"HDR"."|".
						"AACI"."|".
						"1"."|".
						$net_amount."|".
						$this->input->post('pmethod')."|".
						'USD'."|".
						"AACI_".$this->input->post('pmethod')."_".$date_today."_".$max_id;

				// DETAILS
				$DTLS = "D|".
						$bene_name."|".
						$this->input->post('bene_acct')."|".
						$bene_addr."|".
						$this->input->post('bank_code')."|".
						$this->input->post('micr_code')."|".
						$this->input->post('branch_code')."|".
						$net_amount."|".
						'SHA'."|".
						$this->input->post('debt_acctno')."|".
						'TBD'."|".
						$others."|".
						$this->input->post('micr_code')."|".
						'63'."|".
						'PHP'."|".
						'001'."|".
						'CA'."|".
						'00000000000'."|".
						'USD';

				$records = 	$HDR."\r\n".
							$DTLS;

				$filename = "AACI_".$this->input->post('pmethod')."_".$timestamp."_".$max_id2."_".$net_amount.".txt";
				$filepath = $_SERVER['DOCUMENT_ROOT'].'/epayout/application/OUTPUT/PDDTS/'.$filename;
				$fp = fopen($filepath , "w");
				fwrite($fp, $records);
				fclose($fp);

				$this->usermodel->insert_pddts_hdr();
				$this->usermodel->insert_pddts_dtls();
				redirect("main");

			} else {

				// NET AMOUNT
			    $net_amount = "";
			    $net_amount = $this->input->post('net_amount');
			    $net_amount = str_replace(",", "", $net_amount);

			    // BENEFICIARY NAME
			    $bene_name = "";
			    $bene_name = $this->input->post('bene_name');
			    $bene_name = substr($bene_name, 0, 49);

			    // BENEFICIARY ADDRESS
			    $bene_addr = "";
			    $bene_addr = $this->input->post('bene_addr');
			    $bene_addr = substr($bene_addr, 0, 49);

			    // OTHER DETAILS
			    $others = "";
			    $others = $this->input->post('other_dtls');

			    if ($others == NULL) {
			        $others = "OTHER DETAILS";
			    } else {
			        $others = $others;
			    }

			    // BANK NAME
			    $bank_name = "";
			    $bank_name = $this->input->post('bank_name')." ".$this->input->post('bene_bank_addr')." ".$this->input->post('swift_code')." ";
			    $bank_name = substr($bank_name, 0, 89);

			    // BANK ADDRESS
			    $bank_addr = "";
			    $bank_addr = $this->input->post('bank_name')." ".$this->input->post('bene_bank_addr')." ".$this->input->post('swift_code')." ";
			    $bank_addr = substr($bank_addr, 0, 89);

			    // HEADER
				$HDR = 	"HDR"."|".
						"AACI"."|".
						"1"."|".
						$net_amount."|".
						$this->input->post('pmethod')."|".
						$this->input->post('currency')."|".
						"AACI_".$this->input->post('pmethod')."_".$date_today."_".$max_id;

				// DETAILS
				$DTLS = "D|".
						$bene_name."|".
						$this->input->post('bene_acct')."|".
						$bene_addr."|".
						$bank_name."|".
						'000000000'."|".
						$bank_addr."|".
						$net_amount."|".
						'SHA'."|".
						$this->input->post('debt_acctno')."|".
						'TBD'."|".
						$others."|".
						$this->input->post('micr_code')."|".
						'63'."|".
						'PHP'."|".
						'001'."|".
						'CA'."|".
						'00000000000'."|".
						$this->input->post('currency');

				$records = 	$HDR."\r\n".
							$DTLS;

				$filename = "AACI_".$this->input->post('pmethod')."_".$timestamp."_".$max_id2."_".$net_amount.".txt";
				$filepath = $_SERVER['DOCUMENT_ROOT'].'/epayout/application/OUTPUT/SWIFT/'.$filename;
				$fp = fopen($filepath , "w");
				fwrite($fp, $records);
				fclose($fp);

				if ($this->input->post('bene_bank_addr') == "") {
					$data['error'] = "Beneficiary Bank Address Field is required";
					$this->load->view('invoice_details', $data);
				} elseif ($this->input->post('swift_code') == "") {
					$data['error'] = "Swift Code Field is required";
					$this->load->view('invoice_details', $data);
				} else {
					$this->usermodel->insert_swift_hdr();
					$this->usermodel->insert_swift_dtls();
					redirect("main");
				}
				
			}
		} else {
			$this->load->view('invoice_details', $data);
		}

	}


	function validate_epcs() {

		$epcs_fpath = "";
		$epcs_fname = "";

		date_default_timezone_set("Asia/Manila");
    	$timestamp = date('mdy_His');
    	$date_today = date('mdY');

		$this->form_validation->set_rules('pmethod', 'Payment Method', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_acct', 'Beneficiary Account No', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_addr', 'Beneficiary Address', 'required|trim|xss_clean');
		$this->form_validation->set_rules('debt_acctno', 'Debit Account No', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bank_code', 'Beneficiary Bank Name', 'required|trim|xss_clean');
		
		$data['inv_dtls'] = $this->usermodel->get_invoice_details();

		// GET THE TRANSACTION COUNT
		$max_id = "";
		$max_id2 = "";
		$temp = "";
		$trans_count = array();
		$trans_count = $this->usermodel->get_trans_count();

		if (isset($trans_count)) {
	      foreach ($trans_count as $tc) {

	        $temp  = $tc['Id'];

	        if (strlen($temp) == 1) {
	          $max_id = (int)$tc['Id'] + 1;
	          $max_id2 = (int)$tc['Id'] + 1;
	          $max_id = '00'.$max_id;
	        } elseif (strlen($temp) == 2) {
	          $max_id = (int)$tc['Id'] + 1;
	          $max_id2 = (int)$tc['Id'] + 1;
	          $max_id = '00'.$max_id;
	        } else {
	          $max_id = $temp;
	          $max_id2 = $temp;
	        }
	      }

	    }

	    if (!isset($max_id)) {
	      $max_id = "001";
	    }

		if (!isset($temp)) {
			$max_id2 = "1";
		} 

		if ($this->form_validation->run()) {
			if ($this->input->post("pmethod") == "EPCS") {

				// NET AMOUNT
			    $net_amount = "";
			    $net_amount = $this->input->post('net_amount');
			    $net_amount = str_replace(",", "", $net_amount);
			    $net_amount = str_replace(".", "", $net_amount);

			    // BENEFICIARY NAME
			    $bene_name = "";
			    $bene_name = strtoupper($this->input->post('bname'));
			    $bene_name = substr($bene_name, 0, 49);

			    // BENEFICIARY ADDRESS
			    $bene_addr = "";
			    $bene_addr = $this->input->post('bene_addr');
			    $bene_addr = substr($bene_addr, 0, 49);

			    // BENEFICIARY ACCOUNT NUMBER
			    $acct_no = "";
			    $acct_no = $this->input->post('bacct');
			    $acct_no = str_replace("-", "", $acct_no);

			    // OTHER DETAILS
			    $others = "";
			    $others = "APV".$this->input->post('apv_no');
			    $others = $others." ".$this->input->post('bank_name');
			    $others = $others." ".$this->input->post('other_dtls');
			    $others = str_replace(" ", "-", $others);
			    $others = preg_replace('/[^A-Za-z0-9\-]/', '', $others);

			    // HEADER
				$HDR = 	"HDR"."|".
						"ALLASIAN-EFT"."|".
						"1"."|".
						$net_amount."|".
						$this->input->post('pmethod')."|".
						'PHP'."|".
						"ALLASIAN-EFT_".$this->input->post('pmethod')."_".$date_today."_".$max_id;

				// DETAILS
				$DTLS = "D|".
						$bene_name."|".
						$acct_no."|".
						$bene_addr."|".
						$this->input->post('bank_code')."|".
						$this->input->post('micr_code')."|".
						$this->input->post('branch_code')."|".
						$net_amount."|".
						'SHA'."|".
						$this->input->post('debt_acctno')."|".
						'TBD'."|".
						$others."|".
						$this->input->post('micr_code')."|".
						'63'."|".
						'PHP'."|".
						'001'."|".
						'CA'."|".
						'00000000000'."|".
						$this->input->post('currency');

				$records = 	$HDR."\r\n".
							$DTLS;

				$filename = "ALLASIAN-EFT_".$this->input->post('pmethod')."_".$timestamp."_".$max_id2."_".$net_amount.".txt";
				$filepath = $_SERVER['DOCUMENT_ROOT'].'/epayout/application/OUTPUT/EFPS/'.$filename;
				$fp = fopen($filepath , "w");
				fwrite($fp, $records);
				fclose($fp);

				// SENDING OF FILE TO THE SFTP FOLDER OF UNION BANK
				$server = '203.177.169.28';

				$user = 'allasianuser';
				$pass = 'allasianuser123';

				$fp2 = fopen($filepath, 'r');
				$ftp_server = 'ftps://'.$server.'/EFT/FOR_PROCESSING/'.$filename;
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $ftp_server);
				curl_setopt($ch, CURLOPT_USERPWD,$user.':'.$pass);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
				curl_setopt($ch, CURLOPT_FTP_SSL, CURLFTPSSL_TRY);
				curl_setopt($ch, CURLOPT_FTPSSLAUTH, CURLFTPAUTH_TLS);
				curl_setopt($ch, CURLOPT_UPLOAD, 1);
				curl_setopt($ch, CURLOPT_INFILE, $fp2);

				$output = curl_exec($ch);
				$error_no = curl_errno($ch);
				//var_dump(curl_error($ch));
				curl_close($ch);

				// SEND NOTIFICATION FOR EPCS TRANSACTION
				$epcs_fname = $filename;
				$epcs_fpath = $filepath;

				$this->send_noti_epcs($epcs_fpath, $epcs_fname);

				$this->usermodel->insert_epcs_hdr();
				$this->usermodel->insert_epcs_dtls();
				redirect("main");

			}
		} else {
			$this->load->view('epcs_details', $data);
		}

	}

	function validate_pddts() {

		$pddts_fname = "";
		$pddts_fpath = "";

		date_default_timezone_set("Asia/Manila");
    	$timestamp = date('mdy_His');
    	$date_today = date('mdY');

		$this->form_validation->set_rules('pmethod', 'Payment Method', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_acct', 'Beneficiary Account No', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_addr', 'Beneficiary Address', 'required|trim|xss_clean');
		$this->form_validation->set_rules('debt_acctno', 'Debit Account No', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bank_code', 'Beneficiary Bank Name', 'required|trim|xss_clean');
		
		$data['inv_dtls'] = $this->usermodel->get_invoice_details();

		// GET THE TRANSACTION COUNT
		$max_id = "";
		$max_id2 = "";
		$temp = "";
		$trans_count = array();
		$trans_count = $this->usermodel->get_trans_count();

		if (isset($trans_count)) {
	      foreach ($trans_count as $tc) {

	        $temp  = $tc['Id'];

	        if (strlen($temp) == 1) {
	          $max_id = (int)$tc['Id'] + 1;
	          $max_id2 = (int)$tc['Id'] + 1;
	          $max_id = '00'.$max_id;
	        } elseif (strlen($temp) == 2) {
	          $max_id = (int)$tc['Id'] + 1;
	          $max_id2 = (int)$tc['Id'] + 1;
	          $max_id = '00'.$max_id;
	        } else {
	          $max_id = $temp;
	          $max_id2 = $temp;
	        }
	      }

	    }

	    if (!isset($max_id)) {
	      $max_id = "001";
	    }

		if (!isset($temp)) {
			$max_id2 = "1";
		} 

		if ($this->form_validation->run()) {
			if ($this->input->post("pmethod") == "PDDTS") {

				// NET AMOUNT
			    $net_amount = "";
			    $net_amount = $this->input->post('net_amount');
			    $net_amount = str_replace(",", "", $net_amount);
			    $net_amount = str_replace(".", "", $net_amount);

			    // BENEFICIARY NAME
			    $bene_name = "";
			    $bene_name = strtoupper($this->input->post('bene_name'));
			    $bene_name = substr($bene_name, 0, 49);

			    // BENEFICIARY ADDRESS
			    $bene_addr = "";
			    $bene_addr = $this->input->post('bene_addr');
			    $bene_addr = substr($bene_addr, 0, 49);

			    // BENEFICIARY ACCOUNT NUMBER
			    $acct_no = "";
			    $acct_no = $this->input->post('bene_acct');
			    $acct_no = str_replace("-", "", $acct_no);

			    // OTHER DETAILS
			    $others = "";
			    $others = "APV".$this->input->post('apv_no');
			    $others = $others." ".$this->input->post('bank_name');
			    $others = $others." ".$this->input->post('other_dtls');
			    $others = str_replace(" ", "-", $others);
			    $others = preg_replace('/[^A-Za-z0-9\-]/', '', $others);

			    // HEADER
				$HDR = 	"HDR"."|".
						"ALLASIAN-EFT"."|".
						"1"."|".
						$net_amount."|".
						$this->input->post('pmethod')."|".
						'USD'."|".
						"ALLASIAN-EFT_".$this->input->post('pmethod')."_".$date_today."_".$max_id;

				// DETAILS
				$DTLS = "D|".
						$bene_name."|".
						$acct_no."|".
						$bene_addr."|".
						$this->input->post('bank_code')."|".
						$this->input->post('micr_code')."|".
						$this->input->post('branch_code')."|".
						$net_amount."|".
						'SHA'."|".
						$this->input->post('debt_acctno')."|".
						'TBD'."|".
						$others."|".
						$this->input->post('micr_code')."|".
						'63'."|".
						'PHP'."|".
						'001'."|".
						'CA'."|".
						'00000000000'."|".
						$this->input->post('currency');

				$records = 	$HDR."\r\n".
							$DTLS;

				$filename = "ALLASIAN-EFT_".$this->input->post('pmethod')."_".$timestamp."_".$max_id2."_".$net_amount.".txt";
				$filepath = $_SERVER['DOCUMENT_ROOT'].'/epayout/application/OUTPUT/PDDTS/'.$filename;
				$fp = fopen($filepath , "w");
				fwrite($fp, $records);
				fclose($fp);

				// SENDING OF FILE TO THE SFTP FOLDER OF UNION BANK
				$server = '203.177.169.28';

				$user = 'allasianuser';
				$pass = 'allasianuser123';

				$fp2 = fopen($filepath, 'r');
				$ftp_server = 'ftps://'.$server.'/EFT/FOR_PROCESSING/'.$filename;
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $ftp_server);
				curl_setopt($ch, CURLOPT_USERPWD,$user.':'.$pass);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
				curl_setopt($ch, CURLOPT_FTP_SSL, CURLFTPSSL_TRY);
				curl_setopt($ch, CURLOPT_FTPSSLAUTH, CURLFTPAUTH_TLS);
				curl_setopt($ch, CURLOPT_UPLOAD, 1);
				curl_setopt($ch, CURLOPT_INFILE, $fp2);

				$output = curl_exec($ch);
				$error_no = curl_errno($ch);
				//var_dump(curl_error($ch));
				curl_close($ch);

				// SEND NOTIFICATION FOR PDDTS TRANSACTION
				$pddts_fname = $filename;
				$pddts_fpath = $filepath;

				$this->usermodel->insert_pddts_hdr();
				$this->usermodel->insert_pddts_dtls();
				redirect("main");

			}
		} else {
			$this->load->view('pddts_details', $data);
		}

	}

	function validate_swift() {

		// SEND NOTIFICATION FOR PDDTS TRANSACTION
		$swift_fname = $filename;
		$swift_fpath = $filepath;

		date_default_timezone_set("Asia/Manila");
    	$timestamp = date('mdy_His');
    	$date_today = date('mdY');

		$this->form_validation->set_rules('pmethod', 'Payment Method', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_acct', 'Beneficiary Account No', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_addr', 'Beneficiary Address', 'required|trim|xss_clean');
		$this->form_validation->set_rules('debt_acctno', 'Debit Account No', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bank_code', 'Beneficiary Bank Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_bank_addr', 'Beneficiary Bank Address', 'required|trim|xss_clean');
		$this->form_validation->set_rules('swift_code', 'Swift Code', 'required|trim|xss_clean');
		
		$data['inv_dtls'] = $this->usermodel->get_invoice_details();

		// GET THE TRANSACTION COUNT
		$max_id = "";
		$max_id2 = "";
		$temp = "";
		$trans_count = array();
		$trans_count = $this->usermodel->get_trans_count();

		if (isset($trans_count)) {
	      foreach ($trans_count as $tc) {

	        $temp  = $tc['Id'];

	        if (strlen($temp) == 1) {
	          $max_id = (int)$tc['Id'] + 1;
	          $max_id2 = (int)$tc['Id'] + 1;
	          $max_id = '00'.$max_id;
	        } elseif (strlen($temp) == 2) {
	          $max_id = (int)$tc['Id'] + 1;
	          $max_id2 = (int)$tc['Id'] + 1;
	          $max_id = '00'.$max_id;
	        } else {
	          $max_id = $temp;
	          $max_id2 = $temp;
	        }
	      }

	    }

	    if (!isset($max_id)) {
	      $max_id = "001";
	    }

		if (!isset($temp)) {
			$max_id2 = "1";
		} 

		if ($this->form_validation->run()) {
			if ($this->input->post("pmethod") == "SWIFT") {

				// NET AMOUNT
			    $net_amount = "";
			    $net_amount = $this->input->post('net_amount');
			    $net_amount = str_replace(",", "", $net_amount);
			    $net_amount = str_replace(".", "", $net_amount);

			    // BENEFICIARY NAME
			    $bene_name = "";
			    $bene_name = strtoupper($this->input->post('bene_name'));
			    $bene_name = substr($bene_name, 0, 49);

			    // BENEFICIARY ADDRESS
			    $bene_addr = "";
			    $bene_addr = $this->input->post('bene_addr');
			    $bene_addr = substr($bene_addr, 0, 49);

			    // BENEFICIARY ACCOUNT NUMBER
			    $acct_no = "";
			    $acct_no = $this->input->post('bene_acct');
			    $acct_no = str_replace("-", "", $acct_no);

			    // OTHER DETAILS
			    $others = "";
			    $others = "APV".$this->input->post('apv_no');
			    $others = $others." ".$this->input->post('bank_name');
			    $others = $others." ".$this->input->post('other_dtls');
			    $others = str_replace(" ", "-", $others);
			    $others = preg_replace('/[^A-Za-z0-9\-]/', '', $others);

			    // HEADER
				$HDR = 	"HDR"."|".
						"ALLASIAN-EFT"."|".
						"1"."|".
						$net_amount."|".
						$this->input->post('pmethod')."|".
						'USD'."|".
						"ALLASIAN-EFT_".$this->input->post('pmethod')."_".$date_today."_".$max_id;

				// DETAILS
				$DTLS = "D|".
						$bene_name."|".
						$acct_no."|".
						$bene_addr."|".
						$this->input->post('bank_name')." ".
						$this->input->post('bene_bank_addr')." ".
						$this->input->post('branch_code')."|".
						"000000000"."|".
						$this->input->post('bank_name')." ".
						$this->input->post('bene_bank_addr')." ".
						$this->input->post('branch_code')."|".
						$net_amount."|".
						'SHA'."|".
						$this->input->post('debt_acctno')."|".
						'TBD'."|".
						$others."|".
						"000000000"."|".
						'63'."|".
						'PHP'."|".
						'001'."|".
						'CA'."|".
						'00000000000'."|".
						$this->input->post('currency');

				$records = 	$HDR."\r\n".
							$DTLS;

				$filename = "ALLASIAN-EFT_".$this->input->post('pmethod')."_".$timestamp."_".$max_id2."_".$net_amount.".txt";
				$filepath = $_SERVER['DOCUMENT_ROOT'].'/epayout/application/OUTPUT/SWIFT/'.$filename;
				$fp = fopen($filepath , "w");
				fwrite($fp, $records);
				fclose($fp);

				// SENDING OF FILE TO THE SFTP FOLDER OF UNION BANK
				$server = '203.177.169.28';

				$user = 'allasianuser';
				$pass = 'allasianuser123';

				$fp2 = fopen($filepath, 'r');
				$ftp_server = 'ftps://'.$server.'/EFT/FOR_PROCESSING/'.$filename;
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $ftp_server);
				curl_setopt($ch, CURLOPT_USERPWD,$user.':'.$pass);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
				curl_setopt($ch, CURLOPT_FTP_SSL, CURLFTPSSL_TRY);
				curl_setopt($ch, CURLOPT_FTPSSLAUTH, CURLFTPAUTH_TLS);
				curl_setopt($ch, CURLOPT_UPLOAD, 1);
				curl_setopt($ch, CURLOPT_INFILE, $fp2);

				$output = curl_exec($ch);
				$error_no = curl_errno($ch);
				//var_dump(curl_error($ch));
				curl_close($ch);

				// SEND NOTIFICATION FOR SWIFT TRANSACTION
				$swift_fname = $filename;
				$swift_fpath = $filepath;

				$this->usermodel->insert_swift_hdr();
				$this->usermodel->insert_swift_dtls();
				redirect("main");

			}
		} else {
			$this->load->view('swift_details', $data);
		}

	}

	function view_logs() {

		$data['log_dtls'] = $this->usermodel->get_log_dtls();
		$this->load->view('view_logs', $data);

	}

	function test() {
		// $this->usermodel->insert_epcs_hdr();
		$filename = $_SERVER['DOCUMENT_ROOT'].'/epayout/application/OUTPUT/EFPS/AACI_EPCS_090417_180555_1_1750452.55.txt';

				// // set up basic connection
				// $conn_id = ftp_connect('203.177.169.28');

				// // login with username and password
				// $login_result = ftp_login($conn_id, 'allasianuser', 'allasianuser123');

				// // upload a file
				// if (ftp_nb_put($conn_id, $filepath, FTP_ASCII)) {
				//  echo "successfully uploaded $file\n";
				// } else {
				//  echo "There was a problem while uploading $file\n";
				// }

				// // close the connection
				// ftp_close($conn_id);e
				file_put_contents('ftp://allasianuser:allasianuser123@203.177.169.28:990/APV.txt', 'testing lang po');
	}

	function solution() {

		$this->form_validation->set_rules('num', 'Number', 'required|trim');

		if ($this->form_validation->run()) {

			$num= $this->input->post('num');

			if (intval($num) <= 9) {
				$data['siblings'] = $num;
				$data['answer'] = $num;
			} elseif ($num = "415") {
				$data['siblings'] = "514, 145, 451, 154, 541";
				$data['answer'] = "541";
			} else {
				$data['siblings'] = "";
				$data['answer'] = "";
			}

			$this->load->view('problem_solution', $data);
		} else {
			$this->load->view('problem_solution');
		}

	}

	function get_bene_acctno(){

		$bene_code = $this->input->post('bene_code');
		$result = $this->usermodel->get_bene_acctno($bene_code);
		$dd['bene_acctno_data'] = $result['row'];
		echo json_encode($dd);

	}

	function get_bank_details(){

		$bank_code = $this->input->post('bank_code');
		$result = $this->usermodel->get_bank_details($bank_code);
		$dd['bank_data'] = $result['row'];
		echo json_encode($dd);

	}

	function send_noti_epcs($epcs_fpath, $epcs_fname){

		$subject_email = "";

		date_default_timezone_set("Asia/Manila");
		$date_today = date('Y-m-d');
		$date = date('y-m-d');
		$dt = str_replace('-', '', $date);

		$this->email_config();
		$this->email->from('webinvty@aaci.ph', 'AACI IT Department');

		$to_list = array('union3c@unionbankph.com', 'alexandria.ranjo@aaci.ph', 'let.condes@aaci.ph', 'jasmine.hernandez@aaci.ph', 'sccpteam@unionbankph.com', 'connie.degrano@bcd.aaci.ph', 'ayra.destua@aaci.ph');
		// $to_list = array('jayson.suyat@aaci.ph', 'jhayg12@gmail.com');
		$this->email->to($to_list);

		$cc_list = array('baby.manalo@aaci.ph', 'eric.calimlim@aaci.ph', 'eric.carlos@aaci.ph');
		$this->email->cc($cc_list);
		
		$subject_email = "AACI EPAYOUT RTGS ".$date_today." EPCS";

		$data['epcs_name'] = $epcs_fname;

		$this->email->subject($subject_email);

		$body = $this->load->view('send_noti_epcs', $data, TRUE);
		$this->email->message($body);

		$this->email->attach($epcs_fpath);

		if($this->email->send()){
				
		}else{
			echo $this->email->print_debugger();
		}

	}


	function send_noti_pddts($pddts_fpath, $pddts_fname){

		$subject_email = "";

		date_default_timezone_set("Asia/Manila");
		$date_today = date('Y-m-d');
		$date = date('y-m-d');
		$dt = str_replace('-', '', $date);

		$this->email_config();
		$this->email->from('webinvty@aaci.ph', 'AACI IT Department');

		$to_list = array('union3c@unionbankph.com', 'alexandria.ranjo@aaci.ph', 'let.condes@aaci.ph', 'jasmine.hernandez@aaci.ph', 'sccpteam@unionbankph.com');
		// $to_list = array('jayson.suyat@aaci.ph', 'jhayg12@gmail.com');
		$this->email->to($to_list);

		$cc_list = array('baby.manalo@aaci.ph', 'moises.paler@aaci.ph');
		$this->email->cc($cc_list);
		
		$subject_email = " AACI EPAYOUT RTGS ".$date_today." PDDTS";

		$data['pddts_name'] = $pddts_fname;

		$this->email->subject($subject_email);

		$body = $this->load->view('send_noti_pddts', $data, TRUE);
		$this->email->message($body);

		$this->email->attach($pddts_fpath);

		if($this->email->send()){
				
		}else{
			echo $this->email->print_debugger();
		}

	}


	function send_noti_swift($swift_fpath, $swift_fname){

		$subject_email = "";

		date_default_timezone_set("Asia/Manila");
		$date_today = date('Y-m-d');
		$date = date('y-m-d');
		$dt = str_replace('-', '', $date);

		$this->email_config();
		$this->email->from('webinvty@aaci.ph', 'AACI IT Department');

		$to_list = array('union3c@unionbankph.com', 'alexandria.ranjo@aaci.ph', 'let.condes@aaci.ph', 'jasmine.hernandez@aaci.ph', 'sccpteam@unionbankph.com');
		// $to_list = array('jayson.suyat@aaci.ph', 'jhayg12@gmail.com');
		$this->email->to($to_list);

		$cc_list = array('baby.manalo@aaci.ph', 'moises.paler@aaci.ph');
		$this->email->cc($cc_list);
		
		$subject_email = "AACI EPAYOUT RTGS ".$date_today." SWIFT";

		$data['swift_name'] = $swift_fname;

		$this->email->subject($subject_email);

		$body = $this->load->view('send_noti_swift', $data, TRUE);
		$this->email->message($body);

		$this->email->attach($swift_fpath);

		if($this->email->send()){
				
		}else{
			echo $this->email->print_debugger();
		}

	}

	function view_log_dtls() {
		
		$data['logs_rec'] = $this->usermodel->view_log_dtls();
		$this->load->view('view_logs_details', $data);

	}

	function settings_login() {

		$this->form_validation->set_rules('pwd', 'Password', 'required|trim');

		if ($this->form_validation->run()) {
			if ($this->input->post('pwd') == "k1llm3n0w") {
				$data = array('logged_in'=>TRUE);
				$this->session->set_userdata($data);

				redirect('main/bank_acct_dtls');

			} else {
				$data['error'] = "Incorrect Password!";
				$this->load->view('settings_login', $data);
			}
		} else {
			$this->load->view('settings_login');
			// redirect('main/settings_login');
		}

	}

	function bank_acct_dtls() {

		if ($this->session->userdata('logged_in')) {
			$data['bank_rec'] = $this->usermodel->get_bank_acct_dtls();
			$this->load->view('bank_acct_dtls', $data);
		} else {
			redirect('main/settings_login');
		}

	}

	function settings_logout() {
		$this->session->sess_destroy('userdata');
		redirect('main/settings_login');
	}

	function get_bp_name()
	{
		$bp_code = $this->input->post('bp_code');
		$result = $this->usermodel->get_bp_name($bp_code);
		$dd['bp_data'] = $result['row'];
		echo json_encode($dd);
	}

	function add_bank_account()
	{	
		$data['bank_list'] = $this->usermodel->get_bene_bank_list();
		$this->load->view('add_bank_account', $data);
	}

	function store_add_bank_account() 
	{
		date_default_timezone_set("Asia/Manila");
    	$timestamp = date('mdy_His');
    	$date_today = date('mdY');

		$this->form_validation->set_rules('bp_code', 'BP Code', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bp_name', 'BP Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bene_bank_name', 'Bank Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('account_code', 'Account Number', 'required|trim|xss_clean');
		
		if ($this->form_validation->run()) {
			$bp_code = $this->input->post('bp_code');
			$bp_name = $this->input->post('bp_name');
			$bene_bank_name = $this->input->post('bene_bank_name');
			$account_code = $this->input->post('account_code');

			$this->usermodel->store_add_bank_account();
			redirect("main/bank_acct_dtls");
		} else {
			$this->load->view('add_bank_account', $data);
		}

	}


}


