<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Sadmin_Controller
{
	private $layout;
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'layout';
	}
	public function index()
	{

		$this->layout = 'login-layout';
		$this->viewData['_body'] = $this->load->view( $this->APP . '/login/index-body', array(), true);
		$this->render( $this->layout );
	}


}
