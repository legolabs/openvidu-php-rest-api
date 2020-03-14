<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aDeleteRequest.php');

/** Force Unpublish Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class ForceUnpublishing extends aDeleteRequest
{

	/** Constructor
	 *
	 * @param string $session_id
	 *        	Session ID
	 * @param string $stream_id
	 *        	Stream ID */
	function __construct(string $session_id, string $stream_id)
	{
		$this->api_url = "/api/sessions/{$session_id}/stream/{$stream_id}";
	}
}