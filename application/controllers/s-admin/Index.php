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
		echo "Welcome to CBS Super Admin Payment System. Please login to manage your payment";
	}


}
