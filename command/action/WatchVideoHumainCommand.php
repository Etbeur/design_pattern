<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 10:52
 */

namespace command\action;


use adaptateur\Humain;

class WatchVideoHumainCommand implements ICommand {
    private $humain;

    public function __construct(Humain $humain) {
        $this->humain = $humain;
    }

    public function execute(){
        echo $this->humain->watchVideo();
    }

    public function cancel(  ) {
        echo $this->humain->goSleep();
    }
}