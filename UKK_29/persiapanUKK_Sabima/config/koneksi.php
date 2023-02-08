<?php 
$koneksi = mysqli_connect("localhost","root","","ukk_sabima");

if ($koneksi) {
    echo "Tersambung";
} else{
 echo "Tidak Tersambung";   
}
?>