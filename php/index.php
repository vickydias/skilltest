<?php
$host = 'db';
$user = 'vicky';
$password = 'dias';
$db = 'anugerah';
$conn = new mysqli($host,$user,$password,$db);
if($con->connect_error){
    echo '!!!! faild !!!!!' . $conn->connect_error;

}
echo ' Database Connected!!! ';
?>
