<?php
namespace Resources\API\Investigators;

/**
 * @self /api/investigators/{name}
 */
class Investigator extends AbstractInvestigator {
	/**
	 * @method get
	 */
	public function get($name) {
		$investigator = $this->getInvestigator($name);

		if($investigator == null) {
			throw new \Exception('not found', 404);
		}

		return $investigator;
	}

	/**
	 * @method delete
	 */
	public function delete($name) {
		return ['deletion' => $this->deleteInvestigator($name)];
	}
}
