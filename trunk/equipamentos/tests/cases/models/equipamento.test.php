<?php 
/* SVN FILE: $Id$ */
/* Equipamento Test cases generated on: 2009-05-29 13:05:37 : 1243616377*/
App::import('Model', 'Equipamento');

class EquipamentoTestCase extends CakeTestCase {
	var $Equipamento = null;
	var $fixtures = array('app.equipamento');

	function startTest() {
		$this->Equipamento =& ClassRegistry::init('Equipamento');
	}

	function testEquipamentoInstance() {
		$this->assertTrue(is_a($this->Equipamento, 'Equipamento'));
	}

	function testEquipamentoFind() {
		$this->Equipamento->recursive = -1;
		$results = $this->Equipamento->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Equipamento' => array(
			'id'  => 1,
			'situacao_id'  => 1,
			'equipamento_tipo_id'  => 1,
			'equipamento_marca_id'  => 1,
			'modelo'  => 'Lorem ipsum dolor ',
			'nro_bem'  => 'Lorem ipsum dolor ',
			'observacoes'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'imagem'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_cadastro'  => '2009-05-29 13:59:37',
			'ativo'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>