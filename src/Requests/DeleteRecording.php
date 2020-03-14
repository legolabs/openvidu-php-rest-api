<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aDeleteRequest.php');

/** Delete Recording Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class DeleteRecording extends aDeleteRequest
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