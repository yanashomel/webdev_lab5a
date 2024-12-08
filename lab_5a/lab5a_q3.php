<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3 - Multiplication Table</title>
</head>
<body>

<?php
// Define the multiplication function
function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'number' => $i,
            'multiplier' => $multiplier,
            'answer' => $i * $multiplier
        ];
    }
    return $results;
}

// Call the multiplication function with a specific multiplier
$multiplier = 2; // Change this to generate a table for any multiplier
$multiplicationTable = multiplication($multiplier);
?>

<!-- Display the multiplication table in HTML -->
<table border="1">
    <tr>
        <th>No</th>
        <th>Multiplier</th>
        <th>Answer</th>
    </tr>
    <?php
    foreach ($multiplicationTable as $row) {
        echo "<tr>";
        echo "<td>" . $row['number'] . "</td>";
        echo "<td>" . $row['multiplier'] . "</td>";
        echo "<td>" . $row['answer'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
