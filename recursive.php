<?php
function tampilkanAngka(int $jumlah, int $indeks = 1){
    echo "Perulangan ke-{$indeks} <br>";
    
    for ($i=1; $i<=25 ; $i++) {
        echo "Perulangan ke-{$i} <br>";
    }
}
tampilkanAngka(20);
?>