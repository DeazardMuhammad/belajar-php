<?php
/**
 * function / method / fungsi = blok kode yg akan dijalankan ketika dipanggil
 * blok kode -> kumpulan baris kode yg diapit oleh tanda { } 
 * function punya parameter -> data yg akan diolah oleh fungsi ts tanda ()
 */

 function prokes(){
    echo "memakai masker ";
    echo "mencuci tangan ";
    echo "mengurangi mobilitas ";
 }
 function makan ($nama_makanan){
     echo "cuci tangan ";
     echo "baca doa ";
     echo "masukkan $nama_makanan ";
     echo "kunyah $nama_makanan ";
     echo "telan $nama_makanan ";
 }

 //  echo prokes();
  echo makan("Burger");

?>