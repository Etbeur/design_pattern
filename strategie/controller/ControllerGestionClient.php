<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:29
 */
namespace strategie\controller;

class ControllerGestionClient extends AbstractController
{
    public function __construct() {
        parent::__construct(new AdminAccess());
}
}