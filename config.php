<?php
$connect = mysqli_connect("localhost","root","","alicktish_quote");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
    
}
?>