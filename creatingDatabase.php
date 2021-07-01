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

$sql="create database school";
if(mysqli_query($conn,$sql))
{
    echo"Databse Created";
}else{
    echo"Error in created databse".mysqli_error($conn);
}
mysqli_close($conn);
?>