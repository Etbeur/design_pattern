<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 14:50
 */

namespace observable\rpg;


use observable\interfaces\IObservableRpg;

class DamageButton implements IObservableRpg {
    private $hidden = false;

    public function draw() {
        $display = 'block';
        if($this->hidden) {
            $display = 'none';
        }

        echo '<form style="display:'.$display.'">'
            . '<button name="action" value="damage">Get Damage</button>'
            . '</form>';
    }

    public function update(int $hp, int $mp) {
        if($hp <= 0) {
            $this->hidden = true;
        }else {
            $this->hidden = false;
        }
        $this->draw();
    }
}