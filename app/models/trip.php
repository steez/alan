<?php
class Trip extends AppModel {

	var $name = 'Trip';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Snaptic' => array(
			'className' => 'Snaptic',
			'foreignKey' => 'snaptic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasOne = array(
		'TripCheckIn' => array(
			'className' => 'TripCheckIn',
			'foreignKey' => 'trip_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'TripCheckIn' => array(
			'className' => 'TripCheckIn',
			'foreignKey' => 'trip_id',
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