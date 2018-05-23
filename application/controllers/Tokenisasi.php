<?php
Class Tokenisasi extends CI_Controller{
    
    
    function index(){
        $this->template->load('template','tokenisasi');
    }
    
    
    function proses(){
      $kata=$_GET['kata'];
      echo "Kalimat Awal : $kata <br>";
      $hasil= explode("-",$kata);
      $jumlah= count($hasil);
      echo "<br>";
      echo " jumlah = $jumlah";
      echo "<br/>";
      echo "<pre>" .print_r($hasil,TRUE). "</pre>";
      for($i=0;$i<count($hasil);$i++)
      {
          echo ("Kata Ke $i adalah :" .$hasil[$i]. "<br/>");
      }
      $str = str_replace("?"," ",$kata);
      
      $str = str_replace("."," ",$str);
      
      $str = str_replace(","," ",$str);
      
      $str = str_replace("!"," ",$str);
      echo "<br> Sesudah dihilangkan tanda baca: <br>";
      echo "<br>".$str."</br>";
    }
}


?>