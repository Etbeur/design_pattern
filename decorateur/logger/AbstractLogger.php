<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 14:54
 */

namespace decorateur\logger;


use strategie\room\access\AllAccess;
use strategie\room\Room;

class AbstractLogger extends Room
{
    protected $room;

    public function __construct(Room $room) {
        parent::__construct(new AllAccess());
        $this->room = $room;
    }
}