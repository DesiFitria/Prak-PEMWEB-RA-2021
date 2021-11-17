<?php
function kalkulator(){
    $x = 10;
    $y = 5;

    echo "Bilangan 1 = " . $x . "<br> Bilangan 2 = " . $y;
    
    echo "<br><br> Berikut merupakan hasil dari setiap operasi ";
    
    echo "<br><br> PENJUMLAHAN <br> Operator : + <br> Hasil : ".($x+$y);
    
    echo "<br><br> PENGURANGAN <br> Operator : - <br> Hasil : ".($x-$y);
    
    echo "<br><br> PERKALIAN <br> Operator : * <br> Hasil : ".($x*$y);
    
    echo "<br><br> PEMBAGIAN <br> Operator : / <br> Hasil : ".($x/$y);
    
    echo "<br><br> MODULUS <br> Operator : % <br> Hasil : ".($x%$y);
    echo "<br>";
}

function pengurutan(){
    echo "<h2> PENGURUTAN </h2>";

    $arr = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    sort($arr);
    $i = 0;

    echo "Sesudah di urutkan : <br>";
    foreach ($arr as $data){
        if($i < count($arr)-1){
            echo $data." | ";
        }else{
            echo "$data <br>";
        }
        $i++;
    }
}

function prima(){
    echo "<h2> Bilangan Prima 1-50 <br> </h2>";

    for($x=1; $x<=50; $x++){
        $i = 0;
        for($y=1; $y<=$x; $y++){
            if($x % $y == 0){
                $i++;
            }
        }
        if($i == 2){
            echo $x." | ";
        }
    }
}

kalkulator();
pengurutan();
prima();
?>
