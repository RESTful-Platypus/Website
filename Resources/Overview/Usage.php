<?php
namespace Resources\Overview;

/**
 * @self /overview/usage
 */
class Usage extends \Resources\Template {
	/**
	 * @method get
	 * @provides *\/*
	 */
	public function get() {
		return $this->wrap($this->partial('overview/usage'));
	}
}
