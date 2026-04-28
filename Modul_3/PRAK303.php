<!DOCTYPE html>
<html>
<head>
    <title>Soal 3 - PRAK303</title>
</head>
<body>
    <form action="" method="POST">
        Batas Bawah: <input type="number" name="bawah" required><br>
        Batas Atas: <input type="number" name="atas" required><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        
        $i = $bawah;
        do {
            if (($i + 7) % 5 == 0) {
                echo "<img src='star-images.png' style='width: 20px; height: 20px;'> ";
            } else {
                echo "$i ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>
</body>
</html>