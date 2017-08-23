<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 14:59
 */

namespace decorateur\logger;

use strategie\Robot;

class LoggerHtml extends AbstractLogger
{
    public function autoriser(Robot $robot) {
        echo '<p class="log">'.date('d/m/Y h:i:s').' DEBUT appel de la méthode autoriser'
            . 'pour le robot '. get_class($robot).'</p>';
        $reponse =  $this->room->autoriser($robot);
        echo '<p class="log">'.date('d/m/Y h:i:s').' FIN appel de la méthode autoriser'
            . ' pour le robot '. get_class($robot).'</p>';
        return $reponse;

    }
}