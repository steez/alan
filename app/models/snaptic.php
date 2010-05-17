<?php
class Snaptic extends AppModel {

	var $name = 'Snaptic';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'SnapticUser' => array(
			'className' => 'SnapticUser',
			'foreignKey' => 'snaptic_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasOne = array(
		'Trip' => array(
			'className' => 'Trip',
			'foreignKey' => 'snaptic_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Trip' => array(
			'className' => 'Trip',
			'foreignKey' => 'snaptic_id',
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