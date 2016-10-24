<?php
namespace Resources\API\Investigators;

class AbstractInvestigator {
	public function __construct() {
		if(!isset($_COOKIE['investigators'])) {
			$this->init();
		}
	}

	private function init() {
		$data = [
			['name' => 'Justus'],
			['name' => 'Peter'],
			['name' => 'Bob']
		];

		setcookie('investigators', null, -1, '/');
		setcookie('investigators', json_encode($data));
	}

	protected function getInvestigators() {
		if(!isset($_COOKIE['investigators'])) {
			return [];
		}

		return array_values(json_decode($_COOKIE['investigators'], true));
	}

	protected function getInvestigator($name) {
		$investigators = $this->getInvestigators();
		$investigators = array_filter($investigators, function($investigator) use($name) {
			return strtolower($investigator['name']) == strtolower($name);
		});

		if(empty($investigators)) {
			return null;
		}

		return reset($investigators);
	}

	protected function addInvestigator($name) {
		$investigators = $this->getInvestigators();
		$investigators[] = ['name' => $name];

		return setcookie('investigators', json_encode($investigators));
	}

	protected function deleteInvestigator($name) {
		$investigators = $this->getInvestigators();
		$investigators = array_filter($investigators, function($investigator) use($name) {
			return strtolower($investigator['name']) != strtolower($name);
		});

		setcookie('investigators', null, -1, '/');
		return setcookie('investigators', json_encode($investigators));
	}
}
