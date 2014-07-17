<?php

// There is no reason for files to be requested unless through index.php
if(!defined("wbr")) {
	
	die("Exploitation attempt.");
	
}

/// Forwarding Settings
// Allow the user to access any site if this is set to false.
$WBRCFG["forwarding_relay"] = false;

// If above option is true, which site should be proxied. (do not add any protocols/etc)
$WBRCFG["forwarding_site"] = "www.google.com";

/// Security
// Force SSL connections from user to your proxy.
$WBRCFG["security_forcessl_user"] = false;

// Force SSL connections from your proxy to the site, regardless of the users decision.
$WBRCFG["security_forcessl_site"] = false;

/// Miscellaneous
// Timeout (seconds)
$WBRCFG["timeout"] = 5;
// Useragent to show to the server.
$WBRCFG["http_useragent"] = "Webroxy";
// Headers to exclude from sending back to the user.
$WBRCFG["http_header_strip"] = array("Content-Length", "Host");


?>