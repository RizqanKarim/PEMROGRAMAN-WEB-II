<?php
$smartphones = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 2px 5px;
            text-align: left;
        }
        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?php echo $smartphones[0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphones[1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphones[2]; ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphones[3]; ?></td>
        </tr>
    </table>
</body>
</html>