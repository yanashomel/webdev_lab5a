<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1 - Personal Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $name = "Nor Liyana Binti Nor Zamrai";
        $matricNumber = "AI220151";
        $course = "Bachelor of Computer Science (Software Engineering)";
        $yearOfStudy = "Year 3";
        $address = "2134, Jalan SJ 9/3, Taman Seremban Jaya, 70450 Seremban, Negeri Sembilan";
    ?>

    <!-- Display details in an HTML table -->
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>
