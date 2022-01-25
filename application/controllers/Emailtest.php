<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailtest extends CI_Controller {


	public function index()
	{
		$email['protocol'] = 'smtp';
		$email['smtp_host'] = 'smtp.gmail.com';
		$email['smtp_user'] = ""; //supply user name
		$email['smtp_pass'] = ''; //supply password
		$email['smtp_port'] = '587';
		$email['smtp_crypto'] = 'tls';
		$this->load->library('email', $email);

		$this->email->set_newline("\r\n");
	 $this->email->subject('Testing 123');
	 $this->email->to(''); //supply proper email
	 $this->email->from(''); //supply proper email
	 $this->email->message('testing testing 123 from codeigniter');
	 $this->email->send();
	echo $this->email->print_debugger();
echo "i hate rizal";
	}
}
