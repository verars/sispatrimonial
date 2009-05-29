<?php 
/* SVN FILE: $Id$ */
/* Acessorio Fixture generated on: 2009-05-29 13:05:31 : 1243616371*/

class AcessorioFixture extends CakeTestFixture {
	var $name = 'Acessorio';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'situacao_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'acessorio_tipo_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'equipamento_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'ativo' => array('type'=>'integer', 'null' => false, 'default' => '1', 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'acessorios_FKIndex1' => array('column' => 'equipamento_id', 'unique' => 0), 'acessorios_FKIndex2' => array('column' => 'acessorio_tipo_id', 'unique' => 0), 'acessorios_FKIndex3' => array('column' => 'situacao_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'situacao_id'  => 1,
		'acessorio_tipo_id'  => 1,
		'equipamento_id'  => 1,
		'ativo'  => 1
	));
}
?>