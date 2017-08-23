<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:08
 */

namespace strategie\room;


use strategie\Robot;
use strategie\room\access\IAccess;

abstract class Room
{
    private $access;

    public function __construct(IAccess $access) {
        $this->access = $access;
    }

    public function autoriser(Robot $robot) {
        if($this->access->hasAccess($robot)) {
            echo 'la porte est ouverte';
        }else{
            echo 'la porte reste fermée';
        }
    }
}