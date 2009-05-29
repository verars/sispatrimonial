<?php
class Situacao extends AppModel {

	var $name = 'Situacao';
	var $validate = array(
		'descricao' => array('notempty'),
		'ativo' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Acessorio' => array(
			'className' => 'Acessorio',
			'foreignKey' => 'situacao_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Equipamento' => array(
			'className' => 'Equipamento',
			'foreignKey' => 'situacao_id',
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