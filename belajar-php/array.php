<?php
/**
 * array adalah kumpulan nilai yang berjenis sama
 * setiap data punya posisi yang disebut index (start from 0)
 * variabel -> individu
 * array -> populasi
 * 
 */
//$siswa = ["Deazard","Arrayyan","Rey","John"];
//$student = "Bill Gates";
//echo $siswa[3]

//array numeric -> array yg indexnya berupa numerik
// array assosiative -> array yg indexnya berupa string
$person = [
    [ "name" => "Gopal", "address" => "Bumi", "age" => 15],
    [ "name" => "Kaizo", "address" => "Saturnus", "age" => 40],
    [ "name" => "Kokochi", "address" => "Pluto", "age" => 20],
];

echo $person[2]["address"];
?>