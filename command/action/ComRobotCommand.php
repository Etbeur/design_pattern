<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 10:18
 */

namespace command\action;


use strategie\Robot;

class ComRobotCommand implements ICommand {
    private $robot;

    public function __construct( Robot $robot ) {
        $this->robot = $robot;
    }

    public function execute() {
        $this->robot->comunicate();
    }
    public function cancel() {
        $this->robot->cancel();
    }
}