<?php
class Equipamento extends AppModel {

	var $name = 'Equipamento';
	var $validate = array(
		'situacao_id' => array('numeric'),
		'equipamento_tipo_id' => array('numeric'),
		'equipamento_marca_id' => array('numeric'),
		'modelo' => array('notempty'),
		'nro_bem' => array('notempty'),
		'data_cadastro' => array('date'),
		'ativo' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Situacao' => array(
			'className' => 'Situacao',
			'foreignKey' => 'situacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EquipamentoTipo' => array(
			'className' => 'EquipamentoTipo',
			'foreignKey' => 'equipamento_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EquipamentoMarca' => array(
			'className' => 'EquipamentoMarca',
			'foreignKey' => 'equipamento_marca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Acessorio' => array(
			'className' => 'Acessorio',
			'foreignKey' => 'equipamento_id',
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