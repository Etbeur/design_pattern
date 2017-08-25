<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 10:09
 */

namespace command\action;


use strategie\Robot;

class TaskRobotCommand implements ICommand {
    private $robot;

    public function __construct(Robot $robot) {
        $this->robot = $robot;
    }

    public function execute(){
        $this->robot->doTask();
    }

    public function cancel() {
        $this->robot->stop();
    }
}