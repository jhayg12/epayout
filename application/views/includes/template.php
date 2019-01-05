<?php  

	$this->load->view('includes/header', $title);

	if(isset($error)) {
		$this->load->view($main, $error);
	} elseif(validation_errors()) {
		$this->load->view($main, validation_errors());
	} else {
		$this->load->view($main);
	}

	$this->load->view('includes/footer');

?>