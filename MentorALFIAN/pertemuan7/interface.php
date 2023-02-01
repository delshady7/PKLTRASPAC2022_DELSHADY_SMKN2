<?php 

interface InfoProduk{
    public function getInfoProduk();
}

Abstract class Produk {

    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;
            
    public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0 )
    {
        $this->judul = $title;
        $this->penulis = $writer;
        $this->penerbit = $publisher;
        $this->harga = $price;
    }
    public function setJudul($newtitle)
    {
        $this->judul = $newtitle;
    }
    public function getJudul()
    {
        return $this->judul;
    }
    public function setPenulis($newwriter)
    {
        $this->penulis = $newwriter;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($newpublisher)
    {
        $this->penerbit = $newpublisher;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setHarga($newprice)
    {
        $this->harga = $newprice;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function setDiskon($discount)
    {
        $this->diskon = $discount;
    }
    public function getDiskon()
    {
        return $this->diskon;
    }
    public function getLabel()
    {
        return "$this->judul by $this->penulis";
    }
    Abstract public function getInfo();

    
}

class novel extends Produk implements InfoProduk {
    public $halaman;

    public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0, $pages = 0)
    {
        parent::__construct($title, $writer, $publisher, $price);
        $this->halaman = $pages;
    }
    public function getInfo()
    {
        $info = "{$this->getLabel()} | Published by {$this->penerbit} (Rp.{$this->harga},-)";
        return $info;
    }
    public function getInfoProduk()
    {
        $info = "Novel: " . $this->getInfo() ." - {$this->halaman} Halaman.";
        return $info;
    }
}
class komik extends Produk implements InfoProduk{
    public $panel;

    public function __construct($title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0, $episode = 0)
    {
        parent::__construct($title, $writer, $publisher, $price);
        $this->panel = $episode;
    }
    public function getInfo()
    {
        $info = "{$this->getLabel()} | Published by {$this->penerbit} (Rp.{$this->harga},-)";
        return $info;
    }
    public function getInfoProduk()
    {
        $info = "Komik : " . $this->getInfo() ." ~ {$this->panel} Episode.";
        return $info;
    }  
}
class Ingfo {

    public $daftarProduk = [];

    public function tambahProduk( Produk $produk )
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $info = "DAFTAR PRODUK: <br>";

        foreach ($this->daftarProduk as $daftar) {
            $info .= "- {$daftar->getInfoProduk()} <br>";
        }

        return $info;
    }
}
$produk1 = new novel("Hold On It's Hurt", "lalalafindyou", "Akad Publisher",320000, 400);
$produk2 = new komik("Seasons of Blossom", "NEMONE", "Webtoon", 7000, 121);
$produk3 = new komik("Questism", "PTJ", "Webtoon", 16000, 68);
$produk4 = new novel("Titik Nadir", "Windy Joana", "Lovrinz Publisher", 99000, 276);

$cetakDaftar = new Ingfo();
$cetakDaftar->tambahProduk($produk1);
$cetakDaftar->tambahProduk($produk2);
$cetakDaftar->tambahProduk($produk3);
$cetakDaftar->tambahProduk($produk4);

echo $cetakDaftar->cetak();







