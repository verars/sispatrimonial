<?php 
/* SVN FILE: $Id$ */
/* MarcasController Test cases generated on: 2009-05-02 20:05:54 : 1241308134*/
App::import('Controller', 'Marcas');

class TestMarcas extends MarcasController {
	var $autoRender = false;
}

class MarcasControllerTest extends CakeTestCase {
	var $Marcas = null;

	function setUp() {
		$this->Marcas = new TestMarcas();
		$this->Marcas->constructClasses();
	}

	function testMarcasControllerInstance() {
		$this->assertTrue(is_a($this->Marcas, 'MarcasController'));
	}

	function tearDown() {
		unset($this->Marcas);
	}
}
?>