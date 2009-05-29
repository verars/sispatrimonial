<?php
class Acessorio extends AppModel {

	var $name = 'Acessorio';
	var $validate = array(
		'situacao_id' => array('numeric'),
		'acessorio_tipo_id' => array('numeric'),
		'equipamento_id' => array('numeric'),
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
		'AcessorioTipo' => array(
			'className' => 'AcessorioTipo',
			'foreignKey' => 'acessorio_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Equipamento' => array(
			'className' => 'Equipamento',
			'foreignKey' => 'equipamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>