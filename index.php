<?php

class Orang{
    // Properti
    public $nama;
    public $umur;
    public $ttl;


    //Metode
    public function setNama($nama){
        $this->nama =$nama;

    }
    public function setUmur($umur){
        $this->umur =$umur;

    }

    public function setTtl($ttl){
        $this->ttl =$ttl;

    }

    public function getInfo(){
        return "Nama:" . $this->nama . ",Umur:" . $this->umur . ",Ttl:" . $this->ttl;

    }
}


//Membuat Objek nya

$junika = new Orang();
$junika->setNama("Junika Hirawati");
$junika->setUmur(19);
$junika->setTtl("Ujanmas,26 juni 2004");

$siska = new Orang();
$siska->setNama("Siska");
$siska->setUmur(20);
$siska->setTtl("Palembang,11 agustus 2004");

echo $junika->getInfo();

echo  "<br>";

echo $siska->getInfo();

?>