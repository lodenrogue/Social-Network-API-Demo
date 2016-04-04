<?php

	$host = "localhost";
	$port = 8080;
	$version = "v1";
	$baseUrl = "http://{$host}:{$port}/socialnetwork/api/{$version}";

	return array(
	    "baseUrl" => $baseUrl,
	    "users" => "{$baseUrl}/users"
		);
?>