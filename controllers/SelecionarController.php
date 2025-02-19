<?php
	namespace controllers;
	/**
	* 
	*/
	class SelecionarController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}


        public static function SelecionarFuncionario(): void{        
            if(isset($_GET['funcionario'])){
                print_r($_SESSION);
        
                 
                 
                $id_funcionario = $_GET['funcionario'];
        
        
                $_SESSION['Logado']['funcionario'] = array('id_funcionario' =>$id_funcionario );
        
                header('Location:reservar');
            }
        
        }


		public function index(){

			$this->view->render('selecionar.php');
			
		}
	}