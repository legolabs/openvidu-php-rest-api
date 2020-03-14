<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aDeleteRequest.php');

/** Close Session Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class CloseSession extends aDeleteRequest
{

	/** Constructor
	 *
	 * @param string $session_id
	 *        	Session ID */
	function __construct(string $session_id)
	{
		$this->api_url = "/api/sessions/{$session_id}";
	}
}