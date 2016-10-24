<?php
namespace Resources\Annotations;

/**
 * @self /annotations/resources
 */
class Resources extends \Resources\Template {
	/**
	 * @method get
	 * @provides *\/*
	 */
	public function get() {
		return $this->wrap($this->partial('annotations/resources'));
	}
}
