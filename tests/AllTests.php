<?php
/**
 * Zinc App
 *
 * @category   Zinc
 * @package    UnitTests
 * @copyright  Copyright (c) 2005-2009 Found Line, Inc. (http://www.foundline.com/)
 * @license    http://www.foundline.com/legal/software-license/ New BSD License
 * @version    $Id$
 */

/**
 * All Tests
 *
 * @category   Zinc
 * @package    UnitTests
 * @copyright  Copyright (c) 2005-2009 Found Line, Inc. (http://www.foundline.com/)
 * @license    http://www.foundline.com/legal/software-license/ New BSD License
 */
class AllTests
{
    public static function suite()
    {
        // Define path to application directory
        defined('APPLICATION_PATH')
            || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));

        // Define application environment
        defined('APPLICATION_ENV')
            || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'testing'));

        // Ensure library/ is on include_path
//        set_include_path(implode(PATH_SEPARATOR, array(
//            realpath(APPLICATION_PATH . '/../library'),
//            get_include_path(),
//        )));

        /** Zend_Application */
        require_once 'Zend/Application.php';  

        // Create application, bootstrap, and run
        $application = new Zend_Application(
            APPLICATION_ENV, 
            APPLICATION_PATH . '/configs/application.ini'
        );
        $application->bootstrap();//->run();

        $suite = new PHPUnit_Framework_TestSuite('Zinc App');

        $suite->addTest(Zinc_AllTests::suite());

        return $suite;
    }    
}
