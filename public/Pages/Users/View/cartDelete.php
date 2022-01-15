<?php



session_start();

echo('BEFORE <br>');
foreach($_SESSION['cart'] as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }

$id = $_GET['id'];

unset($_SESSION['cart'][$id]);


echo('AFTER <br>');
foreach($_SESSION['cart'] as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

header("Location: shoppingCart.php");

?>