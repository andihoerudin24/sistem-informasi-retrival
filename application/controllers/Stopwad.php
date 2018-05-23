<?php

Class Stopwad extends CI_Controller {

    function index() {

        $this->template->load('template', 'stopwad');
    }

    function proses() {
        $kalimat = $_GET['kalimat'];
        echo "$kalimat";
        echo "<br><br>";
        echo "sesudah di ubah :";
        $str = str_replace(",", " ", $kalimat);
        $str = str_replace("-", " ", $str);
        $str = str_replace("?", " ", $str);
        $str = str_replace("!", " ", $str);
        $str = str_replace("/", " ", $str);
        $str = str_replace("$", " ", $str);
        $str = str_replace(".", " ", $str);
        echo "<br>";
        $string= strtolower($str);
        echo "<br>";
        
        $stopword=array("ketika","akan","where","dan","atau","kemudian","di");
        foreach ($stopword as &$word){
            $word = '/\b'.preg_quote($word,'/').'\b/';
        }
        $replace =preg_replace($stopword, '', $string);
        echo "penghilang tanda baca :<br>";
        echo "$string";
        echo "<br><br>";
        echo "penghilang stopword : <br>";
        echo "$replace";
    }

}

?>