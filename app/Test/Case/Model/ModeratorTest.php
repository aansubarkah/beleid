<?php
App::uses('Moderator', 'Model');

/**
 * Moderator Test Case
 *
 */
class ModeratorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.moderator',
		'app.user',
		'app.category',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Moderator = ClassRegistry::init('Moderator');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Moderator);

		parent::tearDown();
	}

}
