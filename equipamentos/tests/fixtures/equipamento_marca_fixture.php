<?php 
/* SVN FILE: $Id$ */
/* EquipamentoMarca Fixture generated on: 2009-05-29 13:05:33 : 1243616373*/

class EquipamentoMarcaFixture extends CakeTestFixture {
	var $name = 'EquipamentoMarca';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'nome' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'ativo' => array('type'=>'boolean', 'null' => false, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nome'  => 'Lorem ipsum d',
		'ativo'  => 1
	));
}
?>