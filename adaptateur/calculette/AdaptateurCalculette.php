<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 11:16
 */
namespace adaptateur\calculette;

class AdaptateurCalculette
{
    private $oldCalc;

    public function __construct(OldCalculette $oldCalc) {
        $this->oldCalc = $oldCalc;
    }

    public function calculer(int $a, int $b, string $operateur) {
        switch($operateur) {
            case '+':
            default:
                return $this->oldCalc->additionner($a, $b);
            case '-':
                return $this->oldCalc->soustraire($a, $b);
            case '*':
                return $this->oldCalc->multiplier($a, $b);
            case '/':
                return $this->oldCalc->diviser($a, $b);
        }
    }
}