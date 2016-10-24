<?php
namespace Resources\Annotations;

/**
 * @self /annotations/lists
 */
class Lists extends \Resources\Template {
	/**
	 * @method get
	 * @provides *\/*
	 */
	public function get() {
		return $this->wrap($this->partial('annotations/lists'));
	}
}
