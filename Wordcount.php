<?php
    // File : Wordcount.php
    class WordCount{

        //countWords digunakan untuk menghitung jumlah kata.
        public function countWords($sentence){

            //explode digunakan untuk memotong kalimat menjadi array kata.
            //count digunakan untuk menghitung jumlah kata dalam array.
            return count(explode(" ", $sentence));
        }
    }
?>