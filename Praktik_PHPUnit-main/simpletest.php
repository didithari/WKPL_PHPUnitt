<?php
// Menggunakan namespace PHPUnit dengan benar
use PHPUnit\Framework\TestCase; 

 // Mengimport kelas "wordcount" pada file "wordcount.php"
 require_once "wordcount.php";

 // Mendefinisikan kelas "SimpleTest" yang merupakan tes unit dan turunan dari TestCase yang ada di framework
 class SimpleTest extends TestCase {

   // Membuat method "testcountwords"
   public function testcountwords() { 

    //  inisialisasi objek dari kelas "wordcount"
$wcc = new wordcount(); 

        // Menyiapkan  kalimat untuk di uji coba
        $testsentence = "my name is Joko"; 

        // Memanggil method "Wordcount" dari objek/variable $wcc
        $wordcount = $wcc->countWords($testsentence); 

       //  Memeriksa apakah jumlah kata yang akan dihasilkan sama dengan yang diharapkan yaitu 4
       $this->assertEquals(4, $wordcount); 
    }
}
?>
