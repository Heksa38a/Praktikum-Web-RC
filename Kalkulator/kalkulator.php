<?php
        if(isset($_POST['submit'])){
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
    
            function jumlah($bil1,$bil2){
                $total=$bil1 + $bil2;
                return $total;
            }
            $jumlah=jumlah ($bil1,$bil2);

            function kurang($bil1,$bil2){
                $total=$bil1 - $bil2;
                return $total;
            }
            $kurang=kurang ($bil1,$bil2);

            function perkalian($bil1,$bil2){
                $total=$bil1 * $bil2;
                return $total;
            }
            $perkalian=perkalian ($bil1,$bil2);

            function pembagian($bil1,$bil2){
                $total=$bil1 / $bil2;
                return $total;
            }
            $pembagian=pembagian ($bil1,$bil2);

            function modulu($bil1,$bil2){
                $total=$bil1 % $bil2;
                return $total;
            }
            $modulu=modulu ($bil1,$bil2);
    

        }

        ?>
<html>
    <head>
        <Title>Kalkulator Sederhana</Title>
    </head>
    <body style="background-color: cornsilk">
        <form action="" method="POST">
        <td>Bilangan 1 : </td>
        <input type="number" name="bil1" id="bil1">
        <td>Bilangan 2</td>
        <input type="number" name="bil2" id="bil2">
        <button type="submit" name="submit" id="submit"> Submit</button>
        </form>
        <h4>
            <?php
            echo "Berikut hasil perhitungan : <br>";
            echo "<br> PENJUMLAHAN <br>";
            echo "Operator : + <br>";
            echo "Hasil ";
            echo "$jumlah <br>"; 
            echo "<br> PERKURANGAN <br>";
            echo "Operator : - <br>";
            echo "Hasil ";
            echo "$kurang <br>";
            echo "<br> PERKALIAN <br>";
            echo "Operator : * <br>";
            echo "Hasil ";
            echo "$perkalian <br>";
            echo "<br> PEMBAGIAN <br>";
            echo "Operator : / <br>";
            echo "Hasil ";
            echo "$pembagian <br>";
            echo "<br> MODULU <br>";
            echo "Operator : % <br>";
            echo "Hasil ";
            echo "$modulu <br>";
            ?>
        </h4>
        
    </body>




</html>