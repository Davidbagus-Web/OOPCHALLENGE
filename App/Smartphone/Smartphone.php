<?php

abstract class Smartphone {
    protected   $tipe;

    public function __construct($tipe) {
        $this->tipe = $tipe;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function nyalakan() {
        return "Menyalakan {$this->getInfoHape()} ";
    }

    public function matikan() {
        return "Mematikan {$this->merk} {$this->tipe}";
    }

    public function volumeUp($volume) {

        $str = $this->getVolume() + $volume;
           
        if($str <= 5) {

            return "Volume Up ke ({$str})";

        }else{

            return "Maksimal Volume 5!";
        }
        

    }

    public function volumeDown($volume) {
        
        $str = $this->getVolume() - $volume;
           
        if($str >= 0) {

            return "Volume Down ke ({$str})";

        }else{

            return "Minimal Volume 0!";
        }
    }

    abstract public function UI();
 
    public function getInfoHape() {
        return "{$this->merk} {$this->getTipe()}";
    }
}
?>