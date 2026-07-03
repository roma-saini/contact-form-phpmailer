<?php
require 'db.php';

$result = $conn->query(
    "SELECT * FROM contacts ORDER BY id DESC"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Messages</title>

    <style>

        table{
            width:100%;
            border-collapse:collapse;
        }

        th,td{
            border:1px solid black;
            padding:10px;
            text-align:left;
        }

        th{
            background:#f2f2f2;
        }

    </style>

</head>

<body>

<h2>Contact Messages</h2>

<table>

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Date</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>

    <tr>

        <td><?php echo $row['id']; ?></td>

        <td><?php echo $row['name']; ?></td>

        <td><?php echo $row['email']; ?></td>

        <td><?php echo $row['subject']; ?></td>

        <td><?php echo $row['message']; ?></td>

        <td><?php echo $row['created_at']; ?></td>

    </tr>

    <?php } ?>

</table>

</body>
</html>