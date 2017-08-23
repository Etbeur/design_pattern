<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 22/08/17
 * Time: 11:25
 */

namespace strategie\task;


class CookTask implements Itask
{
    public function execute(){
        echo "Robot is cooking for family!";
    }
}