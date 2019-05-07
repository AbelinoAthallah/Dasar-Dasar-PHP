<html>
    <head>
       <title>VARIABEL</title>
    </head>
    <body>
        <?php
        $nama = "Abelino";
        $sekolah = "SMK Telkom Malang";
        $umur = 16;

        // menampilkan nilai variabel
        // contoh 1
        echo "Halo namaku $nama usiaku $umur tahun";
        echo "<br>";
        echo "Aku sekolah di $sekolah";
        echo "<br>";
        // contoh 2
        echo 'Halo namaku' .$nama. 'usiaku' .$umur. 'tahun';
        echo "<br>";
        echo 'Aku sekolah di.$sekolah';
        ?>
    </body>
</html>