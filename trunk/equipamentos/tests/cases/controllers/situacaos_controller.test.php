<?php 
/* SVN FILE: $Id$ */
/* SituacaosController Test cases generated on: 2009-05-29 13:05:39 : 1243616379*/
App::import('Controller', 'Situacaos');

class TestSituacaos extends SituacaosController {
	var $autoRender = false;
}

class SituacaosControllerTest extends CakeTestCase {
	var $Situacaos = null;

	function startTest() {
		$this->Situacaos = new TestSituacaos();
		$this->Situacaos->constructClasses();
	}

	function testSituacaosControllerInstance() {
		$this->assertTrue(is_a($this->Situacaos, 'SituacaosController'));
	}

	function endTest() {
		unset($this->Situacaos);
	}
}
?>