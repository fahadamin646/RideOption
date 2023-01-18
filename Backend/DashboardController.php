<?php
// $x = file_exists ( 'firebase/src/firebaseLib.php' );
// echo $x;
// include the Firebase PHP library
require_once 'firebase/src/firebaseLib.php';

// define the URL of the Firebase database
$url = 'https://fast-ride-90290-default-rtdb.firebaseio.com';

// define the table key
$table_key = $_GET["table"];

// instantiate a new Firebase object
$firebase = new \Firebase\FirebaseLib($url);

// fetch the data from the table
$data = $firebase->get($table_key);

// convert the data to a JSON array
$data_array = json_decode($data, true);

$json_data = array();
foreach($data_array as $key=>$val){
    $json_data[] = json_decode(json_encode($val));
}

// return the data as a JSON array of objects
header('Content-Type: application/json');
echo json_encode($json_data);

?>