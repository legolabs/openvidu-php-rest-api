<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aPostRequest.php');

/** New Session ID Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class NewSessionId extends aPostRequest
{

	/** Constructor */
	function __construct()
	{
		$this->api_url = "/api/sessions";
	}
}