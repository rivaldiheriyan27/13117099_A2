<!DOCTYPE html>
<html>
    <head>
        <title> Latihan 1 </title>
    </head>
    <body>
        <h1>
            Menamnipikan jumlah yang ada 
        </h1>
        <p>
            bilangan 1 = 20
            <br>
            bilangan 2 = 5
            <?php
                $bil1 = 20;
                $bil2 = 5;
            ?>
        </p>
        <p>
            Penjumlahan antara bilangan 1 dan 2 = 
            <?php 
                $hasil = $bil1 + $bil2;
                echo "$hasil";
            ?>            
        </p>
        <p>
            Penguranagan antara bilangan 1 dan 2 = 
            <?php 
                $hasil = $bil1 - $bil2;
                echo "$hasil";
            ?>            
        </p>
        <p>
            Perkalian antara bilangan 1 dan 2 = 
            <?php 
                $hasil = $bil1 * $bil2;
                echo "$hasil";
            ?>            
        </p>
        <p>
            Pembagian antara bilangan 1 dan 2 = 
            <?php 
                $hasil = $bil1 / $bil2;
                echo "$hasil";
            ?>            
        </p>
        <p>
            Modulus antara bilangan 1 dan 2 = 
            <?php 
                $hasil = $bil1 % $bil2;
                echo "$hasil";
            ?>            
        </p>

    </body>
</html>