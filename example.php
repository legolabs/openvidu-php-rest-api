<?php
require_once ('src/OpenViduClient.php');
require_once ('src/Requests/GetOpenviduConfiguration.php');
require_once ('src/Requests/NewSessionId.php');
require_once ('src/Requests/NewToken.php');
require_once ('src/Requests/GetSessionInfo.php');
require_once ('src/Requests/GetAllSessionInfo.php');
require_once ('src/Requests/CloseSession.php');

use Legolabs\OpenVidu\OpenViduClient;
use Legolabs\OpenVidu\Requests\GetOpenviduConfiguration;
use Legolabs\OpenVidu\Requests\NewSessionId;
use Legolabs\OpenVidu\Requests\NewToken;
use Legolabs\OpenVidu\Requests\GetSessionInfo;
use Legolabs\OpenVidu\Requests\GetAllSessionInfo;
use Legolabs\OpenVidu\Requests\CloseSession;

try
{
	// OpenVidu REST API main object istantiation
	// -------------------------------------------------------------
	$ov = new OpenViduClient("https://demos.openvidu.io", "MY_SECRET");



	// Request examples
	// -------------------------------------------------------------

	// Get OpenVidu server configuration
	$req = new GetOpenviduConfiguration();
	$resp_conf = $ov->send_request($req);

	// Get new Session ID
	$req = new NewSessionId();
	$resp_session = $ov->send_request($req);

	// Get Session Info
	$req = new GetSessionInfo($resp_session->id);
	$resp_session_info = $ov->send_request($req);

	// Get a new Token for Session
	$req = new NewToken($resp_session->id);
	$resp_token = $ov->send_request($req);

	// Get all open sessions info
	$req = new GetAllSessionInfo();
	$sessions = $ov->send_request($req);

	// Close all open sessions
	$resp_close = [];
	foreach ($sessions->content as $session)
	{
		$req = new CloseSession($session->sessionId);
		$resp_close[$session->sessionId] = $ov->send_request($req);
	}



	// Drawing output for explanation purposes
	// -------------------------------------------------------------
	draw_response('GetOpenviduConfiguration Request', $resp_conf);
	draw_response('NewSessionId Request', $resp_session);
	draw_response('GetSessionInfo Request', $resp_session_info);
	draw_response('NewToken Request', $resp_token);
	draw_response('GetAllSessionInfo Request', $sessions);
	foreach ($resp_close as $session_id => $resp)
	{
		draw_response("CloseSession Request (Session ID: {$session_id})", $resp);
	}
}
catch (\Exception $ex)
{
	echo '<b>Error:</b> ' . $ex->getMessage();
}



/** Output formatter
 *
 * @param string $title
 *        	Response title
 * @param object $response
 *        	response JSON object */
function draw_response(string $title, ?object $response): void
{
?>
<h1><?=$title?></h1>

<pre>
<?php
	print_r($response);
?>
</pre>
<?php
}