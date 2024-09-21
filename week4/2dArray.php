<?php
$students = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

// Extract the grades into a separate array
$grades = array_column($students, 1);

// Calculate the total sum of grades
$totalGrades = array_sum($grades);

// Calculate the average grade
$averageGrades = $totalGrades / count($grades);

// Print students who achieved grades above the average
echo "Students who achived grades above the class average ($averageGrades): <br>";

foreach ($students as $student) {
    if ($student[1] > $averageGrades) {
        echo "Name: {$student[0]}, Grade: {$student[1]} <br>";
    }
}
?>