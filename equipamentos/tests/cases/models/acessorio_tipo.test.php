<?php 
/* SVN FILE: $Id$ */
/* AcessorioTipo Test cases generated on: 2009-05-29 13:05:28 : 1243616368*/
App::import('Model', 'AcessorioTipo');

class AcessorioTipoTestCase extends CakeTestCase {
	var $AcessorioTipo = null;
	var $fixtures = array('app.acessorio_tipo');

	function startTest() {
		$this->AcessorioTipo =& ClassRegistry::init('AcessorioTipo');
	}

	function testAcessorioTipoInstance() {
		$this->assertTrue(is_a($this->AcessorioTipo, 'AcessorioTipo'));
	}

	function testAcessorioTipoFind() {
		$this->AcessorioTipo->recursive = -1;
		$results = $this->AcessorioTipo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('AcessorioTipo' => array(
			'id'  => 1,
			'nome'  => 'Lorem ipsum dolor sit amet',
			'imagem'  => 'Lorem ipsum dolor sit amet',
			'ativo'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>