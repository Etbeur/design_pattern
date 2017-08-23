<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 14:55
 */

namespace decorateur\logger;
use strategie\Robot;


class LoggerFile extends AbstractLogger
{
    public function autoriser(Robot $robot) {
        $file = fopen("log.txt", "a+");
        fwrite($file, date('d/m/Y h:i:s').' DEBUT appel de la méthode autoriser'
            . 'pour le robot '. get_class($robot)."\n");
        $reponse =  $this->room->autoriser($robot);
        fwrite($file,date('d/m/Y h:i:s').' FIN appel de la méthode autoriser'
            . 'pour le robot '. get_class($robot)."\n");
        fclose($file);
        return $reponse;

    }
}