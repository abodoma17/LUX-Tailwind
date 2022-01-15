<?php
session_start();
$fname = $_GET["fname"];    
$lname = $_GET["lname"];
$address = $_GET["address"];
$city = $_GET["city"];
$phone = $_GET["phone"];
$email = $_GET["email"];
$total = $_GET["total"];
$orderP = $_GET["orderP"];

echo("first name: $fname
<br>
last name: $lname
<br>
address: $address
<br>
city: $city
<br>
phone: $phone
<br>
email: $email
<br>
total: $total
<br>
order items: $orderP");

$con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
$db = mysqli_select_db($con,"luxdb") or die ("Error: Couldn't connect to Database");;

$query = "INSERT INTO orders(f_name,l_name,total,city,address,email,phoneNo,items) value ('$fname','$lname','$total','$city','$address','$email','$phone','$orderP')";

$result = mysqli_query($con,$query);

if($result){
    header('Location: ../../Products/View/shop.php');
}  




?>