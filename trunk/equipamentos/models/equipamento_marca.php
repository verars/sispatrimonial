<?php
class EquipamentoMarca extends AppModel {

	var $name = 'EquipamentoMarca';
	var $validate = array(
		'nome' => array('notempty'),
		'ativo' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Equipamento' => array(
			'className' => 'Equipamento',
			'foreignKey' => 'equipamento_marca_id',
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