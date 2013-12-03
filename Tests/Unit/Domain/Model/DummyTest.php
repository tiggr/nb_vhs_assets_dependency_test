<?php

namespace Nb\NbVhsAssetsDependencyTest\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Daniel Schöne <daniel@schoene.it>, schoene.it
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Nb\NbVhsAssetsDependencyTest\Domain\Model\Dummy.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage VHS assets dependency test
 *
 * @author Daniel Schöne <daniel@schoene.it>
 */
class DummyTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Nb\NbVhsAssetsDependencyTest\Domain\Model\Dummy
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Nb\NbVhsAssetsDependencyTest\Domain\Model\Dummy();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	/**
	 * @test
	 */
	public function dummyTestToNotLeaveThisFileEmpty() {
		$this->markTestIncomplete();
	}
	
}
?>