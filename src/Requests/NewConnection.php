<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aPostRequest.php');

/** New Connection Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author shin3tky */
class NewConnection extends aPostRequest
{

	/** Constructor */
	function __construct(string $session_id)
	{
		$this->api_url = "/api/sessions/{$session_id}/connection";
	}
}
