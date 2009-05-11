<?php 
/* SVN FILE: $Id$ */
/* Equipamento Fixture generated on: 2009-05-02 20:05:48 : 1241308668*/

class EquipamentoFixture extends CakeTestFixture {
	var $name = 'Equipamento';
	var $table = 'equipamentos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'marca_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'modelo' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'nro_bem' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'permissao_uso' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'emrpestado' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
		'ativo' => array('type'=>'boolean', 'null' => true, 'default' => NULL),
		'observacoes' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'imagem' => array('type'=>'binary', 'null' => true, 'default' => NULL),
		'data_cadastro' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'defeito' => array('type'=>'boolean', 'null' => true, 'default' => '0'),
		'cat_equipamento_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'acessorios_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'marca_id', 'acessorios_id'), 'unique' => 1), 'equipamentos_FKIndex2' => array('column' => 'marca_id', 'unique' => 0), 'fk_equipamentos_cat_equipamentos' => array('column' => 'cat_equipamento_id', 'unique' => 0), 'fk_equipamentos_acessorios' => array('column' => 'acessorios_id', 'unique' => 0))
	);
	var $records = array(array(
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
}
?>