<?php
$servername="localhost"
$username=$_post{"username"}
$password=$_post{"password"}
if(isset($_post{"login"}))
$host="localhost";
$user="root";
$password="";
$db="phpmyadmin"
$conn=mysqli_connect($host,
$user,$password,$db);
$insert="insert into users values("$username,"passeord)";
$mysqli_query($conn,$insert);
if($conn){
    echo("<h1style='your login is done!</h1>");
}