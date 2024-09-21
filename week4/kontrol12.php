<?php
$originalPrice = 120000;
$discount = 0.2;

if ($originalPrice > 100000 ) {
    $discountAmount = $originalPrice * $discount;
    $finalPrice = $originalPrice - $discountAmount;
} 

echo "Original price: Rp. " . number_format($originalPrice) . "<br>";
echo "Discount amount: Rp. " . number_format($discountAmount) . "<br>";
echo "Final price: Rp. " . number_format($finalPrice);
?>