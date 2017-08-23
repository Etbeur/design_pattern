<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 09:58
 */

namespace strategie\room;
use strategie\room\access\AllAccess;

class Kitchen extends Room
{
    public function __construct(){
        parent::__construct(new AllAccess());
    }
}