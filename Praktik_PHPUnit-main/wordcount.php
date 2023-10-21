<?php
class wordcount{
    public function countWords($sentence){

        //  memecah string ke dalam array, dengan pemisah yang telah diberikan.
        //  menghitung jumlah elemen dalam array. Dalam kasus ini, kita menghitung jumlah kata yang ada dalam array hasil dari explode.
        return count(explode(" ",$sentence));

        // dengan menggunakan explode(" ", $sentence) untuk memecah kalimat atau string menjadi kata-kata,  kemudian dengan count, lalu menghitung jumlah kata tersebut dan mengembalikan jumlahnya sebagai hasil. 
        // lalu method countWords akan mengembalikan jumlah kata dalam string
    }
}
?>
