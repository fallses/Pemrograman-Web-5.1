<?php

class ItemProduk {
    protected $ukuran;
    protected $warna;
    protected $nama;

    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getUkuran() {
        return $this->ukuran;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Topi extends ItemProduk {
    private $model;

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
}

class Celana extends ItemProduk {
    private $tipe;
    private $model;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function getModel() {
        return $this->model;
    }
}

class Baju extends ItemProduk {
    private $tipe;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function getTipe() {
        return $this->tipe;
    }
}

// Contoh penggunaan:
$topi = new Topi();
$topi->setModel("Snapback");
$topi->setUkuran("L");
$topi->setWarna("Merah");
$topi->setNama("Topi Keren");

$celana = new Celana();
$celana->setTipe("Jeans");
$celana->setModel("Slim Fit");
$celana->setUkuran("M");
$celana->setWarna("Biru");
$celana->setNama("Celana Keren");

$baju = new Baju();
$baju->setTipe("Kaos");
$baju->setUkuran("XL");
$baju->setWarna("Hitam");
$baju->setNama("Baju Keren");

// Mengakses informasi produk
echo "Informasi Topi: " . $topi->getNama() . ", Model: " . $topi->getModel() . ", Ukuran: " . $topi->getUkuran() . ", Warna: " . $topi->getWarna() . "\n";
echo "Informasi Celana: " . $celana->getNama() . ", Tipe: " . $celana->getTipe() . ", Model: " . $celana->getModel() . ", Ukuran: " . $celana->getUkuran() . ", Warna: " . $celana->getWarna() . "\n";
echo "Informasi Baju: " . $baju->getNama() . ", Tipe: " . $baju->getTipe() . ", Ukuran: " . $baju->getUkuran() . ", Warna: " . $baju->getWarna() . "\n";

?>
