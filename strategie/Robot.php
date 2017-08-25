<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 22/08/17
 * Time: 11:19
 */
namespace strategie;

use strategie\task\Itask;

abstract class Robot
{
    private $task;
    private $comunication;
    private $cancel;

    public function __construct(Itask $task){
        $this->task = $task;
    }

    public function doTask(){
        $this->task->execute();
    }

    public function comunicate(){
        $this->comunication->comunicate();
    }

    public function cancel(){
        $this->cancel->cancel();
    }
}