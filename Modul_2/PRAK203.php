<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <form action="" method="POST">
        Nilai: <input type="number" step="any" name="nilai" required><br>
        
        Dari:<br>
        <input type="radio" name="dari" value="Celcius" required> Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit"> Fahrenheit<br>
        <input type="radio" name="dari" value="Rheamur"> Rheamur<br>
        <input type="radio" name="dari" value="Kelvin"> Kelvin<br>
        
        Ke:<br>
        <input type="radio" name="ke" value="Celcius" required> Celcius<br>
        <input type="radio" name="ke" value="Fahrenheit"> Fahrenheit<br>
        <input type="radio" name="ke" value="Rheamur"> Rheamur<br>
        <input type="radio" name="ke" value="Kelvin"> Kelvin<br>
        
        <button type="submit" name="submit">Konversi</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];

                if ($dari == "Celcius") {
            $suhu_celcius = $nilai;
        } elseif ($dari == "Fahrenheit") {
            $suhu_celcius = ($nilai - 32) * 5/9;
        } elseif ($dari == "Rheamur") {
            $suhu_celcius = $nilai * 5/4;
        } elseif ($dari == "Kelvin") {
            $suhu_celcius = $nilai - 273.15;
        }

               if ($ke == "Celcius") {
            $hasil = $suhu_celcius;
            $simbol = "°C";
        } elseif ($ke == "Fahrenheit") {
            $hasil = ($suhu_celcius * 9/5) + 32;
            $simbol = "°F";
        } elseif ($ke == "Rheamur") {
            $hasil = $suhu_celcius * 4/5;
            $simbol = "°R";
        } elseif ($ke == "Kelvin") {
            $hasil = $suhu_celcius + 273.15;
            $simbol = "°K";
        }

        echo "<h2>Hasil Konversi: " . number_format($hasil, 1) . " $simbol</h2>";
    }
    ?>
</body>
</html>