<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');


if(!isset($_POST['kirim'])){
	exit('Ups jangan main-main lo');
}

$siswa = new Siswa();

if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.png')){
	exit('Error Upload File');
}

$data['input_name'] = $_POST['in_name'];
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['in_foto'] = 'img/'.$_POST['in_nis'].'png';

$siswa->updateSiswa($_POST['in_nis'], $data);

echo "Data siswa berhasil di update<br />";
echo "<a href='u_siswa.php?a=",$_POST['in_nis']."'>Detai Siswa</a>"

?>