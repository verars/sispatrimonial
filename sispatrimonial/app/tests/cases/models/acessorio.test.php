<?php 
/* SVN FILE: $Id$ */
/* Acessorio Test cases generated on: 2009-05-02 20:05:14 : 1241308274*/
App::import('Model', 'Acessorio');

class AcessorioTestCase extends CakeTestCase {
	var $Acessorio = null;
	var $fixtures = array('app.acessorio', 'app.equipamentos');

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
			'name'  => 'Lorem ipsum dolor sit amet',
			'equipamentos_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>