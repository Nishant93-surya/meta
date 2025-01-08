<?php

$conn = mysqli_connect("localhost", "root", "nishu", "new2");

if ($conn) {
    echo "Connected Successfully.";
}

$first_name = $_POST['name'];
$email_id = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO new VALUES('$first_name' , '$email_id' , '$message')";



if (mysqli_query($conn, $sql)){
    echo "data stored in database";
}
else{
    echo "Error: Hush! Hurrr $sql."
    .mysqli_error($conn);
}

mysqli_close($conn);

?>
