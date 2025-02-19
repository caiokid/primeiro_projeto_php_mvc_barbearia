<?php

namespace models;

class LoginModel extends Model
{
	
    public static function LoginPage($nome,$senha){
        \MySql::connect();  
        $sql = \MySql::connect()->prepare("SELECT * FROM clientes WHERE email = ? AND senha = ?");
        $sql->execute(array($nome, $senha));
        
        if($sql->rowCount() == 1){
           
           echo '<p>Logado com Sucesso </p>';
    
           foreach ($sql as $key => $value) {
                # code...
                $cliente_cod = $value['id_cliente'];
            }
            
            $_SESSION['Logado']['login'] = array('cod_usuario' => $cliente_cod);
            $_SESSION['token'] = uniqid();
            $sql = \MySql::connect()->prepare('DELETE FROM login WHERE Login = ?');
            $sql->execute(array($cliente_cod));
            $sql = \MySql::connect()->prepare('INSERT INTO login VALUES (null,?,?)');
            $sql->execute(array($cliente_cod,$_SESSION['token']));
    
            header("Location:servicos");
            
        }else{
            echo '<div id="marcado">Nada foi encontrado</div>';
        }
 
    }
}