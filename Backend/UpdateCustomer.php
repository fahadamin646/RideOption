<?php
// $x = file_exists ( 'firebase/src/firebaseLib.php' );
// echo $x;
// include the Firebase PHP library
require_once 'firebase/src/firebaseLib.php';

$table_name = "driverUsers";
$column_name = "uid";
$column_value = $_GET["uid"];
$field_name = "status";
$new_value = $_GET["status"];

// define the URL of the Firebase database
$url = 'https://fast-ride-90290-default-rtdb.firebaseio.com';


// instantiate a new Firebase object
$firebase = new \Firebase\FirebaseLib($url);

// fetch the data from the table
$users = $firebase->get($table_name);
$users = json_decode($users, true);

// search for the user with the specified column value
foreach ($users as $key => $user) {
    if ($user[$column_name] == $column_value) {
        // update specific field of the user
        $path = $table_name . '/' . $key . '/' . $field_name;
        $firebase->set($path, $new_value);
        break;
    }
}
// return the data as a JSON array of objects
echo "Hello";

?>