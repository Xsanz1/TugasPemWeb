<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "<h2>Mengurutkan angka dari terkecil sampai terbesar</h2>";
        $angka = array(5, 3, 1, 4, 2, 7, 9, 6, 8, 10);
        $panjang = count($angka);
        for ($i = 0; $i < $panjang; $i++) {
            
            for ($j = 0; $j < $panjang - 1; $j++) {
                //membandingkan
            if ($angka[$j] > $angka[$j + 1]) {
                //bertukar posisi
                $temp = $angka[$j];
                $angka[$j] = $angka[$j + 1];
                $angka[$j + 1] = $temp;
            }
        }
        }
        foreach ($angka as $nilai) {
            //menampilkan hasil pengurutan
        echo $nilai . " ";
        }


        ?>
    </body>
</html>