<?php

// There is no reason for files to be requested unless through index.php
if(!defined("wbr")) {
	
	die("Exploitation attempt.");
	
}

// Horribly written function to display a nice error message to users.
// TODO: Replace this with a much better written function.
function NiceError_Display($title, $body) {
	
	?>
	
	<!-- Open Sans font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	
	<style>
		
		body
		{
			
			background-color: #666666;
			
		}
		
		.errorNice
		{
			
			width: 300px;
			min-height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin:-100px 0 0 -150px;
			
			font-family: 'Open Sans', sans-serif;
			
			background-color: #888888;
			border-style: solid;
			border-width: 2px;
			border-color: #999999;
			
			padding: 5px;
			
		}
		
	</style>
	
	<div class="errorNice">
		
		<h3 style="text-align: center;"><? echo $title; ?></h3>
		<p><? echo $body; ?></p>
		<br />
		<p>Powered by <a href="https://github.com/jbuk99/webroxy">Webroxy</a></p>
		
	</div>
	
	<?
	
}

?>