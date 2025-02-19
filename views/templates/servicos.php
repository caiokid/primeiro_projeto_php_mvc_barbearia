<?php  unset($_SESSION['Logado']['servico']); ?>
 <div class="centroservicos">

  <div class="h2servicos"> <h2> Selecione um serviço </h2></div> 


  
   <?php   
    //Deletar a ultimá sessão pois pode haver conflito e ir adicionando mais e mais serviços
    //Deletar a ultimá sessão pois pode haver conflito e ir adicionando mais e mais serviços

     
      
    $sql = \MySql::connect()->prepare('SELECT * FROM servicos');
    $sql->execute();
 
    foreach ( $sql as $key => $value) {
      # code...
      echo '<div class="servicos">  <div class="link"><a href="?servico='.$value['id_servicos'].'"> '. $value['servico'] . ': R$' . $value['preco'] .'</a> <br></div></div>';
      } 
    ?>  
  </div>

  <div id="Logado">Logado com Sucesso<br> Agora selecione um Serviço</div>

 

  <div class="altura"></div>

<?php 

\controllers\ServicosController::SelecionarServicos();

?>