<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sadmin_Controller extends Global_Controller
{
	protected $APP = 'sadmin';
	public function __construct($theme=null)
	{
		if (empty($theme)) {
			$theme = 'sadmin';
		}
		parent::__construct($theme);
	}
}