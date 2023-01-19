<?php 

class Produk {

    private $judul, $penulis, $penerbit, $harga, $diskon = 0;
            
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

    public function getIngfo()
    {
        $info = "{$this->getLabel()} | Published by {$this->penerbit} (Rp.{$this->harga},-)";
        return $info;
    }
}

class novel extends Produk {
    public $halaman;

    public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0, $pages = 0)
    {
        parent::__construct($title, $writer, $publisher, $price);
        $this->halaman = $pages;
    }

    public function getIngfo()
    {
        $info = "Novel: " . parent::getIngfo() ." - {$this->halaman} Halaman.";
        return $info;
    }
}
class komik extends Produk {
    public $panel;

    public function __construct($title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0, $episode = 0)
    {
        parent::__construct($title, $writer, $publisher, $price);
        $this->panel = $episode;
    }
    public function getIngfo()
    {
        $info = "Komik : " . parent::getIngfo() ." ~ {$this->panel} Episode.";
        return $info;
    }  
}
class Ingfo {
    public function cetak(Produk $produk)
    {
        $info = "{$produk->getLabel()} | Published by {$produk->penerbit} (Rp. {$produk->harga})";
        return $info;
    }
}

$produk1 = new novel("Hold On It's Hurt", "lalalafindyou", "Akad Publisher",320000, 600);
$produk2 = new komik("Seasons of Blossom", "NEMONE", "Webtoon", 0, 120);
$produk3 = new komik("Questism", "PTJ", "Webtoon", 16000, 66);

echo $produk1->getIngfo();
echo "<br>";
echo "<br>";
echo $produk2->getIngfo();
echo "<br>";
echo "<br>";
echo $produk3->getIngfo();
echo "<br>";
echo "<br>";
echo "<hr>";

$produk1->setDiskon(70);
echo $produk1->getHarga();
echo "<br>";
echo "<hr>";

echo $produk1->getPenulis();






