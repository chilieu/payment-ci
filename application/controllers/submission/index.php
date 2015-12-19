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
		if( empty($data) ) {
			echo 	'<script language="javascript" type="text/javascript">
						alert(\'Empty inputs.\');
						window.location = "/";
    				</script>';exit();
		}

		// Enter the email where you want to receive the notification when someone submit form
		$recipient = "chi.lieu@cloudberrysoft.com, quan.luu@cloudberrysoft.com, binlieu777@yahoo.com";
		$subject = "Contact Form";
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

	public function support()
	{
		$data = $this->input->post();
		if( empty($data) ) {
			echo 	'<script language="javascript" type="text/javascript">
						alert(\'Empty inputs.\');
						window.location = "/";
    				</script>';exit();
		}

		// Enter the email where you want to receive the notification when someone submit form
		$recipient = "chi.lieu@cloudberrysoft.com, quan.luu@cloudberrysoft.com, binlieu777@yahoo.com";
		$subject = "Contact Form";
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
		print_r($this->input->post());
		print_r($data);exit();
		if( empty($data) ) {
			echo 	'<script language="javascript" type="text/javascript">
						alert(\'Empty inputs.'.$data.' ----- \');
						window.location = "/";
    				</script>';exit();
		}

		$this->load->helper('file');
		    if ( ! write_file( APPPATH . 'db/files/subscribe.txt', $data, 'a'))
		    {
					echo 	'<script language="javascript" type="text/javascript">
								alert(\'Unable to write the file\');
								window.location = "/";
		    				</script>';exit();
		    }
		    else
		    {
	    			echo 	'<script language="javascript" type="text/javascript">
								alert(\'Your email has been saved.\');
								window.location = "/";
    						</script>';exit();
		    }

	}

}
