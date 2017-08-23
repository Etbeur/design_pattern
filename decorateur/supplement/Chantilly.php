<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 12:10
 */

namespace decorateur\supplement;


class Chantilly extends Supplement
{
    public function getDescription(): string {
        return $this->breuvage->getDescription() . ' avec de la chantilly';
    }
    public function getPrix(): float {
        return $this->breuvage->getPrix() + 0.5;
    }
}