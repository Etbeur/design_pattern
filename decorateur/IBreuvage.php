<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 11:50
 */
namespace decorateur;

interface IBreuvage
{
    function getDescription():string;
    function getPrix():float;
}