<?php 
/* SVN FILE: $Id$ */
/* CatEquipamento Fixture generated on: 2009-05-02 20:05:48 : 1241308428*/

class CatEquipamentoFixture extends CakeTestFixture {
	var $name = 'CatEquipamento';
	var $table = 'cat_equipamentos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'descricao' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'de_sala' => array('type'=>'boolean', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'name'  => 'Lorem ipsum dolor ',
		'descricao'  => 'Lorem ipsum dolor sit amet',
		'de_sala'  => 1
	));
}
?>