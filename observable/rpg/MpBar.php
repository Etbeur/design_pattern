<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 14:54
 */

namespace observable\rpg;


use observable\interfaces\IObservableRpg;

class MpBar implements IObservableRpg {

    public function draw($mp) {
        echo '<div class="bar"><div class="mp lvl" style="width:'
            .$mp. '%"></div></div>';
    }

    public function update(int $hp, int $mp) {
        $this->draw($mp);
    }
}