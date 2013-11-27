<?php
App::uses('AppModel', 'Model');
/**
 * Question Model
 *
 * @property Deck $Deck
 * @property Result $Result
 */
class Question extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'question_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'question_text';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Deck' => array(
			'className' => 'Deck',
			'foreignKey' => 'deck_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Result' => array(
			'className' => 'Result',
			'foreignKey' => 'question_id',
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
