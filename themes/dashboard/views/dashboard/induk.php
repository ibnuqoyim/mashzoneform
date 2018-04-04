<?php
require_once __DIR__ . '/vendor/autoload.php';



// This Sheet MUST BE shared with service account email
define('SHEET_ID', '1Twx_UO9cI8hthsqA92fLTDFP1D29_SgKIFlXKIfvErw');
define('APPLICATION_NAME', 'Manipulating Google Sheets from PHP');

define('CLIENT_SECRET_PATH', __DIR__ . '/sheets_api_secret.json');
define('ACCESS_TOKEN', 'c6335d68871e9437d109410e8a97ef260a8f6a85');
define('SCOPES', implode(' ', [Google_Service_Sheets::SPREADSHEETS]));

// Create Google API Client
$client = new Google_Client();
$client->setApplicationName(APPLICATION_NAME);
$client->setScopes(SCOPES);
$client->setAuthConfig(CLIENT_SECRET_PATH);
$client->setAccessToken(ACCESS_TOKEN);

$service = new Google_Service_Sheets($client);

$sheetInfo = $service->spreadsheets->get(SHEET_ID)->getProperties();

echo $sheetInfo['title'];


?>
