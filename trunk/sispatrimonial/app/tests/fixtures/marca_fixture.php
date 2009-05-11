<?php 
/* SVN FILE: $Id$ */
/* Marca Fixture generated on: 2009-05-02 20:05:42 : 1241308062*/

class MarcaFixture extends CakeTestFixture {
	var $name = 'Marca';
	var $table = 'marcas';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'name'  => 'Lorem ipsum d'
	));
}
?>