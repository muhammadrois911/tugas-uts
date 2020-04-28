<?php

$koneksi = mysqli_connect("localhost","root","","harga_hp");

// cek koneksi
if (mysqli_connect_errno()){
	echo "Koneksi databse gagal : " . mysqli_connet_errno();
}
?>