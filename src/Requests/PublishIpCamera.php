<?php

namespace Legolabs\OpenVidu\Requests;

require_once ('aRequest.php');

/** Stop Session Recording Request (OpenVidu REST operations description: https://openvidu.io/docs/reference-docs/REST-API/)
 *
 * @author agardoni */
class PublishIpCamera extends aPostRequest
{

	/** Constructor
	 *
	 * @param string $rtspUri
	 *        	IP camera RTSP URI */
	function __construct(string $session_id, string $rtspUri)
	{
		$this->api_url = "/api/sessions/{$session_id}/connection";
		$this->set_parameter('rtspUri', $rtspUri);
	}
}