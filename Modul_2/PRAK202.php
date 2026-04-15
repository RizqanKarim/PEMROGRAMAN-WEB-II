<?php
$pesanErrorNama = $pesanErrorNim = $pesanErrorJK = "";
$nama = $nim = $jk = "";

if (isset($_POST['submit'])) {
        if (empty($_POST['nama'])) {
        $pesanErrorNama = "nama tidak boleh kosong";
    } else {
        $nama = $_POST['nama'];
    }

    if (empty($_POST['nim'])) {
        $pesanErrorNim = "nim tidak boleh kosong";
    } else {
        $nim = $_POST['nim'];
    }

    if (empty($_POST['jk'])) {
        $pesanErrorJK = "jenis kelamin tidak boleh kosong";
    } else {
        $jk = $_POST['jk'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <form action="" method="POST">
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>">
        <span class="error">* <?php echo $pesanErrorNama; ?></span><br>
        
        Nim: <input type="text" name="nim" value="<?php echo $nim; ?>">
        <span class="error">* <?php echo $pesanErrorNim; ?></span><br>
        
        Jenis Kelamin :<span class="error">* <?php echo $pesanErrorJK; ?></span><br>
        <input type="radio" name="jk" value="Laki-Laki" <?php if($jk == "Laki-Laki") echo "checked"; ?>> Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan" <?php if($jk == "Perempuan") echo "checked"; ?>> Perempuan<br>
        
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
        if (!empty($nama) && !empty($nim) && !empty($jk)) {
        echo "<h2>Output:</h2>";
        echo "$nama <br>";
        echo "$nim <br>";
        echo "$jk <br>";
    }
    ?>
</body>
</html>