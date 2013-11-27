<?php
App::uses('AppModel', 'Model');
/**
 * Deck Model
 *
 * @property Question $Question
 */
class Deck extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'deck_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'deck_title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'deck_id',
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
