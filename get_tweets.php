<?php
	require_once('TwitterAPIExchange.php');
	// Set access tokens: https://dev.twitter.com/apps/
	$settings = array(
	    'oauth_access_token' 		=> "-",
	    'oauth_access_token_secret' => "",
	    'consumer_key' 				=> "",
	    'consumer_secret' 			=> ""
	);
	$hashtag =  $_GET['q'];
	$getfield = '?q=#'.$hashtag.'&result_type=recent&count=20';

	$requestMethod = 'GET';

	$twitter = new TwitterAPIExchange($settings);
	$url = 'https://api.twitter.com/1.1/search/tweets.json';

	$twitter = new TwitterAPIExchange($settings);
	echo $twitter
		->setGetfield($getfield)
    	->buildOauth($url, $requestMethod)
    	->performRequest();

