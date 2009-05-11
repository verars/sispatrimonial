<?php 
/* SVN FILE: $Id$ */
/* CatEquipamento Test cases generated on: 2009-05-02 20:05:48 : 1241308428*/
App::import('Model', 'CatEquipamento');

class CatEquipamentoTestCase extends CakeTestCase {
	var $CatEquipamento = null;
	var $fixtures = array('app.cat_equipamento', 'app.equipamento');

	function startTest() {
		$this->CatEquipamento =& ClassRegistry::init('CatEquipamento');
	}

	function testCatEquipamentoInstance() {
		$this->assertTrue(is_a($this->CatEquipamento, 'CatEquipamento'));
	}

	function testCatEquipamentoFind() {
		$this->CatEquipamento->recursive = -1;
		$results = $this->CatEquipamento->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('CatEquipamento' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor ',
			'descricao'  => 'Lorem ipsum dolor sit amet',
			'de_sala'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>