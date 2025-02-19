<?php

namespace models;

class ReservasModel extends Model
{

	public static function Desmarcar($agenda){

        \MySql::connect()->exec('DELETE FROM tb_agendados WHERE id_agenda = '.$agenda.'');
        header('Location:reservas');
        die();   
        
    }

}

