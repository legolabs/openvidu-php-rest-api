<?php

namespace Legolabs\OpenVidu\Requests;

/** Interface for OpenVidu REST API Requests
 *
 * @author agardoni */
interface iRequest
{

	/** Method to set request parameters
	 *
	 * @param string $type
	 *        	parameter name
	 * @param string $value
	 *        	parameter value */
	public function set_parameter(string $type, string $value): void;
}