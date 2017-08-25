<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 14:51
 */

namespace observable\rpg;


use observable\interfaces\IObservableRpg;

class HealButton implements IObservableRpg {
    private $hidden = false;

    public function draw() {
        $display = 'block';
        if($this->hidden) {
            $display = 'none';
        }

        echo '<form style="display:'.$display.'">'
            . '<button name="action" value="heal">Heal</button>'
            . '</form>';
    }

    public function update(int $hp, int $mp) {
        if($hp >= 100 || $mp < 25) {
            $this->hidden = true;
        }else {
            $this->hidden = false;
        }
        $this->draw();
    }
}