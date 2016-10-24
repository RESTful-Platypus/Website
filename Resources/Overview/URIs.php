<?php
namespace Resources\Overview;

/**
 * @self /overview/uris
 */
class URIs extends \Resources\Template {
	/**
	 * @method get
	 * @provides *\/*
	 */
	public function get() {
		return $this->wrap($this->partial('overview/uris'));
	}
}
