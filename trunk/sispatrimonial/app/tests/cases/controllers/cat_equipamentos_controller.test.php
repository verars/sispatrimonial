<?php 
/* SVN FILE: $Id$ */
/* CatEquipamentosController Test cases generated on: 2009-05-02 20:05:10 : 1241308450*/
App::import('Controller', 'CatEquipamentos');

class TestCatEquipamentos extends CatEquipamentosController {
	var $autoRender = false;
}

class CatEquipamentosControllerTest extends CakeTestCase {
	var $CatEquipamentos = null;

	function setUp() {
		$this->CatEquipamentos = new TestCatEquipamentos();
		$this->CatEquipamentos->constructClasses();
	}

	function testCatEquipamentosControllerInstance() {
		$this->assertTrue(is_a($this->CatEquipamentos, 'CatEquipamentosController'));
	}

	function tearDown() {
		unset($this->CatEquipamentos);
	}
}
?>