<?php 

// class ContohStatic 
// {
//     public static $angka = 2;

//     public static function halo()
//     {
//         
//     }
    
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::getAngka();

// class Contoh 
// {
//     public static $angka = 1;

//     public function halo()
//     {
//        return "Halo " . self::$angka++ . " Kali. <br>";
//     }
// }

// $obj = new Contoh;

// echo $obj->halo();
// echo $obj->halo();
// echo $obj->halo();

// echo "<hr>";

// $obj2 = new Contoh;

// echo $obj2->halo();
// echo $obj2->halo();
// echo $obj2->halo();

class Test{

    private static $angka;

   public static function setAngka( $value ){
     self::$angka = $value; 
    }

   public static function getAngka(){
     return self::$angka++;
   }

   public static function tampil($angka){
       self::setAngka($angka);
   }

   public static function jalan(){
       $test = self::getAngka(); 
       return "Ini adalah Angka: " . $test ."<br>";
   }
}

Test::tampil(7);
Test::setAngka(7);
echo Test::jalan();
echo Test::jalan();
echo Test::jalan();


 ?>