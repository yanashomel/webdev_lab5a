<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2 - Students Table</title>
</head>
<body>

<?php
// Define the associative array
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ],
];
?>

<!-- Display the content of $students in an HTML table -->
<table border="1">
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php
    // Loop through the $students array to populate table rows
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['program'] . "</td>";
        echo "<td>" . $student['age'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

