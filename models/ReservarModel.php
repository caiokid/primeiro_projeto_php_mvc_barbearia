<?php

namespace models;

class ReservarModel extends Model
{
	
  public static function Reservar($id_usuario,$id_funcionario,$id_servico,$dataHora,$Diasemportugues){
        
		$sql = \MySql::connect()->prepare("INSERT INTO tb_agendados(id_agenda, id_usuario, id_funcionario, id_servicos,horario,dia) VALUES (null,?,?,?,?,?)");
		$sql->execute(array($id_usuario,$id_funcionario,$id_servico,$dataHora,$Diasemportugues));

  }
	
	
}

