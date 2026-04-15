<?php
$conn = mysqli_connect("localhost","root","","db_resto");
if(!$conn){
    die("Koneksi database gagal");
}
