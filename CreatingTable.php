<?php
$servername="localhost";
$user="root";
$pass="";
$dbname="school";
//creating connection
$conn=mysqli_connect($servername,$user,$pass,$dbname);
//checking connection
if(!$conn)
{
    die(" Connection Failed").mysqli_connect_error();

}else
echo"Connected Succefully";

$sql="create table students(id INT auto_increment primary key,stud_name varchar(30) not null,email varchar(30),mobile varchar(10) not null)";

if(mysqli_query($conn,$sql))
{
    echo"Table Created";
}else{
    echo"Error in created table".mysqli_error($conn);
}
mysqli_close($conn);
?>