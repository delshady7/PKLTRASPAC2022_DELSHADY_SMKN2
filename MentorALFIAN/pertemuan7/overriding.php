<?php 

class Produk {
    public  $judul, 
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0 )
    {
        $this->judul = $title;
        $this->penulis = $writer;
        $this->penerbit = $publisher;
        $this->harga = $price;
    }

    public function getLabel()
    {
        return "$this->judul by $this->penulis";
    }

    public function getIngfo()
    {
        $info = "{$this->getLabel()} | Published by {$this->penerbit} ({$this->harga})";
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

$produk1 = new novel("Hold On It's Hurt", "lalalafindyou", "Akad Publisher", "Rp. 320.000-,", 600);
$produk2 = new komik("Seasons of Blossom", "NEMONE", "Webtoon", "Free", 120);
$produk3 = new komik("Questism", "PTJ", "Webtoon", "14 Coin/Episode", 66);

echo $produk1->getIngfo();
echo "<br>";
echo "<br>";
echo $produk2->getIngfo();
echo "<br>";
echo "<br>";
echo $produk3->getIngfo();
echo "<br>";
echo "<br>";

// echo "Alternative Universe: ";
// echo $produk1->getLabel();
// echo "<br>";
// echo "Komik: " ;
// echo $produk2->getLabel();
// echo "<br>";
// $ingfoproduk = new Ingfo();
// echo $ingfoproduk->cetak($produk1);
