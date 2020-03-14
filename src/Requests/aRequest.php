<?php

namespace Legolabs\OpenVidu\Requests;

require_once ("iRequest.php");

/** Abstract class for generic Request
 *
 * @author agardoni */
abstract class aRequest implements iRequest
{
	public $parameters = [];
	public $http_headers = [];
	public $api_url;
	public $api_method;
}