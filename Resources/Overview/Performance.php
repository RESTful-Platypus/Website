<?php
namespace Resources\Overview;

/**
 * @self /overview/performance
 */
class Performance extends \Resources\Template {
	/**
	 * @method get
	 * @provides *\/*
	 */
	public function get() {
		return $this->wrap($this->partial('overview/performance'));
	}
}
