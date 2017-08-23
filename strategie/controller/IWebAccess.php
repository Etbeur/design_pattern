<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:32
 */
namespace strategie\controller;

interface IWebAccess
{
    const ADMIN = 2;
    const USER = 1;

    function userHasAccess():bool;
}