<?php 


class Dashboard extends MY_Controller{

	public function __construct()
	{
		parent::__construct();

		// Force SSL
		//$this->force_ssl();

		// Form and URL helpers always loaded (just for convenience)
		$this->is_logged_in();
	}

	function index(){
			
			$this->template->render('index');	
	}
}