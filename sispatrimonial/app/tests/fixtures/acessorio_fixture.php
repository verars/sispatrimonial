<?php 
/* SVN FILE: $Id$ */
/* Acessorio Fixture generated on: 2009-05-02 20:05:14 : 1241308274*/

class AcessorioFixture extends CakeTestFixture {
	var $name = 'Acessorio';
	var $table = 'acessorios';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'equipamentos_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'equipamentos_id'), 'unique' => 1), 'fk_acessorios_equipamentos' => array('column' => 'equipamentos_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'name'  => 'Lorem ipsum dolor sit amet',
		'equipamentos_id'  => 1
	));
}
?>