<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:01
 */

namespace strategie\room\access;


use strategie\CleanRobot;
use strategie\Robot;
use strategie\RoombaRobot;

class CleanAccess implements IAccess
{
    public function hasAccess(Robot $robot): bool {
        if($robot instanceof CleanRobot || $robot instanceof RoombaRobot){
            return true;
        }
        return false;
    }
}