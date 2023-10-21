<?php
    // path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php filename.php
    // Butuh framework php
    use PHPUnit\Framework\TestCase;

    //Class yang mau di test
    require_once "Wordcount.php";

    //Class untuk run Testing
    class SimpleTest extends TestCase{
        public function testCountWords(){
            
            //Kita pakai class yang mau kita test
            $wc = new WordCount();

             //Membuat kalimat uji
            $TestSentence = "My name is Tegar"; // 4 kata

            //countWords digunakan untuk menghitung jumlah kata dalam kalimat
            $WordCount = $wc->countWords($TestSentence);

            //Kita assert equal, ekspektasi nya harus 4, jika benar berarti Worcount berfungsi  dengan baik
            $this->assertEquals(4, $WordCount);
        }
    }
?>