<?php
namespace Resources;

class Template {
	private $scripts = [];

	protected function wrap($html) {
		return implode('', [$this->partial('head'), $html, $this->partial('foot')]);
	}

	protected function partial($name) {
		ob_start();
		include('Template/'.$name.'.php');
		return ob_get_clean();
	}

	protected function addScript($src) {
		$this->scripts[] = $src;
	}

	protected function getScripts() {
		return $this->scripts;
	}
}
