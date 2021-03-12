<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 5 (12 Maret 2021)
    Materi minggu ini mempelajari mengenai array associative dalam PHP
    */
?>
<?php
// $mahasiswa = [
//     ["Indra Wahyudi", "203040126", "Teknik Informatika", "mindraw595@gmail.com"],
//     ["Indra Wahyudi", "203040126", "Teknik Informatika", "mindraw595@gmail.com"],
//     ["Indra Wahyudi", "203040126", "Teknik Informatika", "mindraw595@gmail.com"]
// ];

// Array Associative
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Indra Wahyudi", 
    "nrp" => "203040126", 
    "jurusan" => "Teknik Informatika", 
    "email" => "mindraw595@gmail.com"
    ],
    [
        "nama" => "Indra Wahyudi", 
    "nrp" => "203040126", 
    "jurusan" => "Teknik Informatika", 
    "email" => "mindraw595@gmail.com"
    ]
];

echo $mahasiswa[1]["email"];
?>
