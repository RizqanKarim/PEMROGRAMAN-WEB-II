<?php
$smartphones = array(
    "hp1" => "Samsung Galaxy S22",
    "hp2" => "Samsung Galaxy S22+",
    "hp3" => "Samsung Galaxy A03",
    "hp4" => "Samsung Galaxy Xcover 5"
);
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
        .header-merah {
            background-color: red;
            padding: 20px 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th class="header-merah">Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?php echo $smartphones["hp1"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphones["hp2"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphones["hp3"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphones["hp4"]; ?></td>
        </tr>
    </table>
</body>
</html>