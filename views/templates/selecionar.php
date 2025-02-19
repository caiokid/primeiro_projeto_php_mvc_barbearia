<div class="centroservicos">

<div class="h2servicos"> <h2> Selecione um Funcionário </h2></div> 

<div class="servicos"> 
    <?php

      unset($_SESSION['Logado']['funcionario']);
      
      $sql = \MySql::connect()->prepare('SELECT * FROM funcionarios');
      $sql->execute();
 
     foreach ( $sql as $key => $value) {
         # code...
         echo '<div class="servicos"> <div class="link"> <a href="?funcionario='.$value['id_funcionario'].'"> '. $value['nome_funcionario'] .'</a> <br></div></div>';
      } 
    ?>    
    
  </div>


</div>

<div class="alturaselecionar"></div> 

<?php   \controllers\SelecionarController::SelecionarFuncionario(); ?>