<?php

namespace Legolabs\OpenVidu\Requests;

require_once("aRequest.php");

abstract class aDeleteRequest extends aRequest
{
	public function init()
	{
		$this->api_method = 'DELETE';
		$this->http_headers[] = "Content-Type: application/x-www-form-urlencoded";
	}


	public function set_parameter(string $type, string $value) : void
	{
		throw new \Exception("This type of request does not allow parameters!");
	}

}