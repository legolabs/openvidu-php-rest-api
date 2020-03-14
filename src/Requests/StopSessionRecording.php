<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aRequest.php');

/** Stop Session Recording Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class StopSessionRecording extends aPostRequest
{

	/** Constructor
	 *
	 * @param string $recording_id
	 *        	Recordind ID */
	function __construct(string $recording_id)
	{
		$this->api_url = "/api/recordings/stop/{$recording_id}";
	}
}