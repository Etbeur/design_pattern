<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 11:23
 */

namespace adaptateur\calculette;


class OldCalculette
{
    public function additionner(int $a, int $b) {
        return $a+$b;
    }
    public function soustraire(int $a, int $b) {
        return $a-$b;
    }
    public function diviser(int $a, int $b) {
        return $a/$b;
    }
    public function multiplier(int $a, int $b) {
        return $a*$b;
    }
}