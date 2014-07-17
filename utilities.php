<?php

// There is no reason for files to be requested unless through index.php
if(!defined("wbr")) {
	
	die("Exploitation attempt.");
	
}

function Util_SSLOn()
{
	
	return (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on");
	
}

?>