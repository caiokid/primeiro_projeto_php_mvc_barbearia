<?php
ob_start();

session_start();

date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost:4306;dbname=reserva','root','');

setcookie('nome','Caio',time() + (60*60*24),"/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbearia Estilo</title>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>views/templates/css/style.css">

<body>
  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <header class="navbar">
    <div class="logo"> <a href="<?php echo INCLUDE_PATH; ?>">Barbearia estilo</a></div>
    <nav>
    <ul class="nav-links"> 
      <?php            
      if(!isset($_SESSION['Logado']))
      {
        ?>
        <a href="<?php echo INCLUDE_PATH; ?>login">Login</a>
        <a href="<?php echo INCLUDE_PATH; ?>cadastrar">Cadastrar</a>
        <?php 
      }
      else if(isset($_SESSION['Logado']))
      {
        //Verifica se não existe outra pessoa em outra sessão
        $token = $_SESSION['token'];  
        foreach ($_SESSION['Logado']['login'] as $key => $value) {
        $login = $value;
      }
        $check = $pdo->prepare('SELECT id FROM login  WHERE login = ? AND token = ?');  
        $check->execute(array($login, $token));
      if($check->rowCount() == 1){
      ?>
        <a href="<?php echo INCLUDE_PATH; ?>servicos">Reservar</a>
        <a href="<?php echo INCLUDE_PATH; ?>reservas">Reservas</a>
        <a href="?deslogar">Deslogar</a></li>
      <?php 
      }
      else{
        session_destroy();
        die('outra pessoa fez login em outro computador');
      } 
        }
     ?>
    </ul>
</nav>
</header>

<?php 
 if(isset($_GET['deslogar']))
 {
    session_destroy();
    header("Location:home");
 }
?>


 
