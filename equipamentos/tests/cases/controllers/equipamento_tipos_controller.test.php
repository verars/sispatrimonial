<?php 
/* SVN FILE: $Id$ */
/* EquipamentoTiposController Test cases generated on: 2009-05-29 13:05:35 : 1243616375*/
App::import('Controller', 'EquipamentoTipos');

class TestEquipamentoTipos extends EquipamentoTiposController {
	var $autoRender = false;
}

class EquipamentoTiposControllerTest extends CakeTestCase {
	var $EquipamentoTipos = null;

	function startTest() {
		$this->EquipamentoTipos = new TestEquipamentoTipos();
		$this->EquipamentoTipos->constructClasses();
	}

	function testEquipamentoTiposControllerInstance() {
		$this->assertTrue(is_a($this->EquipamentoTipos, 'EquipamentoTiposController'));
	}

	function endTest() {
		unset($this->EquipamentoTipos);
	}
}
?>