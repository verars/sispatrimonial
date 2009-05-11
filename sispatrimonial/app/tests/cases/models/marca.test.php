<?php 
/* SVN FILE: $Id$ */
/* Marca Test cases generated on: 2009-05-02 20:05:42 : 1241308062*/
App::import('Model', 'Marca');

class MarcaTestCase extends CakeTestCase {
	var $Marca = null;
	var $fixtures = array('app.marca', 'app.equipamento');

	function startTest() {
		$this->Marca =& ClassRegistry::init('Marca');
	}

	function testMarcaInstance() {
		$this->assertTrue(is_a($this->Marca, 'Marca'));
	}

	function testMarcaFind() {
		$this->Marca->recursive = -1;
		$results = $this->Marca->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Marca' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum d'
		));
		$this->assertEqual($results, $expected);
	}
}
?>