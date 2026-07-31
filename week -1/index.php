<?php 
$name= "Rahim Ahmed";
$Id = "23-12345-1";
$quantity=6;
$choice=1;
switch ($choice) {
    case 1:
        $Item = "Burger";
        $price = 5;
        break;

    case 2:
        $Item = "Pizza";
        $price = 8;
        break;

    case 3:
        $Item = "Sandwich";
        $price = 4;
        break;
    case 4:
        $Item = "Coffee";
        $price = 5;
        break;
    default:
        $Item = "Invalid";
        $price = 0;
}


$subtotal = $price * $quantity;

if ($subtotal >= 30) {
    $discountPercent = 20;
}
elseif ($subtotal >= 20) {
    $discountPercent = 10;
}
else {
    $discountPercent = 0;
}

$discountAmount = ($subtotal * $discountPercent) / 100;
$finalBill = $subtotal - $discountAmount;




echo "<h2>University Cafeteria</h2>";
echo"Student Name: {$name}<br>";
echo"Student ID: {$Id}<br><br>";
echo"FoodItem:{$Item}<br>";
echo"Quantity : {$quantity}<br>";
for ($i = 1; $i <= $quantity; $i++) {
    echo "Item $i : $Item <br>";
}
echo "<br>";
echo "Subtotal : $ {$subtotal}<br>";
echo "Discount :   {$discountPercent} %<br>";
echo "Discount Amount : $ {$discountAmount}<br>";
echo "<b>Final Bill : $ {$finalBill}</b><br><br>";

echo "Thank you for visiting!<br>";
echo"--------------------------";

?>

