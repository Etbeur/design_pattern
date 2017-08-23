<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 11:50
 */
namespace decorateur;

class Chocolat implements IBreuvage
{
    public function getDescription(): string {
        return 'Un bon benco';
    }
    public function getPrix(): float {
        return 2.5;
    }
}