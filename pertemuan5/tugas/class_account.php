<?php
class akun{
//property
    public $nomor;
    public $nama;
    public $saldo;

//method atau function
    function __construct($nomor,$nama,$saldo){
        $this->nomor=$nomor;
        $this->nama=$nama;
        $this->saldo=$saldo;
    }
}
?>