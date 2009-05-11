<?php 
/* SVN FILE: $Id$ */
/* AcessoriosController Test cases generated on: 2009-05-02 20:05:40 : 1241308300*/
App::import('Controller', 'Acessorios');

class TestAcessorios extends AcessoriosController {
	var $autoRender = false;
}

class AcessoriosControllerTest extends CakeTestCase {
	var $Acessorios = null;

	function setUp() {
		$this->Acessorios = new TestAcessorios();
		$this->Acessorios->constructClasses();
	}

	function testAcessoriosControllerInstance() {
		$this->assertTrue(is_a($this->Acessorios, 'AcessoriosController'));
	}

	function tearDown() {
		unset($this->Acessorios);
	}
}
?>