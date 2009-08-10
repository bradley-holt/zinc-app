<?php
/**
 * Zinc App
 *
 * @category   Zinc
 * @package    Zinc_Model
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2009 Found Line, Inc. (http://www.foundline.com/)
 * @license    http://www.foundline.com/legal/software-license/ New BSD License
 * @version    $Id$
 */

require_once 'Zinc/Model/Atom/EntryTest.php';

/**
 * @category   Zinc
 * @package    Zinc_Model
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2009 Found Line, Inc. (http://www.foundline.com/)
 * @license    http://www.foundline.com/legal/software-license/ New BSD License
 */
class Zinc_Model_AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Zinc App - Zinc_Model');

        $suite->addTestSuite('Zinc_Model_Atom_EntryTest');

        return $suite;
    }    
}
