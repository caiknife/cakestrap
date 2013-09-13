<?php
class M1 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'drop_table' => array(
				'posts'
			),
		),
		'down' => array(
			'create_table' => array(
				'posts' => array(
					'id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'primary'),
					'indexes' => array(
					),
					'tableParameters' => array(),
				),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
