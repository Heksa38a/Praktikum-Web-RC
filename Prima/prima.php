<?php
    function prima($angka){
        for($i=1;$i<=$angka;$i++){
            $a=0;
            for($j=1;$j<=$i;$j++){
                if($i % $j == 0){
                    $a++;
                }
            }
            if($a == 2){
                echo $i. ' ';
            }
        }

    }
    $nilai=50;
    echo "Hasil bilangan prima : <br>";
    echo prima($nilai);


?>