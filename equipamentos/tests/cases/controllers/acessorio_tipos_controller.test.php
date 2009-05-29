<?php 
/* SVN FILE: $Id$ */
/* AcessorioTiposController Test cases generated on: 2009-05-29 13:05:29 : 1243616369*/
App::import('Controller', 'AcessorioTipos');

class TestAcessorioTipos extends AcessorioTiposController {
	var $autoRender = false;
}

class AcessorioTiposControllerTest extends CakeTestCase {
	var $AcessorioTipos = null;

	function startTest() {
		$this->AcessorioTipos = new TestAcessorioTipos();
		$this->AcessorioTipos->constructClasses();
	}

	function testAcessorioTiposControllerInstance() {
		$this->assertTrue(is_a($this->AcessorioTipos, 'AcessorioTiposController'));
	}

	function endTest() {
		unset($this->AcessorioTipos);
	}
}
?>