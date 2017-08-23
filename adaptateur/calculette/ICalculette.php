<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 11:22
 */

namespace adaptateur\calculette;


interface ICalculette
{
    function calculer(int $a, int $b, string $operateur);
}