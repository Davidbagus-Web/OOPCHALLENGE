<?php

class App {
    public $daftarHape = [];

    public function tambahTipe(Smartphone $produk) {
        $this->daftarHape[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR HP : <br> ";

        foreach( $this->daftarHape as $p) {
            $str .= "- {$p->getInfoHp()} <br>";
        }

        return $str;
    }
}