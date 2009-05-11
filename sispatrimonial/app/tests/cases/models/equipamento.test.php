<?php 
/* SVN FILE: $Id$ */
/* Equipamento Test cases generated on: 2009-05-02 20:05:57 : 1241308677*/
App::import('Model', 'Equipamento');

class EquipamentoTestCase extends CakeTestCase {
	var $Equipamento = null;
	var $fixtures = array('app.equipamento', 'app.marca', 'app.cat_equipamento', 'app.acessorio');

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
			'marca_id'  => 1,
			'modelo'  => 'Lorem ipsum dolor ',
			'nro_bem'  => 'Lorem ipsum dolor ',
			'permissao_uso'  => 1,
			'emrpestado'  => 1,
			'ativo'  => 1,
			'observacoes'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'imagem'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_cadastro'  => '2009-05-02 20:57:48',
			'defeito'  => 1,
			'cat_equipamento_id'  => 1,
			'acessorios_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>