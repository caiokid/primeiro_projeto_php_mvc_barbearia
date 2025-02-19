<?php
	namespace controllers;
	/**
	* 
	*/
	class ServicosController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}


        public static function SelecionarServicos(){
             
         
            if(isset($_GET['servico'])){
        
                print_r($_SESSION);
                 
                 
                $servico = $_GET['servico'];
        
        
                $_SESSION['Logado']['servico'] = array('id_servico' => $servico);
        
                header('Location:selecionar');
        
            }
        
        }


		public function index(){

			$this->view->render('servicos.php');
			
		}
	}