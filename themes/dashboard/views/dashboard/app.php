<?php
require_once __DIR__ . '/vendor/autoload.php';
 

 
// This Sheet MUST BE shared with service account email
define('SHEET_ID', '1IfpJdNxhPDs3MAMRfXWZ8ClM67h47yIJEmJb038ewG8');
define('APPLICATION_NAME', 'Manipulating Google Sheets from PHP');
 
define('CLIENT_SECRET_PATH', __DIR__ . '/test.json');
define('ACCESS_TOKEN', '4f06fd32e6bbc0d3f226b3a331a0a01d2f6770ed');
define('SCOPES', implode(' ', [Google_Service_Sheets::SPREADSHEETS]));
 
// Create Google API Client
$client = new Google_Client();
$client->setApplicationName(APPLICATION_NAME);
$client->setScopes(SCOPES);
$client->setAuthConfig(CLIENT_SECRET_PATH);
$client->setAccessToken(ACCESS_TOKEN);
 
$sheets = new Google_Service_Sheets($client);
 
//$options = array('valueInputOption' => 'RAW');
//$values = [["Anis", "001", "+88017300112233"]];
//$body   = new Google_Service_Sheets_ValueRange(['values' => $values]);
//$result = $service->spreadsheets_values->append(SHEET_ID, 'A1:C1', $body, $options);

$data = [];

$currentRow = 2;

// The range of A2:H will get columns A through H and all rows starting from row 2
//$spreadsheetId = getenv(SHEET_ID);
$range = 'A2:E5';
$rows = $sheets->spreadsheets_values->get(SHEET_ID, $range, ['majorDimension' => 'ROWS']);
if (isset($rows['values'])) {
    foreach ($rows['values'] as $row) {
        /*
         * If first column is empty, consider it an empty row and skip (this is just for example)
         */
        if (empty($row[0])) {
            break;
        }

        $data[] = [
            'ID' => $row[0],
            'ITEM' => $row[1],
            'Dur' => $row[2],
            'BS' => $row[3],
            'BF' => $row[4],
            
        ];

        /*
         * Now for each row we've seen, lets update the I column with the current date
         */
        $updateRange = 'I'.$currentRow;
        $updateBody = new Google_Service_Sheets_ValueRange([
            'range' => $updateRange,
            'majorDimension' => 'ROWS',
            'values' => ['values' => date('c')],
        ]);
        $sheets->spreadsheets_values->update(
            SHEET_ID,
            $updateRange,
            $updateBody,
            ['valueInputOption' => 'USER_ENTERED']
        );

        $currentRow++;
    }
}

print_r($data);