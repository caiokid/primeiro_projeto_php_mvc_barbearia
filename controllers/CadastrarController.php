<?php
	namespace controllers;
	/**
	* 
	*/
	class CadastrarController extends Controller{
		
	public function __construct($view,$model){
		parent::__construct($view,$model);
	}


		
	public static function ValidarEmail(){
		if(isset($_POST['cadastrar'])){
		
			  
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
		

			//Validar e-mail
	              					
			if(filter_var($email , FILTER_VALIDATE_EMAIL)){
		
				\models\CadastrarModel::CadastroPage($nome,$email,$senha);
				
			}else{
				 
				echo '<div id="marcado">Digite os campos corretamente</div>';
		
			}
			  
		        //Validar e-mail
			  
			}
    	}        



	public function index(){

		$this->view->render('cadastrar.php');
			
	}
}
?>