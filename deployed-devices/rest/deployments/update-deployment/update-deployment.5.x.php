<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library

use Twilio\Rest\Client;

// Get your Account SID and Auth Token from https://twilio.com/console
$accountSid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
$authToken = 'your_auth_token';
$client = new Client($accountSid, $authToken);

$deploymentSid = 'DLXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
$deployment = $client->preview->deployedDevices->deployments($deploymentSid)->update(
  array(
    'friendlyName' => 'My New Device Deployment'
  )
);

echo $deployment->friendlyName;
