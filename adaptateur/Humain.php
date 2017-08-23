<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:57
 */
namespace adaptateur;

class Humain
{
    private $nom;
    private $prenom;

    function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function speaking():string {
        return 'Salut je suis '.$this->nom.' '.$this->prenom.
            ' et je suis un humain';
    }

    public function watchVideo():string {
        return 'Je regarde des vidéos de snowboard';
    }
}