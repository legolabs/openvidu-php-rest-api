<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aGetRequest.php');

/** Get Recording Info Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class GetRecordingInfo extends aGetRequest
{

	/** Constructor
	 *
	 * @param string $recording_id
	 *        	Recording ID */
	function __construct(string $recording_id)
	{
		$this->api_url = "/api/recordings/{$recording_id}";
	}
}