<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$host="localhost";
$user="root";
$pass="";
$db="form";

$con= new mysqli($host,$user,$pass,$db);
if(!$con){
    echo"There are some problem while connecting the database";
}

$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];


$qry="INSERT INTO `contact`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";

$insert=mysqli_query($con,$qry);
if(!$insert){
    echo"There are some problem while inserting data";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
  button {
    color: rgb(4, 106, 223);
    border: 1px solid rgb(4, 106, 223);
    background-color: transparent;
    padding: 10px 40px;
    cursor: pointer;
    font-weight: bold;
   }
    button:hover {
    border: none;
    background-color:rgb(4, 106, 223) ;
    color: white;
    
   }
 
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:white;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<h1 style="color: rgb(22, 122, 162)">The message have been send successfully !</h1>
<a href="contact.html"><button>Go Back</button></a>
</body>
</html>