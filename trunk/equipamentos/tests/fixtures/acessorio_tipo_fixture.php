<?php 
/* SVN FILE: $Id$ */
/* AcessorioTipo Fixture generated on: 2009-05-29 13:05:28 : 1243616368*/

class AcessorioTipoFixture extends CakeTestFixture {
	var $name = 'AcessorioTipo';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'nome' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'imagem' => array('type'=>'binary', 'null' => true, 'default' => NULL),
		'ativo' => array('type'=>'boolean', 'null' => false, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nome'  => 'Lorem ipsum dolor sit amet',
		'imagem'  => 'Lorem ipsum dolor sit amet',
		'ativo'  => 1
	));
}
?>