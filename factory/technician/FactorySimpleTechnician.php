<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 12:15
 */

namespace factory\technician;


class FactorySimpleTechnician {
    public static function createTechnician(string $type):AbstractTechnician {
        switch($type) {
            case 'particular':
            default:
                return new ParticularTechnician();
            case 'pro':
                return new ProTechnician();
        }
    }
}