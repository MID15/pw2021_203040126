<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 3 (11 Februari 2021)
    Materi minggu ini mempelajari mengenai control flow dalam PHP
    */
?>

<?php
    // Control flow adalah alur dari program kita ketika dibaca oleh interpreter php

    // Pengulangan
    // for
    // while
    // do .. while
    // foreach : pengulangan khusus array

    // for
    for($i = 0; $i < 5; $i++){
        echo "Hello World! <br>";
    }
    
    // while
    $i = 0;
    while ($i < 5){
        echo "Hello World! <br>";
        $i++;
    }

    // do .. while
    $i = 0;
    do {
        echo "Hello World! <br>";
        $i++;
    } while ($i < 5);


    // Pengkondisian
    
    // if else
    $x = 10;
    if ($x < 20) {
        echo "Benar";
    } else {
        echo "Salah";
    }

    // if else if else
    $x = 20;
    if ($x <20) {
        echo "Benar";
    } else if ($x = 20) {
        echo "Bingo";
    } else {
        echo "salah";
    }
    
    // ternary
    // switch
?>
