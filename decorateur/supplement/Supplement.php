<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 12:08
 */
namespace decorateur\supplement;

use decorateur\IBreuvage;

abstract class Supplement implements IBreuvage
{
    protected $breuvage;

    public function __construct(IBreuvage $breuvage) {
        $this->breuvage = $breuvage;
    }
}