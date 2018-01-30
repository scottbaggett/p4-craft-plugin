<?php

namespace part4\part4craft;

use craft\base\Plugin;


// https://graph.facebook.com/247933685372905/?fields=posts{created_time,attachments,message}&access_token=374743726270540|3b82b162d9bb5d32fb5e95c469a53524

// $appID = '374743726270540';
// $appSecret = '3b82b162d9bb5d32fb5e95c469a53524';

// //Create an access token using the APP ID and APP Secret.
// $accessToken = $appID . '|' . $appSecret; //'4332fe7430abe43ff442e797c837e16b';

// //The ID of the Facebook page in question.
// $id = '247933685372905';

// //Tie it all together to construct the URL
// $url = "https://graph.facebook.com/$id/posts?fields=feed{created_time,attachments,message}&access_token=$accessToken";

// error_log($url);

// //Make the API call
// $result = file_get_contents($url);

// //Decode the JSON result.
// $decoded = json_decode($result, true);

// //Dump it out onto the page so that we can take a look at the structure of the data.
// // var_dump($url);


class Part4 extends Plugin
{
    public static $plugin;

    public static $fbID = '374743726270540';

    public function init()
    {
        parent::init();
        self::$plugin = $this;

    }
}