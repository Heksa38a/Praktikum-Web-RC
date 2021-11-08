<?php

function selection_sort($nama){
    for($i=0;$i<count($nama);$i++){
        $min=$i;
        for($j=$i+1;$j<count($nama);$j++){
            if($nama[$j]<$nama[$min]){
                $min=$j;
            }
        }
        $nama=swap_positions($nama,$i,$min);
    }
    return $nama;
}
    function swap_positions($nama1, $left,$right){
        $backup=$nama1[$right];
        $nama1[$right]=$nama1[$left];
        $nama1[$left]=$backup;
        return $nama1;

    }

    $data_nama=array("Larine", "Aduh", "Qifuat", "Toda", "Anevi", "Samid", "Kifuat", "Amel", "Berkah", "Deni", "Zulfikar","Heksa");
    echo "Data awal : <br>";
    echo implode('<br>',$data_nama);
    echo "<br> Data setelah diurutkan :<br>";
    echo implode ('<br>',selection_sort($data_nama));

?>