<?php
	namespace controllers;
	/**
	* 
	*/
	class LoginController extends Controller
{
		
	public function __construct($view,$model){
		parent::__construct($view,$model);
	}


	public static function LoginPag(){
		
		if(isset($_POST['login'])){

			$nome = $_POST['email'];
			$senha = $_POST['senha'];

			\models\LoginModel::LoginPage($nome,$senha);
		}
	}




	public function index(){
		
		$this->view->render('login.php');
		
	}
}