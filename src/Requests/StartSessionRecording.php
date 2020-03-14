<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aPostRequest.php');

/** Start Session Recoesing Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class StartSessionRecording extends aPostRequest
{

	/** Constructor
	 *
	 * @param string $session_id
	 *        	Session ID */
	function __construct(string $session_id)
	{
		$this->api_url = "/api/recordings/start";
		$this->parameters['session'] = $session_id;
	}
}