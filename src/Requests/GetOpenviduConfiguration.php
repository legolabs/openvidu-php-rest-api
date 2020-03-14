<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aGetRequest.php');

/** Get OpenVidu Configuration Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class GetOpenviduConfiguration extends aGetRequest
{

	/** Constructor */
	function __construct()
	{
		$this->api_url = "/config";
	}
}