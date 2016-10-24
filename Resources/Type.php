<?php
namespace Resources;

/**
 * @self /type
 */
class Type {
	/**
	* @method get
	* @provides application/json
	*/
	public function getJson() {
		return ['type' => 'json'];
	}

	/**
	* Why would anyone prefer XML?
	*
	* @method get
	* @provides text/xml
	* @provides application/xml
	*/
	public function getXml() {
		return ['type' => 'xml'];
	}
}
