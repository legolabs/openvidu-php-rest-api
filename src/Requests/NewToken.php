<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aRequest.php');

/** New Token Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class NewToken extends aPostRequest
{

	/** Constructor
	 *
	 * @param string $session_id
	 *        	Session ID */
	function __construct(string $session_id)
	{
		$this->api_url = "/api/tokens";
		$this->parameters['session'] = $session_id;
	}
}