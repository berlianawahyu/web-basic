<!DOCTYPE html>
<html>
    <head>
        <title>Belajar Membuat Statement Lulus / Tidak Lulus</title>
    </head>
    <body>
        <h2>Cek Nilai Kelulusan</h2>
        <?php
            $nilai = 75;
            if ($nilai >= 70) {
                echo"Selamat Anda Lulus";
            }
            else {
                echo"Maaf Anda Tidak Lulus";
            }
        ?>
    </body>
</html>