<?php
// List of grades from 10 students
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Sort the grades in ascending order
sort($grades);

// Ignore the two lowest and two highest grades
$gradesToConsider = array_slice($grades, 2, 6); // Get grades from index 2 to 7

// Calculate the total of the remaining grades
$totalScore = array_sum($gradesToConsider);

// Display the result
echo "Total score after ignoring the highest and lowest grades: $totalScore<br>";

// Calculate and display the average
$averageScore = $totalScore / count($gradesToConsider);
echo "Average grade: $averageScore";
?>