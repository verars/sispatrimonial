<?php 
/* SVN FILE: $Id$ */
/* Equipamento Fixture generated on: 2009-05-29 13:05:37 : 1243616377*/

class EquipamentoFixture extends CakeTestFixture {
	var $name = 'Equipamento';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'situacao_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'equipamento_tipo_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'equipamento_marca_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'modelo' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'nro_bem' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'observacoes' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'imagem' => array('type'=>'binary', 'null' => true, 'default' => NULL),
		'data_cadastro' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'ativo' => array('type'=>'boolean', 'null' => false, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'equipamentos_FKIndex1' => array('column' => 'equipamento_marca_id', 'unique' => 0), 'equipamentos_FKIndex2' => array('column' => 'equipamento_tipo_id', 'unique' => 0), 'equipamentos_FKIndex3' => array('column' => 'situacao_id', 'unique' => 0))
	);
	var $records = array(array(
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
}
?>