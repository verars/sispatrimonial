<?php 
/* SVN FILE: $Id$ */
/* AcessoriosController Test cases generated on: 2009-05-29 13:05:32 : 1243616372*/
App::import('Controller', 'Acessorios');

class TestAcessorios extends AcessoriosController {
	var $autoRender = false;
}

class AcessoriosControllerTest extends CakeTestCase {
	var $Acessorios = null;

	function startTest() {
		$this->Acessorios = new TestAcessorios();
		$this->Acessorios->constructClasses();
	}

	function testAcessoriosControllerInstance() {
		$this->assertTrue(is_a($this->Acessorios, 'AcessoriosController'));
	}

	function endTest() {
		unset($this->Acessorios);
	}
}
?>