<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manage extends Sadmin_Controller
{
	private $layout;
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'layout';
	}
	public function index()
	{
		$this->viewData['_body'] = $this->load->view( $this->APP . '/login/index-body', array(), true);
		$this->render( $this->layout );
	}

	public function dashboard() {

		$this->viewData['_body'] = $this->load->view( $this->APP . '/dashboard/index', array(), true);
		$this->render( $this->layout );
	}

}
