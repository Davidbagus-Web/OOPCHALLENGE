<?php

class App {
    public $daftarHape = [];

    public function tambahTipe(Smartphone $produk) {
        $this->daftarHape[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR HAPE : <br> ";

        foreach( $this->daftarHape as $p) {
            $str .= "- {$p->getInfoHape()} <br>";
        }

        return $str;
    }
}