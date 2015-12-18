<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Front_Controller
{
	private $layout;
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'contact-us-layout';
	}
	public function index()
	{
		$this->viewData['_body'] = $this->load->view( $this->APP . '/contact-us/index-body', array(), true);
		$this->render( $this->layout );
	}
}
