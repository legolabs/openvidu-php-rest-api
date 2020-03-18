<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aRequest.php');

/** Stop Session Recording Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class SendASignal extends aPostRequest
{

	/** Constructor
	 *
	 * @param string $session_id
	 *        	Session ID */
	function __construct(string $session_id)
	{
		$this->api_url = "/api/signal";
		$this->set_parameter('session', $session_id);
	}
}