<?php
namespace Resources;

/**
 * @self /investigators
 */
class Investigators {
	/**
	 * @method get
	 * @provides text/csv
	 */
	public function get() {
		$users = [
			'Jupiter Jones;First Investigator',
			'Peter Crenshaw;Second Investigator',
			'Bob Andrews;Records and Research'
		];

		return implode(PHP_EOL, $users);
	}
}
