<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
        $autoloader = Zend_Loader_Autoloader::getInstance();
        return $autoloader;
    }

    protected function _initZincAutoload()
    {
        $autoloader = new Zend_Application_Module_Autoloader(array(
            'namespace' => 'Zinc',
            'basePath' => APPLICATION_PATH . '/modules/zinc',
        ));
        return $autoloader;
    }
}

