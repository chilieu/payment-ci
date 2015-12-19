<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Front_Controller
{
	private $layout;
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'hosting-layout';
	}
	public function index()
	{
		$this->viewData['_body'] = $this->load->view( $this->APP . '/hosting/index-body', array(), true);
		$this->render( $this->layout );
	}
}
