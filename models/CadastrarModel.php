<?php
	namespace models;
	class CadastrarModel extends Model
	{

		//Aqui é o método para puxar os clientes!
		
		
		public static function CadastroPage($nome,$email,$senha){
		            
				//Validar e-mail

				$sql1 = \MySql::connect()->prepare('SELECT * FROM clientes WHERE email = ?');
				$sql1->execute(array($email));
				   
				if($sql1->rowCount() == 1){
					echo '<div id="marcado">Digite outro email pois este já está em uso</div>';
				}else{
					//Inserir no banco pois nada está errado
					$sql = \MySql::connect()->prepare('INSERT INTO clientes(nome, email, senha) VALUES (?,?,?)');
					$sql->execute(array($nome,$email,$senha));
                      
					echo  '<div id="inserido"> Inserido com Sucesso</div>';
				}
				
				}
		}
		
		

?>