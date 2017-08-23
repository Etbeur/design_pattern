<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 22/08/17
 * Time: 10:21
 */

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}
spl_autoload_register('myLoader');

use singleton\Singleton;

$singleton = Singleton::getInstance();

$singleton->count();
$singleton->count();

$singleton = Singleton::getInstance();

$singleton->count();
$singleton->count();

echo "test";