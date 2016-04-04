<?php
	
	$endpoints = include("endpoints.php");

	$postData = array(
	    'firstName' => $_POST['firstName'],
	    'lastName' => $_POST['lastName'],
	    'email' => $_POST['email']
	);

	$curl = curl_init();

	curl_setopt_array($curl, array(
		  CURLOPT_PORT => "8080",
		  CURLOPT_URL => $endpoints["users"],
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($postData),
		  CURLOPT_HTTPHEADER => array(
		    	"cache-control: no-cache",
		    	"content-type: application/json"
		  ),
	));

	$response = curl_exec($curl);
	$httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);

	if($httpStatus == 201){
		// redirect to profile
	}
	else {
		// There was an error
	}
?>