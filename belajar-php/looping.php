<?php
/**
 * looping (perulangan) -> mengulang baris kode perintah
 * 
 * type of looping -> for, while, do.. while
 * 
 * konsep looping:
 * 1. titik awal
 * 2. kondisi
 * 3. perubahan nilai
 * 
 * selama kondisinya benar, looping akan berlanjut,
 * saat kondisi salah, looping akan berhenti
 */

 // case1: menampilkan bilangan kelipatan 7 mulai dari -70 sampai 100
 //$start = -70;
 //for ($i=$start; $i < 100 ; $i+=7) { 
 //    echo "$i ";
 // }

 // case2
 $person = [
    [ "name" => "Gopal", "address" => "Bumi", "age" => 15],
    [ "name" => "Kaizo", "address" => "Saturnus", "age" => 40],
    [ "name" => "Kokochi", "address" => "Pluto", "age" => 20],
];
// string nama = "jack";
// system.out/println("nama saya: " + nama)
//tanda titik digunakan utk menggabungkan anatara string 1 dengan 1 yg lain
// echo $person[0]['name']." ".$person[0]['address']." ".$person[0]['age']." | ";
// echo $person[1]['name']." ".$person[1]['address']." ".$person[1]['age']." | ";
// echo $person[2]['name']." ".$person[2]['address']." ".$person[2]['age']." | ";

//menampilkan isi dalam array
# count digunakan untk mengetahui jumlah array (java -> .lenght())
for ($i=0; $i < count($person); $i++) { 
    echo $person[$i]['name']." ".$person[$i]['address']." ".$person[$i]['age']." | ";
}
?>