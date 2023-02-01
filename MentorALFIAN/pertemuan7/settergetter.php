<?php 

class Entertainment
{
    private $judul, $nama, $pemeran, $harga, $genre;

    public function __construct( $title = "judul", $nama = "nama", $cast = "pemeran", $price = 0, $status = "genre")
    {
        $this->judul = $title;
        $this->nama = $nama;
        $this->pemeran = $cast;
        $this->harga = $price;
        $this->genre = $status;
    }
    public function setJudul($judulbaru)
    {
        $this->judul = $judulbaru;
    }
    public function getJudul()
    {
        return $this->getNama($this->judul);
    }
    public function setNama($namabaru)
    {
        $this->nama = $namabaru;
    }
    public function getNama($nama)
    {
        return $nama;
    }
    public function setPemeran($pemeranbaru)
    {
        $this->pemeran = $pemeranbaru;
    }
    public function getPemeran()
    {
        return $this->pemeran;
    }
    public function setHarga($hargabaru)
    {
        $this->harga = $hargabaru;
    }
    public function getHarga()
    {
        return $this->harga;
    }
    public function setGenre($genrebaru)
    {
        $this->genre = $genrebaru;
    }
    public function getGenre()
    {
        return $this->genre;
    }

}

$komik = new Entertainment("Questism", "PTJ", "Kim Soohyun", 14, "Drama");

// $komik->setJudul("Judul Baru Baru");
echo $komik->getJudul();
echo "<br>";


// $nama = "Delshady";
// $nama = "Iza";




