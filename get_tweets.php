<?php
	require_once('TwitterAPIExchange.php');
	// Set access tokens: https://dev.twitter.com/apps/
	$settings = array(
	    'oauth_access_token' 		=> "1110227126119071744-HXhGSoG8Vmwf3ECIA4jgAQh2E7tRRG",
	    'oauth_access_token_secret' => "ufzIFs05DWBAzYblW8I0y2S99rjwY2Odim1MA4d00xAsf",
	    'consumer_key' 				=> "vkM782XB76FwRHQcoNLpJAeI2",
	    'consumer_secret' 			=> "ZXGjEmbmYjKNE4YJbBTECc3op8Dlg7Xqrw0oKFUuqv11WHS1DO"
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

