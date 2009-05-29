<?php 
/* SVN FILE: $Id$ */
/* EquipamentoMarcasController Test cases generated on: 2009-05-29 13:05:34 : 1243616374*/
App::import('Controller', 'EquipamentoMarcas');

class TestEquipamentoMarcas extends EquipamentoMarcasController {
	var $autoRender = false;
}

class EquipamentoMarcasControllerTest extends CakeTestCase {
	var $EquipamentoMarcas = null;

	function startTest() {
		$this->EquipamentoMarcas = new TestEquipamentoMarcas();
		$this->EquipamentoMarcas->constructClasses();
	}

	function testEquipamentoMarcasControllerInstance() {
		$this->assertTrue(is_a($this->EquipamentoMarcas, 'EquipamentoMarcasController'));
	}

	function endTest() {
		unset($this->EquipamentoMarcas);
	}
}
?>