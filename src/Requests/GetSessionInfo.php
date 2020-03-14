<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aGetRequest.php');

/** Get Session Info Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class GetSessionInfo extends aGetRequest
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