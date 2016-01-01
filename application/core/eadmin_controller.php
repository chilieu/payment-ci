<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Eadmin_Controller extends Global_Controller
{
	protected $APP = 'eadmin';
	public function __construct($theme=null)
	{
		if (empty($theme)) {
			$theme = 'eadmin';
		}
		parent::__construct($theme);
	}
}