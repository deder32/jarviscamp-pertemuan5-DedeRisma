<?php 
class Kendaraan {
    // 2 properti
    public $merk;
    public $kecepatan;
  
    // 1 konstruktor
    function __construct($merk, $kecepatan) {
      $this->merk = $merk;
      $this->kecepatan = $kecepatan;
    }
  
    // 1 method
    function infoKendaraan() {
      echo "Merk: " . $this->merk . "<br>";
      echo "Kecepatan: " . $this->kecepatan . " km/jam<br>";
    }
  }
  class MobilMewah extends Kendaraan {
    // 1 properti baru
    public $jumlahPintu;
  
    // 1 konstruktor
    function __construct($merk, $kecepatan, $jumlahPintu) {
      parent::__construct($merk, $kecepatan);
      $this->jumlahPintu = $jumlahPintu;
    }
  
    // 1 method baru
    function tampilkanPintu() {
      echo "Jumlah Pintu: " . $this->jumlahPintu . "<br>";
    }
  }
  $mobilMewah = new MobilMewah("Mercedes-Benz", 200, 4);

  $mobilMewah->infoKendaraan();
  $mobilMewah->tampilkanPintu();
    
  ?>