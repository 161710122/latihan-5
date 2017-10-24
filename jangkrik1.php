<?php
require_once ('jangkrik.php');
$jangkrik = new jangkrik ('krik krik ','coklat','6') ;
echo "<center> =============================<br> <center> Jangkrik </center>============================= <br>" ;
echo " Suara = ".$jangkrik->get_suara()."<br>" ;
echo " Warna = ".$jangkrik->get_warna()."<br>" ;
echo " Kaki = ".$jangkrik->get_kaki()."<br>" ;

?>