<?php 

  defined("BASEPATH") OR exit('No direct script access allowed');

  class Errors extends MY_Controller{
  	function __construct(){
  		parent::__construct();
  	}

  	public function pagenotfound(){
  		$data['page']="404 Error - Page Not Found.";
  		
  		echo "<a href='".BASE_URL."'></a>";
  	}
  }

 ?>