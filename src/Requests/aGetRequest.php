<?php

namespace Legolabs\OpenVidu\Requests;

require_once ("aRequest.php");

/** Abstract class for OpenVidu GET Requests
 *
 * @author agardoni */
abstract class aGetRequest extends aRequest
{

	/** Parameters initialization */
	public function init()
	{
		$this->api_method = 'GET';
	}

	/** OpenVidu GET requests doesn't need parameters */
	public function set_parameter(string $type, string $value): void
	{
		throw new \Exception("This type of request does not allow parameters!");
	}
}