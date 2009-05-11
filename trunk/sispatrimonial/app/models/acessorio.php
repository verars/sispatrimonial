<?php
class Acessorio extends AppModel {

	var $name = 'Acessorio';
	var $validate = array(
		'name' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Equipamentos' => array(
			'className' => 'Equipamentos',
			'foreignKey' => 'equipamentos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>