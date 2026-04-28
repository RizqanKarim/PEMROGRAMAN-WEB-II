<?php
$bintang = 0;

if (isset($_POST['submit'])) {
    $bintang = $_POST['bintang'];
}

if (isset($_POST['tambah'])) {
    $bintang = $_POST['bintang'] + 1;
}

if (isset($_POST['kurang'])) {
    $bintang = $_POST['bintang'] - 1;
    if ($bintang < 0) {
        $bintang = 0; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 4 - PRAK304</title>
</head>
<body>
    <?php if ($bintang == 0): ?>
        <form action="" method="POST">
            Jumlah bintang <input type="number" name="bintang" min="1" required><br>
            <button type="submit" name="submit">Submit</button>
        </form>

    <?php else: ?>
        Jumlah bintang <?= $bintang ?><br><br>
        
        <?php
        for ($i = 0; $i < $bintang; $i++) {
            echo "<img src='star-images.png' style='width: 50px; height: 50px;'> ";
        }
        ?>
        
        <form action="" method="POST">
            <input type="hidden" name="bintang" value="<?= $bintang ?>">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php endif; ?>
</body>
</html>