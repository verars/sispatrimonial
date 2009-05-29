<?php 
/* SVN FILE: $Id$ */
/* Situacao Fixture generated on: 2009-05-29 13:05:39 : 1243616379*/

class SituacaoFixture extends CakeTestFixture {
	var $name = 'Situacao';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'descricao' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'ativo' => array('type'=>'boolean', 'null' => false, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'descricao'  => 'Lorem ipsum dolor sit amet',
		'ativo'  => 1
	));
}
?>