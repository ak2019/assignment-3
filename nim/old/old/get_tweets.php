<?php

	require_once('TwitterAPIExchange.php');
	 
	// Set access tokens: https://dev.twitter.com/apps/
	$settings = array(
	    'oauth_access_token' => "1110227126119071744-FSlczyJxfGQTEc370XpMtk6EF5Ue54",
	    'oauth_access_token_secret' => "3Q7ur9nN46RPydxtBghPBp4deURSefGx6BXdeQrorbvoW",
	    'consumer_key' => "2INxXk2f1S0EjBfhoV8A3c5mb",
	    'consumer_secret' => "nlKWQM8J4hvRfkGy2ixDhQ6aKN2kMX1ddUXrjiKdw29i4OcniN"
	);

	// Choose URL and Request Method
	$url = "https://api.twitter.com/1.1/search/tweets.json";
	$getfield = '?q=#irib&lang=fa'; // queries start with ? and are strung together with &
	$requestMethod = "GET";
	
	//Perform the request!
	$twitter = new TwitterAPIExchange($settings);
	echo $twitter->setGetfield($getfield)
	             ->buildOauth($url, $requestMethod)
	             ->performRequest();

?>

