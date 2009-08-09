<?php
/**
 * Zinc App
 *
 * @category   Zinc
 * @package    Zinc
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2009 Found Line, Inc. (http://www.foundline.com/)
 * @license    http://www.foundline.com/legal/software-license/ New BSD License
 * @version    $Id$
 */

/**
 * @category   Zinc
 * @package    Zinc
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2009 Found Line, Inc. (http://www.foundline.com/)
 * @license    http://www.foundline.com/legal/software-license/ New BSD License
 */
class Zinc_AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Zinc App - Zinc');

        $suite->addTest(Zinc_Model_AllTests::suite());

        return $suite;
    }    
}
