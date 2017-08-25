<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 11:19
 */

namespace command;


use command\action\ICommand;

class RemoteControl {
    private $buttons = [];
    private $history = [];

    public function addAction(ICommand $commande) {
        $this->buttons[] = $commande;
    }

    public function pushOnButton(int $index) {
        $this->buttons[$index]->execute();
        $this->history[] = $this->buttons[$index];
    }

    public function cancelButton() {
        if (count($this->history) > 0){
            $this->history[count($this->history)-1]->cancel();
            array_splice($this->history, count($this->history)-1, 1);
        }
    }
}