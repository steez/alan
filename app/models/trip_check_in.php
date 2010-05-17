<?php
class TripCheckIn extends AppModel {

	var $name = 'TripCheckIn';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Trip' => array(
			'className' => 'Trip',
			'foreignKey' => 'trip_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>