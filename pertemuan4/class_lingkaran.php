<?php
// membuat class lingkaran
class Lingkaran{
    // buat property
    private $jari;
    const PHI = 3.14;

    // method
    function _construct($r)
    {
        $this -> jari = $r;
    }

    // buat method getluas untuk mengitung luas lingkaran
    function getluas(){
        return self::PHI * $this->jari * $this->jari;
    }

    // buat method getkeliling untuk menghitung keliling lingkaran
    function getkeliling(){
        return 2 * self::PHI * $this->jari;
    }
}
//tutup class
?>