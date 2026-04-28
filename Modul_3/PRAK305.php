<!DOCTYPE html>
<html>
<head>
    <title>Soal 5 - PRAK305</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="teks" required>
        <button type="submit" name="submit">submit</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $teks = $_POST['teks'];
        
        $panjang = strlen($teks);
        
        echo "<b>Input:</b><br>$teks<br><br>";
        echo "<b>Output:</b><br>";
        
        for ($i = 0; $i < $panjang; $i++) {
            $huruf = $teks[$i];
            
            for ($j = 0; $j < $panjang; $j++) {
                if ($j == 0) {
                    echo strtoupper($huruf);
                } else {
                    echo strtolower($huruf);
                }
            }
        }
    }
    ?>
</body>
</html>