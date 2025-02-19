<section class="reserva">
		<div class="center">
			<form class="reservar" method="post">
			 <?php 

			
			   $dataHora = "";
			   $Diasemportugues = "";
			   $diasIngles = "";

			   

			 //Mostrar o nome do Funcionario
                       
			  foreach ($_SESSION['Logado']['funcionario'] as $key => $value) {
				# code...
				$id_func = $value;
			}

			 $sql = \MySql::connect()->prepare("SELECT * FROM funcionarios WHERE id_funcionario = '$id_func'");
			 $sql->execute();
			 foreach ($sql as $key => $value) {
				# code...
			 ?>


			    <h2> <?php echo $value['nome_funcionario'];  ?> </h2>

			 <?php }?>
				
				<select name="dataHora"  class="dataHor">
					<?php
					  

					    //Mostrar Horários disponiveis a partir da hora a atual e do id do funcionario

						    $dataAtual = new DateTime();


							$diasIngles = $dataAtual->format('l');


							$Diasemportugues = array('Sunday' => 'Domingo','Monday' => 'Segunda-Feira', 'Tuesday' => 'Terça-Feira','Wednesday'=>'Quarta-Feira','Thursday'=>'Quinta-Feira','Friday'=>'Sexta-feira','Saturday'=>'Sábado');

					   
						for($i = 0; $i <= 22; $i++){
							$hora = $i;
							if($i < 10){
								$hora = '0'.$hora ;
							}

							$hora.=':00:00';
							$verifica = date('Y-m-d').' '.$hora;
                              
							foreach ($_SESSION['Logado']['funcionario'] as $key => $value){
								# code...
								$id_func = $value;
							}

							$sql = \MySql::connect()->prepare("SELECT * FROM `tb_agendados` WHERE horario = '$verifica' AND id_funcionario = '$id_func'");
							$sql->execute();

							   if($sql->rowCount() == 0 && strtotime($verifica) > time()){

								$dataHora = date('d/m/Y').' '.$hora;
								echo '<option value="'.$dataHora.'">'.$Diasemportugues[$diasIngles].' '.$dataHora.'</option>';

								
							}
						} 
						?>
				</select>
				<input type="submit" name="acao" value="Reservar!">

			<?php \controllers\ReservarController::ReservarUsuario( $Diasemportugues[$diasIngles]);  ?>
               
			</form>
		</div>
	</section>
    <div class="alturareservar"></div>

