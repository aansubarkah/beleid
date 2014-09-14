<?php
App::uses('AppModel', 'Model');
/**
 * File Model
 *
 * @property User $User
 * @property Post $Post
 * @property Filetype $Filetype
 */
class File extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Filetype' => array(
			'className' => 'Filetype',
			'foreignKey' => 'filetype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
