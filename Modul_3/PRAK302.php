<!DOCTYPE html>
<html>
<head>
    <title>Soal 2 - PRAK302</title>
</head>
<body>
    <form action="" method="POST">
        Tinggi : <input type="number" name="tinggi" required><br>
        Alamat Gambar : <input type="text" name="alamat" required><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        $alamat = $_POST['alamat'];
        
        $i = 0;
        while ($i < $tinggi) {
            $j = 0;
            while ($j < $i) {
                echo "<img src='$alamat' style='width: 30px; height: 30px; visibility: hidden;'>";
                $j++;
            }
            
            $k = 0;
            while ($k < ($tinggi - $i)) {
                echo "<img src='$alamat' style='width: 30px; height: 30px;'>";
                $k++;
            }
            echo "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>