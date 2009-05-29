<?php 
/* SVN FILE: $Id$ */
/* EquipamentosController Test cases generated on: 2009-05-29 13:05:37 : 1243616377*/
App::import('Controller', 'Equipamentos');

class TestEquipamentos extends EquipamentosController {
	var $autoRender = false;
}

class EquipamentosControllerTest extends CakeTestCase {
	var $Equipamentos = null;

	function startTest() {
		$this->Equipamentos = new TestEquipamentos();
		$this->Equipamentos->constructClasses();
	}

	function testEquipamentosControllerInstance() {
		$this->assertTrue(is_a($this->Equipamentos, 'EquipamentosController'));
	}

	function endTest() {
		unset($this->Equipamentos);
	}
}
?>