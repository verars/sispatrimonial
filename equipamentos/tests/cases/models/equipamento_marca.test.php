<?php 
/* SVN FILE: $Id$ */
/* EquipamentoMarca Test cases generated on: 2009-05-29 13:05:33 : 1243616373*/
App::import('Model', 'EquipamentoMarca');

class EquipamentoMarcaTestCase extends CakeTestCase {
	var $EquipamentoMarca = null;
	var $fixtures = array('app.equipamento_marca');

	function startTest() {
		$this->EquipamentoMarca =& ClassRegistry::init('EquipamentoMarca');
	}

	function testEquipamentoMarcaInstance() {
		$this->assertTrue(is_a($this->EquipamentoMarca, 'EquipamentoMarca'));
	}

	function testEquipamentoMarcaFind() {
		$this->EquipamentoMarca->recursive = -1;
		$results = $this->EquipamentoMarca->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('EquipamentoMarca' => array(
			'id'  => 1,
			'nome'  => 'Lorem ipsum d',
			'ativo'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>