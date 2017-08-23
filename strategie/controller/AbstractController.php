<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 23/08/17
 * Time: 10:28
 */
namespace strategie\controller;

class AbstractController
{
    private $access;

    public function __construct(IWebAccess $access) {
        $this->access = $access;
        $this->init();
    }

    private function init() {
        if(!$this->access->userHasAccess()) {
            header('Location: index.php');
        }
    }
}