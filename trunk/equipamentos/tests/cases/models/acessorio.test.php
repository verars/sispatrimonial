<?php 
/* SVN FILE: $Id$ */
/* Acessorio Test cases generated on: 2009-05-29 13:05:31 : 1243616371*/
App::import('Model', 'Acessorio');

class AcessorioTestCase extends CakeTestCase {
	var $Acessorio = null;
	var $fixtures = array('app.acessorio');

	function startTest() {
		$this->Acessorio =& ClassRegistry::init('Acessorio');
	}

	function testAcessorioInstance() {
		$this->assertTrue(is_a($this->Acessorio, 'Acessorio'));
	}

	function testAcessorioFind() {
		$this->Acessorio->recursive = -1;
		$results = $this->Acessorio->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Acessorio' => array(
			'id'  => 1,
			'situacao_id'  => 1,
			'acessorio_tipo_id'  => 1,
			'equipamento_id'  => 1,
			'ativo'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>