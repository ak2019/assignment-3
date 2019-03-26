<?php

	require_once('TwitterAPIExchange.php');
	 
	// Set access tokens: https://dev.twitter.com/apps/
	$settings = array(
	    'oauth_access_token' => "1110227126119071744-p31ZQEciRUiPZa5EBaFJivSc3LRXNM",
	    'oauth_access_token_secret' => "LIC01aFn6evBGMy72x43ao9NzeT62d0uklarBvJyPzKVK",
	    'consumer_key' => "vRMYQ1D85ps5n4Cm0SwDsjMxM",
	    'consumer_secret' => "QEMrN8uzr2kKUUUk9sg0ldVBlLeVsIvZHsLUcwuJANQqAJDL3M"
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

