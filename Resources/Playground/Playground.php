<?php
namespace Resources\Playground;

/**
 * @self /playground
 */
class Playground extends \Resources\Template {
	/**
	 * @method get
	 * @provides *\/*
	 */
	public function get() {
		$this->addScript('//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js');
		$this->addScript('/assets/js/playground.js');

		return $this->wrap($this->partial('playground/playground'));
	}
}
