<?php
class Equipamento extends AppModel {

	var $name = 'Equipamento';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Marca' => array(
			'className' => 'Marca',
			'foreignKey' => 'marca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CatEquipamento' => array(
			'className' => 'CatEquipamento',
			'foreignKey' => 'cat_equipamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Acessorio' => array(
			'className' => 'Acessorio',
			'foreignKey' => 'equipamentos_id',
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