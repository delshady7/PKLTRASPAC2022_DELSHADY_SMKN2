<?php  

class Spinner {

  private $isi;

  public function __construct($kata) {
    $this->isi = $kata;
  }
  public function tampil() {
    echo json_encode($this->isi);
  }
  public function spin() {
  // return $this->isi[array_rand($this->isi)];
  // return mt_rand(0, 4);
  // return $this->isi[mt_rand(0,4)];
    shuffle($this->isi);
  }
}

$pick = new Spinner(["delshady", "oliv", "reva", "izanagi", "nadhifal"]);
$pick->spin();
echo "Hasil Terpilih:\n";
$pick->tampil();
echo "<br><br>";
echo '
<form action="spinner.php">
<button>Spin</button>
</form>';

?>