<?php 
include("conn.php");

$first_name = $_POST['name'];
$email_id = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO new VALUES('$first_name' , '$email_id' , '$message')";

if (mysqli_query($conn, $sql)){
   // echo "<h3>data stored in database</h3>";
}
else{
    echo "Error: Hush! Hurrr $sql."
    .mysqli_error($conn);
}

?>