<?php 
/* SVN FILE: $Id$ */
/* EquipamentoTipo Fixture generated on: 2009-05-29 13:05:35 : 1243616375*/

class EquipamentoTipoFixture extends CakeTestFixture {
	var $name = 'EquipamentoTipo';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'nome' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'descricao' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'tipo' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'ativo' => array('type'=>'boolean', 'null' => false, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nome'  => 'Lorem ipsum dolor sit amet',
		'descricao'  => 'Lorem ipsum dolor sit amet',
		'tipo'  => 1,
		'ativo'  => 1
	));
}
?>