<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 22/08/17
 * Time: 10:14
 */
namespace singleton;

/**
 * Class Singleton
 * Le singleton permet d'avoir une classe dont on ne pourra créer qu'une
 * seule instance qui sera réutilisée partout dans l'application.
 */

class Singleton {
    private static $instance;

    private $compteur;

    private function __construct() {
        $this->compteur = 0;
    }

    private function clone(){

    }

    public static function getInstance():Singleton {
        if( is_null(self::$instance) ){
           self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function count(){
        $this->compteur++;
        return $this->compteur;
    }
}