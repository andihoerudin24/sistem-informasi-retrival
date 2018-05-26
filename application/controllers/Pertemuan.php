<?php
Class Pertemuan extends CI_Controller{
    
   function index(){
       
       
       $this->template->load('template','pertemuan');
   } 
   
   
   function proses(){
       $kalimat=$_GET['kalimatt'];
       
   }
    
    
}
?>