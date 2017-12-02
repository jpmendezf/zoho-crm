<?php
namespace Dfe\ZohoCRM;
// 2017-07-05
/** @method static Settings s() */
final class Settings extends \Df\Zoho\Settings {
	/**
	 * 2017-07-08
	 * @used-by \Dfe\ZohoCRM\API\Client::urlBase()
	 * @return string
	 */
	function domain() {return $this->v(null, null, $this->v('domain_custom'));}
}