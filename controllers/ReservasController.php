<?php
	namespace controllers;
	/**
	* 
	*/
 class ReservasController extends Controller
{
		
	public function __construct($view,$model){
		parent::__construct($view,$model);
	}

	public static function DesmarcarUsuario(){
		if(isset($_GET['agenda'])){
    
			$agenda = $_GET['agenda'];
	   
			 \models\ReservasModel::Desmarcar($agenda);
		   } 
	}

	public function index(){


		$this->view->render('reservas.php');
			
	}
}
