<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 11:21
 */

namespace adaptateur\calculette;


class Comptabilite
{
    private $calculette;

    public function __construct(ICalculette $calculette) {
        $this->calculette = $calculette;
    }

    public function faireLaCompta() {
        $CA = 100000;
        $nbEmployes = 5;
        $salaireEmploye = 2500;
        $salaires = $this->calculette->calculer($nbEmployes, $salaireEmploye, '*');

        $benefices = $this->calculette->calculer($CA, $salaires, '-');

        echo 'Le total des salaires est ' . $salaires . '€ et les '
            . 'bénéfices de la boîte sont de ' . $benefices . '€';

    }
}