<?php 
/* SVN FILE: $Id$ */
/* EquipamentoTipo Test cases generated on: 2009-05-29 13:05:35 : 1243616375*/
App::import('Model', 'EquipamentoTipo');

class EquipamentoTipoTestCase extends CakeTestCase {
	var $EquipamentoTipo = null;
	var $fixtures = array('app.equipamento_tipo');

	function startTest() {
		$this->EquipamentoTipo =& ClassRegistry::init('EquipamentoTipo');
	}

	function testEquipamentoTipoInstance() {
		$this->assertTrue(is_a($this->EquipamentoTipo, 'EquipamentoTipo'));
	}

	function testEquipamentoTipoFind() {
		$this->EquipamentoTipo->recursive = -1;
		$results = $this->EquipamentoTipo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('EquipamentoTipo' => array(
			'id'  => 1,
			'nome'  => 'Lorem ipsum dolor sit amet',
			'descricao'  => 'Lorem ipsum dolor sit amet',
			'tipo'  => 1,
			'ativo'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>