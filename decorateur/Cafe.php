<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 11:50
 */
namespace decorateur;

class Cafe implements IBreuvage
{
    public function getDescription(): string {
        return 'Un café arabica';
    }
    public function getPrix(): float {
        return 1;
    }
}