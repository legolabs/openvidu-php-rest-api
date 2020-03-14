<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aDeleteRequest.php');

/** Force Disconnection Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class ForceDisconnection extends aDeleteRequest
{

	/** Constructor
	 *
	 * @param string $session_id
	 *        	Session ID
	 * @param string $connection_id
	 *        	Connection ID */
	function __construct(string $session_id, string $connection_id)
	{
		$this->api_url = "/api/sessions/{$session_id}/connection/{$connection_id}";
	}
}