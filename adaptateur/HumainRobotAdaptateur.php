<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 11:00
 */

namespace adaptateur;

use strategie\Robot;
use strategie\task\CleanTask;

/**
 * Le pattern adaptateur va permettre de prendre une classe existante
 * et de l'insérer dans un autre système où elle ne pouvait pas rentrer
 * comme il faut.
 * Pour ce faire, on créer un adaptateur qui lui s'insère comme il faut
 * dans le système cible et qui utilise la classe existante pour faire
 * ses méthodes.
 * (ici, on fait un adaptateur pour déguiser un Humain en Robot pour
 * qu'il puisse utiliser les Piece qui attendent des Robot en
 * argument)
 */

class HumainRobotAdaptateur extends Robot
{
    //l'humain à adapter
    private $humain;

    public function __construct(Humain $humain) {
        //Ca, ça fait pas parti du pattern et c'est inutile,
        //c'est juste que PHP n'accepte pas le null comme il devrait
        parent::__construct(new CleanTask());
        $this->humain = $humain;
    }

    public function comunicate() {
        //On prend les méthode de l'Humain et on les adapte au Robot
        echo $this->humain->speaking();
    }

    public function doTask() {
        echo $this->humain->watchVideo();
    }
}