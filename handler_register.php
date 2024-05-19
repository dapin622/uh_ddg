<?php
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pasword = $_POST['pasword'];


$koneksi = new mysqli('localhost', 'root','','db_pendaftaran');
if($koneksi){
    echo $koneksi->error;
}else{
    echo "koneksi gagal";
}

$insert = $koneksi->query("INSERT INTO pendaftaran
(id, nama, email, pasword)
values
($id,'$nama','$email','$pasword')
");

if($insert){
    echo "insert data berhasil";

}else{
    echo "insert data gagal";
}

?>
