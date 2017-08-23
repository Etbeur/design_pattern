<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:28
 */
namespace strategie\controller;

class AdminAccess implements IWebAccess
{
    public function userHasAccess(): bool {
        if(!empty($_SESSION['user'])
            && $_SESSION['user']->rights === IWebAccess::ADMIN){
            return true;
        }
        return false;
    }
}