<?php
namespace Resources\API\Investigators;

/**
 * @self /api/investigators
 * @resource \\Resources\\API\\Investigators\\Investigator
 */
class Investigators extends AbstractInvestigator {
	/**
	 * @method get
	 */
	public function get() {
		$investigators = $this->getInvestigators();
		$investigators = array_map(function($investigator) {
			return [
				'_links' => [
					'self' => [
						'name' => strtolower($investigator['name'])
					]
				],
				'name' => $investigator['name']
			];
		}, $investigators);

		return $investigators;
	}

	/**
	* @method post
	* @accept application/json
	*/
	public function add() {
		if(!($user = file_get_contents('php://input'))) {
			throw new \Exception('could not read input', 400);
		}

		if(!($user = json_decode($user))) {
			throw new \Exception('not valid json', 400);
		}

		if(!isset($user->name) or empty($user->name)) {
			throw new \Exception('name cannot be empty', 400);
		}

		if(!$this->addInvestigator($user->name)) {
			throw new \Exception('could not save', 500);
		}

		http_response_code(201);

		return [
			'name' => $user->name,
			'_links' => [
				'self' => ['name' => strtolower($user->name)]
			]
		];
	}
}
