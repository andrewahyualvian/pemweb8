<?php
    $konek = mysqli_connect("localhost","root","","kelasb_4122008");
    // ->>>> "server","user","password","nama database"
    
if(!$konek){
    die("Gagal terhubung dengan database: ". mysqli_connect_error());
}
?>

