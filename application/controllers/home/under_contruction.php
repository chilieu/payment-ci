<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Under_Contruction extends Front_Controller
{
	private $layout;
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'under-contruction';
	}
	public function index()
	{
		//$this->viewData['_body'] = $this->load->view( $this->APP . '/index/index-body', array(), true);
		$this->render( $this->layout );
	}
}