<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 12:11
 */

namespace decorateur\supplement;


class LaitSoja extends Supplement
{
    public function getDescription(): string {
        return $this->breuvage->getDescription() . ' avec du lait de soja';
    }
    public function getPrix(): float {
        return $this->breuvage->getPrix() + 1;
    }
}