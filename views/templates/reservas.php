<div class="mostrar">
     <h2>Reservas</h2>
     <?php  
      
      //Pegar o ID do funcionario

      foreach($_SESSION['Logado']['login'] as $key  => $value){
          $id_usuario =  $value;
     }
      //Pegar o ID do funcionario

       
      // Selecionar no banco de dados a reserva do funcionario por id
         
      $sql = \MySql::connect()->prepare("SELECT * FROM tb_agendados INNER JOIN servicos ON tb_agendados.id_servicos = servicos.id_servicos INNER JOIN clientes ON tb_agendados.id_usuario = clientes.id_cliente INNER JOIN funcionarios ON     tb_agendados.id_funcionario = funcionarios.id_funcionario WHERE id_usuario ='$id_usuario'");
      $sql->execute();
       // Selecionar no banco de dados a reserva do funcionario por id
        
       if($sql->rowCount() == 0){
       ?>
         <div id="marcado"> Nada foi marcado ainda</div>
        <?php
      }else{
 
          foreach ($sql as $key => $value) {
               # code...
               echo '<div class="selectradius"> <div class="opa"> Funcionario: '.$value['nome_funcionario'].'</div>  <div class="opa"> Serviço: '. $value['servico'] . ': R$' . $value['preco'] .'</div>  <div class="opa"> Horário: '. $value['horario'] . '</div>  <div class="opa">  Cliente: '. $value['nome'] . '</div> 
            
                <div class="Des"> <button><a href="?agenda='.$value['id_agenda'].'">Desmarcar</a></button> </div>
           
               </div>';
          }
 
     }     
     
   \controllers\ReservasController::DesmarcarUsuario(); 
?>
</div>

<div class="alturareservas"></div>


 
