<?php
/**
 * PostsTagFixture
 *
 */
class PostsTagFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'post_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'tag_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'private' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'post_id' => '',
			'tag_id' => '',
			'user_id' => '',
			'private' => 1,
			'created' => '2014-09-16 21:02:39',
			'modified' => '2014-09-16 21:02:39',
			'active' => 1
		),
	);

}
