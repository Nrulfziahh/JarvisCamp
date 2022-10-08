<?php
//String
$nama = "Nurul Fauziah";

echo "Hello nama saya $nama";

echo "<br>";

echo str_replace("Nurul", "ziah", $nama);

echo "<br><br>";

//Integer
$umur = 18;

echo $umur + 3 . "<br>";

var_dump($umur);

echo "<br><br>";

//Float
$nilai = 3.72;

var_dump($nilai);

echo "<br><br>";

//Boolean
$is_student = "true";

var_dump($is_student);

echo "<br><br>";

//Array biasa
$mahasiswa1 = ["Nurul", 18, 3.72, false];

var_dump($mahasiswa1);

echo "<br><br>";

echo "Umur saya $mahasiswa1[1]";

echo "<br><br>";

//Array asosiatif
$mahasiswa2 = [
    "nama" => "Nurul",
    "umur" => 18,
    "nilai" => 3.72,
    "is student" => false,
];

var_dump($mahasiswa2);

echo "<br>";

echo "Hallo, saya " . $mahasiswa2['nama'];