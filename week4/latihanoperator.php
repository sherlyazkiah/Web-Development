<?php
$totalSeats = 45;
$occupiedSeats = 28;

$emptySeats = $totalSeats - $occupiedSeats;
$emptySeatPercentage = ($emptySeats / $totalSeats) * 100;

echo "Total seats: $totalSeats <br>";
echo "Occupied seats: $occupiedSeats <br>";
echo "Empty seats: $emptySeats <br>";
echo "Percentage of empty seats: " . round($emptySeatPercentage, 2) . "%";
?>