<?php
namespace Resources\Overview;

/**
 * @self /overview/encoding
 */
class Encoding extends \Resources\Template {
	/**
	 * @method get
	 * @provides *\/*
	 */
	public function get() {
		return $this->wrap($this->partial('overview/encoding'));
	}
}
