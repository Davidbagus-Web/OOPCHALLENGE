<?php

abstract class Smartphone {
    protected   $tipe;

    public function __construct($tipe) {
        $this->tipe = $tipe;
    }

    public function getMerk() {
        return $this->merk ;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function getVolume() {
        return "Volume Sekarang : {$this->volume} <br>";
    }

    public function nyalakan() {
        return "Menyalakan {$this->getInfoHp()} <br>";
    }

    public function matikan() {
        return "Mematikan {$this->merk} {$this->tipe} <br>";
    }

    public function volumeUp() {

        $str = $this->volume + 1;
        
        
        if($str <= 5) {

           echo "Berhasil menambah volume  {$this->merk} {$this->tipe} <br>"; 
           $this->volume = $str;

        }else{

            echo "Maksimal Volume 5! <br>";
        }
        

    }

    public function volumeDown() {
        
        $str = $this->volume - 1;
    
        if($str >= 0) {

            echo "Berhasil mengurangi volume {$this->merk} {$this->tipe} <br>";
            $this->volume = $str;


        }else{

            echo "Minimal Volume 0!!";
        }
    }

    abstract public function UI();
 
    public function getInfoHp() {
        return "{$this->merk} {$this->getTipe()}";
    }
}


?>