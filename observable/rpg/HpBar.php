<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 25/08/17
 * Time: 14:52
 */

namespace observable\rpg;


use observable\interfaces\IObservableRpg;

class HpBar implements IObservableRpg {

    public function draw($hp) {
        echo '<div class="bar"><div class="hp lvl" style="width:'
            .$hp. '% "></div></div>';
    }

    public function update(int $hp, int $mp) {
        $this->draw($hp);
    }
}