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
 
$service = new Google_Service_Sheets($client);
include "koneksi.php";
$path = Yii::app()->basePath . '/tmp';
if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';
	
	$inputFileType = 'CSV';
	$inputFileName = $path.'/data.csv';
	
	$reader = PHPExcel_IOFactory::createReader($inputFileType);
	$excel = $reader->load($inputFileName);
	
	// Buat query Insert
	//$sql = $pdo->prepare("INSERT INTO siswa VALUES(:nis,:nama,:jk,:telp,:alamat)");
	
	$numrow = 1;
	$worksheet = $excel->getActiveSheet();
	foreach ($worksheet->getRowIterator() as $row) {
		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// START -->
			// Skrip untuk mengambil value nya
			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
			
			$get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0
			foreach ($cellIterator as $cell) {
				array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
			}
			// <-- END
			
			// Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
			$nis = $get[0]; // Ambil data NIS
			$nama = $get[1]; // Ambil data nama
			$jenis_kelamin = $get[2]; // Ambil data jenis kelamin
			$telp = $get[3]; // Ambil data telepon
			$alamat = $get[4]; // Ambil data alamat
			$options = array('valueInputOption' => 'RAW');
			$values = [[$nis, $nama, $jenis_kelamin,$telp,$alamat]];
			$body   = new Google_Service_Sheets_ValueRange(['values' => $values]);
			$result = $service->spreadsheets_values->append(SHEET_ID, 'A1:C1', $body, $options);
			// Cek jika semua data tidak diisi
			if(empty($nis) && empty($nama) && empty($jenis_kelamin) && empty($telp) && empty($alamat))
				continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
			
			// Proses simpan ke Database
			//$sql->bindParam(':nis', $nis);
			////$sql->bindParam(':nama', $nama);
			//$sql->bindParam(':jk', $jenis_kelamin);
			//$sql->bindParam(':telp', $telp);
			///$sql->bindParam(':alamat', $alamat);
			//$sql->execute(); // Eksekusi query insert
		}
		
		$numrow++; // Tambah 1 setiap kali looping
	}
}

header('location: index.php'); // Redirect ke halaman awal
?>
