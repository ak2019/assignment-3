


<?php

// Include twitteroauth
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// Set keys
$consumerKey = 'PeQvzs4L2fQBL2TKmjcyimEXI';
$consumerSecret = 'HCHKN9KEzZQY9wLxMUQW2D3BG5p5gAHjuBgo58bsfHxX2mBRqG';
$accessToken = '1110227126119071744-wCeKgmtv7CQYeSFMlFKaiuPWbxLDN4';
$accessTokenSecret = 'FlYLXQfdnnSZ2wt2MXfLxGC0uoUnxtKf60gi3Z9WcVtij';

// Create object
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

// Set status message
$tweetMessage = 'This is a tweet to my Twitter account via PHP.';

// Check for 140 characters
if(strlen($tweetMessage) <= 140)
{
    // Post the status message
    $tweet->post('statuses/update', array('status' => $tweetMessage));
}

?>