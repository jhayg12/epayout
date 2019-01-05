<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model {

  function check_if_apv_exists_ap() {

    $inv_no = "";
    $inv_no = $this->input->post('apv_no');

    $inv_no  = (int)$inv_no;

    $db2 = $this->load->database('db2', TRUE);
    $qry = $db2->query("SELECT 
                            A.DocTotalFC 'CurrencyDocFC',
                            A.DocCur 'CurrencyDoc',
                            A.DocNum 'InvoiceNumber', CONVERT(VARCHAR(8), 
                            A.DocDate, 112) AS 'InvoiceDate', 
                            A.Comments 'Remarks', 
                            A.DocTotal 'GrossAmount', 
                            A.DiscSum 'DiscountAmount', 
                            A.WTSum 'WTA', 
                            A.WTSumFC 'WTAFC', 
                            A.DocTotal-A.PaidToDate AS 'NetAmount',
                            A.CardCode 'CustomerReferenceNo', 
                            (A.DocTotal-A.PaidToDate) 'PaymentAmount', 
                            (A.DocTotalFC-A.PaidFC) 'PaymentAmountFC', 
                            'ATK' AS 'PaymentMethod', 
                            'MPR' AS 'DeliveryMode',
                            CONVERT(VARCHAR(8), A.DocDueDate, 112) AS 'PaymentValueDate', 
                            'PH' AS 'DebitAccountContryCode', 
                            '3212705192' 'DebitAccountNo.', 
                            'CHASPHMM' AS 'DebitBankID', 
                            A.CardCode 'VendorCode', 
                            '' AS 'BeneficiaryAccountNo.', 
                            A.CardName AS 'BeneficiaryAccountName',
                            '111111111' AS 'BenefciaryBankID', 
                            'JP MORGAN' AS 'BeneficiaryBankName', 
                            'R' AS 'BankChargeIndicator', 
                            'R' AS 'CorrespondentBankChargeIndicator', 
                            'Y' AS 'RemittanceDetailIndicator', 
                            'Y' AS 'CWTIssuanceIndicator', 
                            B.LicTradNum 'TIN', 
                            CAST(A.U_CWT AS TEXT) 'CWTI', 
                            A.BaseAmnt AS 'BAmount',
                            A.BaseAmntFC AS 'BAmountFC'
                        FROM OPCH A 
                            INNER JOIN OCRD B ON A.CardCode = B.CardCode 
                        WHERE A.DocNum = '$inv_no' ");

    
    if ($qry->num_rows() > 0) {
      return TRUE;
    }

  }

  function check_if_apv_exists_apdp() {

    $inv_no = "";
    $inv_no = $this->input->post('apv_no');

    $inv_no  = (int)$inv_no;

    $db2 = $this->load->database('db2', TRUE);
    $qry = $db2->query("SELECT 
                            A.DocTotalFC 'CurrencyDocFC',
                            A.DocCur 'CurrencyDoc',
                            A.DocNum 'InvoiceNumber', 
                            CONVERT(VARCHAR(8), A.DocDate, 112) AS 'InvoiceDate', 
                            A.Comments 'Remarks', 
                            A.DocTotal 'GrossAmount', 
                            A.DiscSum 'DiscountAmount', 
                            A.WTSum 'WTA',
                            A.WTSumFC 'WTAFC', 
                            A.DocTotal-A.PaidToDate AS 'NetAmount',
                            A.CardCode 'CustomerReferenceNo', 
                            (A.DocTotal-A.PaidToDate) 'PaymentAmount',
                            (A.DocTotalFC-A.PaidFC) 'PaymentAmountFC', 
                            'ATK' AS 'PaymentMethod', 
                            'MPR' AS 'DeliveryMode',
                            CONVERT(VARCHAR(8), A.DocDueDate, 112) AS 'PaymentValueDate', 
                            'PH' AS 'DebitAccountContryCode', 
                            '3212705192' 'DebitAccountNo.', 
                            'CHASPHMM' AS 'DebitBankID', 
                            A.CardCode 'VendorCode', 
                            '' AS 'BeneficiaryAccountNo.', 
                            A.CardName AS 'BeneficiaryAccountName',
                            '' AS 'BenefciaryBankID', 
                            '' AS 'BeneficiaryBankName', 
                            'R' AS 'BankChargeIndicator', 
                            'R' AS 'CorrespondentBankChargeIndicator', 
                            'Y' AS 'RemittanceDetailIndicator', 
                            'Y' AS 'CWTIssuanceIndicator', 
                            A.LicTradNum 'TIN', 
                            CAST(A.U_CWT AS TEXT) 'CWTI',
                            A.BaseAmnt AS 'BAmount',
                            A.BaseAmntFC AS 'BAmountFC'
                        FROM ODPO A 
                            INNER JOIN OCRD B ON A.CardCode = B.CardCode 
                        WHERE A.DocNum = '$inv_no' ");

    
    if ($qry->num_rows() > 0) {
      return TRUE;
    }

  }

  function check_apv_duplicate() {

    $inv_no = "";
    $inv_no = $this->input->post('apv_no');

    $qry = $this->db->query("SELECT APV_No 
                              FROM ePayout_HDR 
                            WHERE APV_No = '$inv_no' ");

    if ($qry->num_rows() > 0) {
      return TRUE;
    }

  }

  function get_invoice_details() {

    $inv_no = "";
    $inv_no = $this->input->post('apv_no');

    $inv_no  = (int)$inv_no;

    $db2 = $this->load->database('db2', TRUE);
    $qry = $db2->query("SELECT 
                            A.DocTotalFC 'CurrencyDocFC',
                            A.DocCur 'CurrencyDoc',
                            A.DocNum 'InvoiceNumber', CONVERT(VARCHAR(8), 
                            A.DocDate, 112) AS 'InvoiceDate', 
                            A.Comments 'Remarks', 
                            A.DocTotal 'GrossAmount', 
                            A.DiscSum 'DiscountAmount', 
                            A.WTSum 'WTA', 
                            A.WTSumFC 'WTAFC', 
                            A.DocTotal-A.PaidToDate AS 'NetAmount',
                            A.CardCode 'CustomerReferenceNo', 
                            (A.DocTotal-A.PaidToDate) 'PaymentAmount', 
                            (A.DocTotalFC-A.PaidFC) 'PaymentAmountFC', 
                            'ATK' AS 'PaymentMethod', 
                            'MPR' AS 'DeliveryMode',
                            CONVERT(VARCHAR(8), A.DocDueDate, 112) AS 'PaymentValueDate', 
                            'PH' AS 'DebitAccountContryCode', 
                            '' 'DebitAccountNo.', 
                            'CHASPHMM' AS 'DebitBankID', 
                            A.CardCode 'VendorCode', 
                            '' AS 'BeneficiaryAccountNo.', 
                            A.CardName AS 'BeneficiaryAccountName',
                            '' AS 'BenefciaryBankID', 
                            '' AS 'BeneficiaryBankName', 
                            'R' AS 'BankChargeIndicator', 
                            'R' AS 'CorrespondentBankChargeIndicator', 
                            'Y' AS 'RemittanceDetailIndicator', 
                            'Y' AS 'CWTIssuanceIndicator', 
                            B.LicTradNum 'TIN', 
                            CAST(A.U_CWT AS TEXT) 'CWTI', 
                            A.BaseAmnt AS 'BAmount',
                            A.BaseAmntFC AS 'BAmountFC',
                            B.Address AS 'BeneAddress',
                            C.Address2,
                            C.Address3,
                            C.Street,
                            C.Block,
                            C.City
                        FROM OPCH A 
                            INNER JOIN OCRD B ON A.CardCode = B.CardCode 
                            INNER JOIN CRD1 C ON B.CardCode = C.CardCode 
                        WHERE A.DocNum = '$inv_no' ");

    $qry2 = $db2->query("SELECT 
                            A.DocTotalFC 'CurrencyDocFC',
                            A.DocCur 'CurrencyDoc',
                            A.DocNum 'InvoiceNumber', 
                            CONVERT(VARCHAR(8), A.DocDate, 112) AS 'InvoiceDate', 
                            A.Comments 'Remarks', 
                            A.DocTotal 'GrossAmount', 
                            A.DiscSum 'DiscountAmount', 
                            A.WTSum 'WTA',
                            A.WTSumFC 'WTAFC', 
                            A.DocTotal-A.PaidToDate AS 'NetAmount',
                            A.CardCode 'CustomerReferenceNo', 
                            (A.DocTotal-A.PaidToDate) 'PaymentAmount',
                            (A.DocTotalFC-A.PaidFC) 'PaymentAmountFC', 
                            'ATK' AS 'PaymentMethod', 
                            'MPR' AS 'DeliveryMode',
                            CONVERT(VARCHAR(8), A.DocDueDate, 112) AS 'PaymentValueDate', 
                            'PH' AS 'DebitAccountContryCode', 
                            '3212705192' 'DebitAccountNo.', 
                            'CHASPHMM' AS 'DebitBankID', 
                            A.CardCode 'VendorCode', 
                            '' AS 'BeneficiaryAccountNo.', 
                            A.CardName AS 'BeneficiaryAccountName',
                            '' AS 'BenefciaryBankID', 
                            '' AS 'BeneficiaryBankName', 
                            'R' AS 'BankChargeIndicator', 
                            'R' AS 'CorrespondentBankChargeIndicator', 
                            'Y' AS 'RemittanceDetailIndicator', 
                            'Y' AS 'CWTIssuanceIndicator', 
                            A.LicTradNum 'TIN', 
                            CAST(A.U_CWT AS TEXT) 'CWTI',
                            A.BaseAmnt AS 'BAmount',
                            A.BaseAmntFC AS 'BAmountFC', 
                            B.Address AS 'BeneAddress',
                            C.Address2,
                            C.Address3,
                            C.Street,
                            C.Block,
                            C.City
                        FROM ODPO A 
                            INNER JOIN OCRD B ON A.CardCode = B.CardCode
                            INNER JOIN CRD1 C ON B.CardCode = C.CardCode  
                        WHERE A.DocNum = '$inv_no'");

    
    if ($qry->num_rows() > 0) {
        $data = $qry->result();
        $card_code = $data[0]->VendorCode;

        $mysql_db = $this->load->database('db3', TRUE);
        $qry_acct = $mysql_db->query("SELECT * FROM bank_acct WHERE Code = '$card_code' ");
        
        if ($qry_acct->num_rows() > 0) {
            $result = array_push($data, $qry_acct->result());
            return $data;
        }

        // return $data[0]->VendorCode;
    } else {
        if ($qry2->num_rows() > 0) {
            return $qry2->result();
        }
    }

  }

  function insert_epcs_hdr() {

    date_default_timezone_set("Asia/Manila");
    $date_today = date('mdY');

    $create_date = date('Y-m-d');
    $create_time = date('H:i');


    $temp = "";

    $qry = $this->db->query("SELECT MAX(Id) 'Id' FROM ePayout_HDR");

    if ($qry->num_rows() > 0) {
      foreach ($qry->result_array() as $r) {

        $temp  = $r['Id'];

        if (strlen($temp) == 1) {
          $max_id = (int)$r['Id'] + 1;
          $max_id = '00'.$max_id;
        } elseif (strlen($temp) == 2) {
          $max_id = (int)$r['Id'] + 1;
          $max_id = '00'.$max_id;
        } else {
          $max_id = $temp;
        }
      }

    } 

    if (!isset($max_id)) {
      $max_id = "001";
    }

    $batch_ref = "";
    $batch_ref = "AACI_".$this->input->post('pmethod')."_".$date_today."_".$max_id;

    $net_amount = "";
    $net_amount = $this->input->post('net_amount');
    $net_amount = str_replace(",", "", $net_amount);

    $data = array(
        'APV_No' => $this->input->post('apv_no'),
        'ClientName' =>  'AACI',
        'TotalTransCount' => '1',
        'TotalTransAmount' => $net_amount,
        'PaymentMethod' => $this->input->post('pmethod'),
        'Currency' => $this->input->post('currency'),
        'BatchReference' => $batch_ref,
        'Location' => $this->input->post('loc'),
        'CreateDate' => $create_date,
        'CreateTime' => $create_time

      );

    $this->db->insert('ePayout_HDR', $data);

  }

  function insert_epcs_dtls() {

    date_default_timezone_set("Asia/Manila");
    $date_today = date('mdY');

    $create_date = date('Y-m-d');
    $create_time = date('H:i');

    // NET AMOUNT
    $net_amount = "";
    $net_amount = $this->input->post('net_amount');
    $net_amount = str_replace(",", "", $net_amount);

    // CURRENCY
    $cur = "";
    $temp_cur = "";
    $temp_cur = $this->input->post('pmethod');

    if ($temp_cur == "EPCS") {
        $cur = "PHP";
    }

    if ($temp_cur == "PDDTS") {
        $cur = "USD";
    }

    // OTHER DETAILS
    $others = "";
    $others = $this->input->post('other_dtls');

    if ($others == NULL) {
        $others = "OTHER DETAILS";
    } else {
        $others = $others;
    }

    $bene_name = "";
    $bene_name = $this->input->post('bname');
    $bene_name = substr($bene_name, 0, 49);

    $bene_addr = "";
    $bene_addr = $this->input->post('bene_addr');
    $bene_addr = substr($bene_addr, 0, 49);

    $data = array(
        'APV_No' => $this->input->post('apv_no'),
        'BeneficiaryName' =>  $bene_name,
        'BeneficiaryAccountNo' =>  $this->input->post('bacct'),
        'BeneficiaryAddress' =>  $bene_addr,
        'BankCode' =>  $this->input->post('bank_code'),
        'BranchCode' =>  $this->input->post('micr_code'),
        'BeneficiaryBankAddress' =>  $this->input->post('branch_code'),
        'Amount' => $net_amount,
        'Charges' => 'SHA',
        'DebitAccountNo' => $this->input->post('debt_acctno'),
        'TransactionReason' => 'TBD',
        'OtherDetails' => $others,
        'MICRCode' => $this->input->post('micr_code'),
        'CountryCode' => '63',
        'StateName' => 'PHP',
        'BankLocationCode' => '001',
        'AccountTypeCode' => 'CA',
        'SwiftCode' => '00000000000',
        'Currency' => $cur,
        'CreateDate' => $create_date,
        'CreateTime' => $create_time

      );

    $this->db->insert('ePayout_DTLS', $data);

  }

  function insert_pddts_hdr() {

    date_default_timezone_set("Asia/Manila");
    $date_today = date('mdY');

    $create_date = date('Y-m-d');
    $create_time = date('H:i');


    $temp = "";

    $qry = $this->db->query("SELECT MAX(Id) 'Id' FROM ePayout_HDR");

    if ($qry->num_rows() > 0) {
      foreach ($qry->result_array() as $r) {

        $temp  = $r['Id'];

        if (strlen($temp) == 1) {
          $max_id = (int)$r['Id'] + 1;
          $max_id = '00'.$max_id;
        } elseif (strlen($temp) == 2) {
          $max_id = (int)$r['Id'] + 1;
          $max_id = '00'.$max_id;
        } else {
          $max_id = $temp;
        }
      }

    } 

    if (!isset($max_id)) {
      $max_id = "001";
    }

    $batch_ref = "";
    $batch_ref = "AACI_".$this->input->post('pmethod')."_".$date_today."_".$max_id;

    $net_amount = "";
    $net_amount = $this->input->post('net_amount');
    $net_amount = str_replace(",", "", $net_amount);

    $data = array(
        'APV_No' => $this->input->post('apv_no'),
        'ClientName' =>  'AACI',
        'TotalTransCount' => '1',
        'TotalTransAmount' => $net_amount,
        'PaymentMethod' => $this->input->post('pmethod'),
        'Currency' => $this->input->post('currency'),
        'BatchReference' => $batch_ref,
        'Location' => $this->input->post('loc'),
        'CreateDate' => $create_date,
        'CreateTime' => $create_time

      );

    $this->db->insert('ePayout_HDR', $data);

  }

  function insert_pddts_dtls() {

    date_default_timezone_set("Asia/Manila");
    $date_today = date('mdY');

    $create_date = date('Y-m-d');
    $create_time = date('H:i');

    // NET AMOUNT
    $net_amount = "";
    $net_amount = $this->input->post('net_amount');
    $net_amount = str_replace(",", "", $net_amount);

    // CURRENCY
    $cur = "";
    $temp_cur = "";
    $temp_cur = $this->input->post('pmethod');

    if ($temp_cur == "EPCS") {
        $cur = "PHP";
    }

    if ($temp_cur == "PDDTS") {
        $cur = "USD";
    }

    // OTHER DETAILS
    $others = "";
    $others = $this->input->post('other_dtls');

    if ($others == NULL) {
        $others = "OTHER DETAILS";
    } else {
        $others = $others;
    }

    $bene_name = "";
    $bene_name = $this->input->post('bene_name');
    $bene_name = substr($bene_name, 0, 49);

    $bene_addr = "";
    $bene_addr = $this->input->post('bene_addr');
    $bene_addr = substr($bene_addr, 0, 49);

    $data = array(
        'APV_No' => $this->input->post('apv_no'),
        'BeneficiaryName' =>  $bene_name,
        'BeneficiaryAccountNo' =>  $this->input->post('bene_acct'),
        'BeneficiaryAddress' =>  $bene_addr,
        'BankCode' =>  $this->input->post('bank_code'),
        'BranchCode' =>  $this->input->post('micr_code'),
        'BeneficiaryBankAddress' =>  $this->input->post('branch_code'),
        'Amount' => $net_amount,
        'Charges' => 'SHA',
        'DebitAccountNo' => $this->input->post('debt_acctno'),
        'TransactionReason' => 'TBD',
        'OtherDetails' => $others,
        'MICRCode' => $this->input->post('micr_code'),
        'CountryCode' => '63',
        'StateName' => 'PHP',
        'BankLocationCode' => '001',
        'AccountTypeCode' => 'CA',
        'SwiftCode' => '00000000000',
        'Currency' => $cur,
        'CreateDate' => $create_date,
        'CreateTime' => $create_time

      );

    $this->db->insert('ePayout_DTLS', $data);

  }

  function insert_swift_hdr() {

    date_default_timezone_set("Asia/Manila");
    $date_today = date('mdY');

    $create_date = date('Y-m-d');
    $create_time = date('H:i');


    $temp = "";

    $qry = $this->db->query("SELECT MAX(Id) 'Id' FROM ePayout_HDR");

    if ($qry->num_rows() > 0) {
      foreach ($qry->result_array() as $r) {

        $temp  = $r['Id'];

        if (strlen($temp) == 1) {
          $max_id = (int)$r['Id'] + 1;
          $max_id = '00'.$max_id;
        } elseif (strlen($temp) == 2) {
          $max_id = (int)$r['Id'] + 1;
          $max_id = '00'.$max_id;
        } else {
          $max_id = $temp;
        }
      }

    } 

    if (!isset($max_id)) {
      $max_id = "001";
    }

    $batch_ref = "";
    $batch_ref = "AACI_".$this->input->post('pmethod')."_".$date_today."_".$max_id;

    $net_amount = "";
    $net_amount = $this->input->post('net_amount');
    $net_amount = str_replace(",", "", $net_amount);

    $data = array(
        'APV_No' => $this->input->post('apv_no'),
        'ClientName' =>  'AACI',
        'TotalTransCount' => '1',
        'TotalTransAmount' => $net_amount,
        'PaymentMethod' => $this->input->post('pmethod'),
        'Currency' => $this->input->post('currency'),
        'BatchReference' => $batch_ref,
        'Location' => $this->input->post('loc'),
        'CreateDate' => $create_date,
        'CreateTime' => $create_time

      );

    $this->db->insert('ePayout_HDR', $data);

  }

    function insert_swift_dtls() {

        date_default_timezone_set("Asia/Manila");
        $date_today = date('mdY');

        $create_date = date('Y-m-d');
        $create_time = date('H:i');

        // NET AMOUNT
        $net_amount = "";
        $net_amount = $this->input->post('net_amount');
        $net_amount = str_replace(",", "", $net_amount);

        // OTHER DETAILS
        $others = "";
        $others = $this->input->post('other_dtls');

        if ($others == NULL) {
            $others = "OTHER DETAILS";
        } else {
            $others = $others;
        }

        $bene_name = "";
        $bene_name = $this->input->post('bene_name');
        $bene_name = substr($bene_name, 0, 49);

        $bene_addr = "";
        $bene_addr = $this->input->post('bene_addr');
        $bene_addr = substr($bene_addr, 0, 49);

        $data = array(
            'APV_No' => $this->input->post('apv_no'),
            'BeneficiaryName' =>  $bene_name,
            'BeneficiaryAccountNo' =>  $this->input->post('bene_acct'),
            'BeneficiaryAddress' =>  $bene_addr,
            'BankName' =>  $this->input->post('bank_name'),
            'BranchCode' =>  '000000000',
            'BeneficiaryBankAddress' =>  $this->input->post('bene_bank_addr'),
            'SwiftCodeOrig' => $this->input->post('swift_code'),
            'Amount' => $net_amount,
            'Charges' => 'SHA',
            'DebitAccountNo' => $this->input->post('debt_acctno'),
            'TransactionReason' => 'TBD',
            'OtherDetails' => $others,
            'MICRCode' => $this->input->post('micr_code'),
            'CountryCode' => '63',
            'StateName' => 'PHP',
            'BankLocationCode' => '001',
            'AccountTypeCode' => 'CA',
            'SwiftCode' => '00000000000',
            'Currency' => $this->input->post('currency'),
            'CreateDate' => $create_date,
            'CreateTime' => $create_time

          );

        $this->db->insert('ePayout_DTLS', $data);

    }

    function get_log_dtls() {

        $qry = $this->db->query("SELECT 
                                    T0.APV_No, 
                                    T1.BeneficiaryName,
                                    T1.BeneficiaryAccountNo, 
                                    T0.TotalTransAmount,
                                    T0.PaymentMethod,
                                    T0.Location,
                                    T0.CreateDate,
                                    T0.CreateTime
                                FROM ePayout_HDR T0
                                LEFT JOIN ePayout_DTLS T1 ON T1.APV_No = T0.APV_No ");

        if ($qry->num_rows() > 0) {
            return $qry->result();
        }

    }

    function get_trans_count() {

        $qry = $this->db->query("SELECT MAX(Id) 'Id' FROM ePayout_HDR");

        if ($qry->num_rows() > 0) {
            return $qry->result_array();
        }

    }

    function get_bene_name_list() {

        $db3 = $this->load->database('db3', TRUE);
        $db3->order_by('Name', 'ASC');
        $qry = $db3->get('bank_acct');

        if ($qry->num_rows() > 0) {
            foreach ($qry->result_array() as $r) {
                $data[$r['Id']] = $r['Name'];
            }
            return $data;
        }

    }

    function get_bene_acctno($bene_code) {

        $db3 = $this->load->database('db3', TRUE);
        // $db3->where('Name', $bene_name);
        // $qry = $db3->get('bank_acct');

        $qry = $db3->query("SELECT T0.*, T0.Id 'BeneAcctId', T1.* FROM bank_acct T0
                                LEFT JOIN bank_list T1 ON T0.Bank = T1.BranchCode
                            WHERE T0.Id = '$bene_code' ");

        if($qry->num_rows() > 0){
            $data['row'] = $qry->result();
            return $data;
        }

    }

    function get_bank_details($bank_code) {
        $db3 = $this->load->database('db3', TRUE);
        $db3->where('BranchCode', $bank_code);
        $qry = $db3->get('bank_list');

        if($qry->num_rows() > 0){
            $data['row'] = $qry->result();
            return $data;
        }
    }

    function get_bene_bank_list() {

        $db3 = $this->load->database('db3', TRUE);
        $db3->order_by('BankName', 'ASC');
        $qry = $db3->get('bank_list');

        if ($qry->num_rows() > 0) {
            foreach ($qry->result_array() as $r) {
                $data[$r['BranchCode']] = $r['BankName'];
            }
            return $data;
        }

    }

    function get_bene_bank_acct_list() {

        $db3 = $this->load->database('db3', TRUE);
        $qry = $db3->get('bank_acct');

        if ($qry->num_rows() > 0) {
            foreach ($qry->result_array() as $r) {
                $data[$r['Id']] = $r['Account_No'];
            }
            return $data;
        }

    }

    function view_log_dtls() {

        $apv_no = $this->uri->segment(3);

        $qry = $this->db->query("SELECT 
                                    T0.*, T1.*, T2.BankName 'BName'
                                FROM ePayout_HDR T0
                                    LEFT JOIN ePayout_DTLS T1 ON T0.APV_No = T1.APV_No
                                    LEFT JOIN ePayout_BANKDTLS T2 ON T1.BankCode = T2.BankCode 
                                WHERE T0.APV_No = '$apv_no' ");

        if ($qry->num_rows() > 0) {
            return $qry->result();
        }

    }


    function get_bank_acct_dtls() {

        $db3 = $this->load->database('db3', TRUE);
        
        $qry = $db3->get('bank_acct');
        $qry = $db3->query("SELECT t0.*, t0.Id AS 'bId', t1.* FROM bank_acct t0 
                                LEFT JOIN bank_list t1 ON t1.BranchCode = t0.Bank");

        if ($qry->num_rows() > 0) {
            return $qry->result();
        }

    }

    function get_bp_name($bp_code)
    {
        $db = $this->load->database('db2', TRUE);
        $qry = $db->query("SELECT CardName FROM OCRD WHERE CardCode = '$bp_code' ");
        if ($qry->num_rows() > 0) {
            $data['row'] = $qry->result();
            return $data;
        }  
    }

    function store_add_bank_account()
    {
        $db = $this->load->database('db3', TRUE);
        $data = array(
            'Code' => $this->input->post('bp_code'),
            'Name' => strtoupper($this->input->post('bp_name')),
            'Bank' => $this->input->post('bene_bank_name'),
            'Account_No' => $this->input->post('account_code')
        );

        $db->insert('bank_acct', $data);
        
    }


}