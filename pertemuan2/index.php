<?php
    /*
    Mochamad Indra Wahyudi
    203040126
    github.com/MID15/pw2021_203040126
    Pertemuan 2 (5 Februari 2021)
    Materi minggu ini mempelajari mengenai penggunaan sintaks dasar PHP
    */
?>

<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standart Output
// echo, print, print_r, var_dump
echo "Mochamad Indra Wahyudi";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variable dan Tipe Data
// Variable --> $
// tidak booleh diawali dengan angka tapi boleh mengandung angka
$nama = "Indra Wahyudi";
echo "Halo, nama saya $nama";

// Operator
// Aritmatika -> + - * / %
$x = 10;
$y = 20;
echo $x + $y;

// Penggabung String / concatenation / concat
// .
$nama_depan = "Indra";
$nama_belakang = "Wahyudi";
echo $nama_depan . " " . $nama_belakang;

// Assignment / Penugasan
// =, +=, -+, *=, /+. %-, .=
$x = 1;
$x += 5;
echo $x;
$nama = "Indra";
$nama .= " ";
$nama .= "Wahyudi";
echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 == "1");

// Identitas
// ===, !==
var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>
