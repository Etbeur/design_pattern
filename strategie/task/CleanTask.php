<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 22/08/17
 * Time: 11:24
 */

namespace strategie\task;


class CleanTask implements Itask
{
    public function execute(){
        echo "Robot is cleaning house!";
    }
}