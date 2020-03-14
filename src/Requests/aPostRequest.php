<?php

namespace Legolabs\OpenVidu\Requests;

require_once ("aRequest.php");

/** Abstract class for OpenVidu POST Requests
 *
 * @author agardoni */
abstract class aPostRequest extends aRequest
{

	/** Parameters initialization */
	public function init()
	{
		$this->api_method = 'POST';
		$this->http_headers[] = "Content-Type: application/json";
	}

	/** Add parameters to request
	 *
	 * {@inheritdoc}
	 * @see \Legolabs\OpenVidu\Requests\iRequest::set_parameter() */
	public function set_parameter(string $type, string $value): void
	{
		// Docs for parameters at: https://openvidu.io/docs/reference-docs/REST-API/
		$this->parameters[$type] = $value;
	}
}