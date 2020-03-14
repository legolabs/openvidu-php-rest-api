<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aGetRequest.php');

/** Get All Session Info Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class GetAllSessionInfo extends aGetRequest
{

	/** Constructor */
	function __construct()
	{
		$this->api_url = "/api/sessions";
	}
}