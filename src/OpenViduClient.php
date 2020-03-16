<?php

namespace Legolabs\OpenVidu;

/** OpenVidu REST API Client main class
 *
 * @author agardoni */
class OpenViduClient
{
	private $server;
	private $port;
	private $username;
	private $secret;
	private $url;

	/** Constructor
	 *
	 * @param string $server
	 *        	URL to OpenVidu server
	 * @param string $secret
	 *        	OpenVidu secret
	 * @param int $port
	 *        	openvidu service port (default = 4443)
	 * @param string $username
	 *        	OpenVidu service username (default = OPENVIDUAPP) */
	function __construct(string $server, string $secret, int $port = 4443, string $username = 'OPENVIDUAPP')
	{
		$this->server = $server;
		$this->port = $port;
		$this->username = $username;
		$this->secret = $secret;

		$this->url = "{$this->server}:{$port}";
	}

	/** Send request to OpenVidu server
	 *
	 * @param Requests\aRequest $req
	 *        	request object
	 * @throws \Exception
	 * @return object|NULL decoded JSON request response from OpenVidu server */
	public function send_request(Requests\aRequest $req): ?object
	{
		// Request initialization (method, http headers, ...)
		$req->init();

		// Final URL compisition
		$complete_api_url = "{$this->url}{$req->api_url}";

		// cURL request composition
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		if (count($req->http_headers) > 0)
		{
			curl_setopt($curl, CURLOPT_HTTPHEADER, $req->http_headers);
		}

		switch ($req->api_method)
		{
			case 'POST':
				curl_setopt($curl, CURLOPT_POST, 1);

				if (count($req->parameters) > 0)
				{
					$str_parameters = json_encode($req->parameters);
					curl_setopt($curl, CURLOPT_POSTFIELDS, $str_parameters);
				}

				break;

			case 'DELETE':
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
				break;
		}

		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, "{$this->username}:{$this->secret}");

		curl_setopt($curl, CURLOPT_URL, $complete_api_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		// In case of request error
		if (($result = curl_exec($curl)) === false)
		{
			$error = curl_error($curl);
			curl_close($curl);
			throw new \Exception('Curl error: ' . $error);
		}

		// Request OK, return decoded JSON response
		else
		{
			curl_close($curl);
			return json_decode($result);
		}
	}
}