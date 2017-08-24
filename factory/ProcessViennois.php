<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 10:08
 */

namespace factory;

use decorateur\IBreuvage;
use decorateur\supplement\Chantilly;
use decorateur\supplement\LaitSoja;

abstract class ProcessViennois
{
    private $recette = 0;

    protected abstract function creerBreuvage():IBreuvage;

    public function serveViennois() {
        $breuvage = new Chantilly(new LaitSoja($this->creerBreuvage()));
        $this->recette += $breuvage->getPrix();

        echo 'Je vous sers ' . $breuvage->getDescription();

    }
}