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
 
$sheets = new \Google_Service_Sheets($client);

$data = [];

$currentRow = 2;

// The range of A2:H will get columns A through H and all rows starting from row 2
$spreadsheetId = getenv(SHEET_ID);
$range = 'A2:E5';
$rows = $sheets->spreadsheets_values->get($spreadsheetId, $range, ['majorDimension' => 'ROWS']);
if (isset($rows['values'])) {
    foreach ($rows['values'] as $row) {
        /*
         * If first column is empty, consider it an empty row and skip (this is just for example)
         */
        if (empty($row[0])) {
            break;
        }

        $data[] = [
            'col-a' => $row[0],
            'col-b' => $row[1],
            'col-c' => $row[2],
            'col-d' => $row[3],
            'col-e' => $row[4],
            'col-f' => $row[5],
            'col-g' => $row[6],
            'col-h' => $row[7],
        ];

        /*
         * Now for each row we've seen, lets update the I column with the current date
         */
        $updateRange = 'I'.$currentRow;
        $updateBody = new \Google_Service_Sheets_ValueRange([
            'range' => $updateRange,
            'majorDimension' => 'ROWS',
            'values' => ['values' => date('c')],
        ]);
        $sheets->spreadsheets_values->update(
            $spreadsheetId,
            $updateRange,
            $updateBody,
            ['valueInputOption' => 'USER_ENTERED']
        );

        $currentRow++;
    }
}

print_r($data);
/* Output:
Array
(
    [0] => Array
        (
            [col-a] => 123
            [col-b] => test
            [col-c] => user
            [col-d] => test user
            [col-e] => usertest
            [col-f] => email@domain.com
            [col-g] => yes
            [col-h] => no
        )

    [1] => Array
        (
            [col-a] => 1234
            [col-b] => another
            [col-c] => user
            [col-d] =>
            [col-e] => another
            [col-f] => another@eom.com
            [col-g] => no
            [col-h] => yes
        )

)
 */