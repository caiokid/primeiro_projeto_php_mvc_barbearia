<?php
	namespace controllers;
	/**
	* 
	*/
	class ReservarController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public static function ReservarUsuario($Diasemportugues){
		
			if(isset($_POST['acao'])){
				//Quero fazer uma reserva!

                $dataHora = $_POST['dataHora'];
				$date = \DateTime::createFromFormat('d/m/Y H:i:s', $dataHora);
				$dataHora =  $date->format('Y-m-d H:i:s');
					
				
			
				foreach ($_SESSION['Logado']['login'] as $key => $value) {
					# code...
			
					$id_usuario = $value;
		
				}
					 
				foreach ($_SESSION['Logado']['servico'] as $key => $value) {
					# code...
			
					$id_servico = $value;
		
				}
		
					  
				foreach ($_SESSION['Logado']['funcionario'] as $key => $value) {
					# code...
			
					$id_funcionario  = $value;
		
				}

               


		        \models\ReservarModel::Reservar($id_usuario,$id_funcionario,$id_servico,$dataHora,$Diasemportugues);
				
				header("Location:". INCLUDE_PATH ."reservar");
			}
		}

		public function index(){


			$this->view->render('reservar.php');
			
		}
	}