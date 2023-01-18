<?php
// $x = file_exists ( 'firebase/src/firebaseLib.php' );
// echo $x;
// include the Firebase PHP library
require_once 'firebase/src/firebaseLib.php';

// define the URL of the Firebase database
$url = 'https://fast-ride-90290-default-rtdb.firebaseio.com';

// define the table key
$table_key = 'users';

// instantiate a new Firebase object
$firebase = new \Firebase\FirebaseLib($url);

// fetch the data from the table
$data = $firebase->get($table_key);

// convert the data to a JSON array
$data_array = json_decode($data, true);
// echo json_encode($data_array);
$isAuth = false;
$user=null;
session_start();
// $json_data = array();
foreach($data_array as $val){
    if(isset($val['email'])&&isset($val['password'])){
        if($val['email']==$_GET["email"]&&$val['password']==$_GET["password"]){
            $isAuth = true;
            $user = $val;
        }
        else{
            $isAuth=false;
        }
    }
}

// return the data as a JSON array of objects

if($user!=null){
    $_SESSION['user'] = $user;
}
echo json_encode($user,$isAuth);

?>