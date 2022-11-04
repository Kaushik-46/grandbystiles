<?php
$server="sql205.epizy.com";
$username="epiz_32926772";
$password="rEeVlWhxHMw";
$dbname="epiz_32926772_hotelsdb";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
?>