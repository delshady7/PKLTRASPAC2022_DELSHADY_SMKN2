<?php 

class Entertainment
{
    private $judul, $pemeran, $harga, $genre;

    public function __construct( $title = "judul", $cast = "pemeran", $price = 0, $status = "genre")
    {
        $this->judul = $title;
        $this->pemeran = $cast;
        $this->harga = $price;
        $this->genre = $status;
    }
    //Magic Method __get
    public function __get($property)
    {
        if (property_exists($this, $property)){
            return $this->$property;
        }
    }

    // public function setJudul($judulbaru)
    // {
    //     $this->judul = $judulbaru;
    // }
    // public function getJudul()
    // {
    //     return $this->judul;
    // }
    // public function setPemeran($pemeranbaru)
    // {
    //     $this->pemeran = $pemeranbaru;
    // }
    // public function getPemeran()
    // {
    //     return $this->pemeran;
    // }
    // public function setHarga($hargabaru)
    // {
    //     $this->harga = $hargabaru;
    // }
    // public function getHarga()
    // {
    //     return $this->harga;
    // }
    // public function setGenre($genrebaru)
    // {
    //     $this->genre = $genrebaru;
    // }
    // public function getGenre()
    // {
    //     return $this->genre;
    // }

}

$komik = new Entertainment("Questism", "Kim Soohyun", 14, "Drama");

echo $komik->__get('judul');
echo "<br>";




