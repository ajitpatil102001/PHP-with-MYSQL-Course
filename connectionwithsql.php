<?php
$servername="localhost";
$user="root";
$pass="";
//creating connection
$conn=mysqli_connect($servername,$user,$pass);
//checking connection
if(!$conn)
{
    die(" Connection Failed").mysqli_connect_error();

}else
echo"Connected Succefully";
?>