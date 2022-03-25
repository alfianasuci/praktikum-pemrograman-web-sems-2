<?php
// membuat class manusai
class Manusia{
    // buat property
    var $nama;
    var $warna;

    // buatlah method atau function
    function tampilkan_nama(){
        return '</br>Nama saya adalah Alfiana Suci';
    }

    function _construct(){
        return '</br>Kulit saya berwarna coklat';
    }
}
// buat object
$manusia = new Manusia();

echo $manusia -> _construct();
echo $manusia -> tampilkan_nama();
?>