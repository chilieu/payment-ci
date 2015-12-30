<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Front_Controller
{
	private $layout;
	public function __construct()
	{
		parent::__construct();
		//$this->layout = 'hosting-layout';
	}
	public function index()
	{
		echo "going on ....";
	}

	public function contactUs()
	{
		$data = $this->input->post();
		$url = empty($_SERVER['HTTP_REFERER']) ? "/" : $_SERVER['HTTP_REFERER'];
		if( !count($data) || !empty($data['as']) || empty($data['email']) ) {
			$this->ajaxResponse(1, "Empty inputs");
			exit();
		}

		// Enter the email where you want to receive the notification when someone submit form
		$recipient = "contact@cloudberrysoft.com";
		$subject = "Contact Form";
		$formcontent = print_r($data,true);

		$this->load->helper('email');
		$success = send_email($recipient, $subject, $formcontent);

		if ($success == true){
			$this->ajaxResponse(0, "Thank you for you e-mail. We will contact you shortly.");
			exit();
		} else {
			$this->ajaxResponse(1, "Email cannot be sent");
			exit();
		}
	}

	public function support()
	{
		$data = $this->input->post();
		if( count($data) ) {
			echo 	'<script language="javascript" type="text/javascript">
						alert(\'Empty inputs.\');
						window.location = "/";
    				</script>';exit();
		}

		// Enter the email where you want to receive the notification when someone submit form
		$recipient = "contact@cloudberrysoft.com";
		$subject = "Support Form";
		$formcontent = print_r($data,true);

		$this->load->helper('email');
		$success = send_email($recipient, $subject, $formcontent);

		if ($success == true){
			echo 	'<script language="javascript" type="text/javascript">
						alert(\'Thank you for you e-mail. We will contact you shortly.\');
						window.location = "/";
					</script>';
		} else {
			echo 	'<script language="javascript" type="text/javascript">
						alert(\'Email cannot send.\');
						window.location = "/";
    				</script>';
		}
		exit();
	}

	public function subscribe()
	{
		$data = $this->input->post('email');
		if( empty($data) ) {
			$this->ajaxResponse(1, "Please enter your email");
			exit();
		}

		$this->load->library('user_agent');
		$this->load->helper('file');
		$url = empty($_SERVER['HTTP_REFERER']) ? "/" : $_SERVER['HTTP_REFERER'];

	    if ( !write_file( APPPATH . 'db/files/subscribe.txt', $data . "\n", 'a'))
	    {
			$this->ajaxResponse(1, "System error");exit();
	    }
	    else
	    {
	    	$this->ajaxResponse(0, "Your email has been saved");exit();
	    }

	}

}
