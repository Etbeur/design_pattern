<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 24/08/17
 * Time: 12:09
 */

namespace factory\technician;


use abstractFactory\IFactory;

abstract class AbstractTechnician {

    protected abstract function createFactory():IFactory;

    public function deliver() {
        $fabrique = $this->createFactory();
        $cuisine = $fabrique->createKitchen();
        $cuistot = $fabrique->createCooker();
//        $cuistot->communiquer();
        $cuisine->autoriser($cuistot);
        $cuistot->doTask();

        $salon = $fabrique->createSalon();
        $menager = $fabrique->createCleaner();
        $salon->autoriser($menager);
        $menager->doTask();
    }
}