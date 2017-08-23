<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 22/08/17
 * Time: 11:32
 */

namespace strategie;


use strategie\task\CookTask;

class CookRobot extends Robot
{
    public function __construct()
    {
        parent::__construct(new CookTask());
    }
}