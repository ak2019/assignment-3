<?php
	require_once('TwitterAPIExchange.php');
	// Set access tokens: https://dev.twitter.com/apps/
	$settings = array(
	    'oauth_access_token' 		=> "1110227126119071744-HXhGSoG8Vmwf3ECIA4jgAQh2E7tRRG",
	    'oauth_access_token_secret' => "ufzIFs05DWBAzYblW8I0y2S99rjwY2Odim1MA4d00xAsf",
	    'consumer_key' 				=> "vkM782XB76FwRHQcoNLpJAeI2",
	    'consumer_secret' 			=> "ZXGjEmbmYjKNE4YJbBTECc3op8Dlg7Xqrw0oKFUuqv11WHS1DO"
	);
	$hashtag =  $_GET['hashtag'];
	$getfield = '?q=#'.$hashtag.'&result_type=recent&count=15';

	$requestMethod = 'GET';

	$twitter = new TwitterAPIExchange($settings);
	$url = 'https://api.twitter.com/1.1/search/tweets.json';
	
	//print_r($twitter);
	$twitter = new TwitterAPIExchange($settings);
	$json =
	$twitter
		->setGetfield($getfield)
    	->buildOauth($url, $requestMethod)
    	->performRequest();

	/** @var array $result */
	$result = json_decode($json, true);
	$view = '
	<table border="1"><tr>
	<th>created_at</th>
	<th>tweet</th>
	<th>Name</th>
	<th>Profile Image</th>
	</tr>';
	foreach ($result['statuses'] as $record) {
			$view.='<tr>
        <td>'.$record['created_at'].'</td>
        <td>'.$record['text'].'</td>
        <td>'.$record['user']['name'].'</td>
        <td><img src="'.$record['user']['profile_image_url'].'" </td></tr>';
	}
	$view.= '</table>';
	echo $view;



