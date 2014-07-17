<?php

define("wbr", "1");

$WBRCFG = array();
require("config.php");

// At least give a nice error message to the user.
require("niceerror.php");

// Handler for cURL.
$curlh = curl_init();

// Silence errors.
@curl_setopt($curlh, CURLOPT_FOLLOWLOCATION, true);

curl_setopt($curlh, CURLOPT_USERAGENT, $WBRCFG["http_useragent"]); 
curl_setopt($curlh, CURLOPT_HEADER, true);
curl_setopt($curlh, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlh, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curlh, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curlh, CURLOPT_TIMEOUT, $WBRCFG["timeout"]);
curl_setopt($curlh, CURLOPT_MAXREDIRS, 10);

// Ok so at the moment all this supports is relaying.
function WBR_SendRequest($url)
{
	
	// Unfortunately alot of the internet still uses unencrypted connections.
	$proto = "http://";
	
	if (Util_SSLOn()) {
		
		$proto = "https://";
		
	}
	
	if ($WBRCFG["forwarding_relay"]) {
		
		$url = $proto . $WBRCFG["forwarding_site"] . "/" . ltrim($url, "/");
		
	} else {
		
		// access any site by url.
		
	}
	
	// Set the URL in the cURL request.
	curl_setopt($curlh, CURLOPT_URL, $url);
	
	/// Forward headers to the server.
	// Get the headers.
	$headers = getallheaders();
	
	// Strip away certain headers.
	$hedset = array();
	foreach ($request as $key => $value)
	{
		
		if (!in_array($key, $strip)) {
			
			$headers[] = $key . ": " . $value;
			
		}
		
	}
	
	curl_setopt($curlh, CURLOPT_HTTPHEADER, $hedset);
	
	// TODO: forward post details, execute curl and return the response to the user.
	
}

?>