<?php
$id = $_GET["id"];
$quantity = $_GET["q"];

session_start();

if(empty($_SESSION['cart']))
{
    $_SESSION['cart'] = array($id => $quantity);
}
else
{
    $_SESSION['cart'] += array($id => $quantity);
}


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>