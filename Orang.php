<?php

class Orang{
    public $nama;
    public $nilai;
    public $nim;


    public function__construct($nama,$nilai,$nim) {
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->nim = $nim;


    }

    public function getNama(){
        return $this->nama;

    }
    
    public function getNilai(){
        return $this->nilai;
    }

    public function getNim(){
        return $this->nim;
    }

    public function hasilLulus(){
        return $this->nilai >=65 ? 'Lulus' : 'Tidak Lulus';
    }

    public function predikat(){
        if ($this->nilai >= 85) {
            return 'Sangat Baik';
        } elseif ($this->nilai >= 70) {
            return 'Baik';
        } elseif ($this->nilai >= 60) {
            return 'Cukup';
        } else {
            return 'Kurang';
        }
    }
}