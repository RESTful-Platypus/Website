<?php
namespace Resources\Overview;

/**
 * Two URIs? D:
 *
 * @self /
 * @self /overview/home
 */
class Home extends \Resources\Template {
	/**
	 * @method get
	 * @provides *\/*
	 */
	public function get() {
		return $this->wrap($this->partial('overview/home'));
	}
}
