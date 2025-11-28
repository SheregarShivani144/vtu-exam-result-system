<?php
$usn = $_GET['usn'];

$sampleResults = [
    "1RV17CS001" => [
        "name" => "Rahul Kumar",
        "branch" => "CSE",
        "marks" => [
            "Maths" => 85,
            "Programming in C" => 78,
            "Electronics" => 72
        ]
    ],

    "1RV17EC002" => [
        "name" => "Priya Singh",
        "branch" => "ECE",
        "marks" => [
            "Maths" => 66,
            "Programming in C" => 70,
            "Electronics" => 75
        ]
    ]
];

if (isset($sampleResults[$usn])) {
    $student = $sampleResults[$usn];
} else {
    echo "<h3>No result found for USN: $usn</h3>";
    exit;
}

echo "<h2>VTU Exam Results</h2>";
echo "<p><strong>Name:</strong> {$student['name']}</p>";
echo "<p><strong>USN:</strong> $usn</p>";
echo "<p><strong>Branch:</strong> {$student['branch']}</p>";

echo "<h3>Marks</h3>";
foreach ($student['marks'] as $sub => $mark) {
    echo "$sub : $mark <br>";
}
//Updated for assignment
?>
