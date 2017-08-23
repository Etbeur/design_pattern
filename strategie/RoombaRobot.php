<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 22/08/17
 * Time: 11:33
 */

namespace strategie;


use strategie\task\CleanTask;

class RoombaRobot extends Robot
{
    public function __construct()
    {
        parent::__construct(new CleanTask());
    }
}