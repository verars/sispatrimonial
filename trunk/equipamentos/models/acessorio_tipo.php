<?php
class AcessorioTipo extends AppModel {

	var $name = 'AcessorioTipo';
	var $validate = array(
		'nome' => array('notempty'),
		'ativo' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Acessorio' => array(
			'className' => 'Acessorio',
			'foreignKey' => 'acessorio_tipo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>