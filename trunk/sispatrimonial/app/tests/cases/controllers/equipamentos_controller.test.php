<?php 
/* SVN FILE: $Id$ */
/* EquipamentosController Test cases generated on: 2009-05-02 20:05:40 : 1241308720*/
App::import('Controller', 'Equipamentos');

class TestEquipamentos extends EquipamentosController {
	var $autoRender = false;
}

class EquipamentosControllerTest extends CakeTestCase {
	var $Equipamentos = null;

	function setUp() {
		$this->Equipamentos = new TestEquipamentos();
		$this->Equipamentos->constructClasses();
	}

	function testEquipamentosControllerInstance() {
		$this->assertTrue(is_a($this->Equipamentos, 'EquipamentosController'));
	}

	function tearDown() {
		unset($this->Equipamentos);
	}
}
?>