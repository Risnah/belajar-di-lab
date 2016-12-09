<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
$id = $_GET['a'];
if(!is_numeric($id)){
	exit('Ups jangan main-main lo');
}

$siswa = new Siswa();
$data = $siswa->readSiswa($id);

if(empty($data)){
	exit('Masukin data yang bener dong');
}
$dt = $data[0];

//print_r($dt);
//print '<pre>';
//print_r($data);
//print '<pre>';
?>
<table border='1'>
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>
		
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['nationality']?></td>
		
	</tr>
	<?php endforeach?>
</table>
<br />
<a href="siswa.php">Kembali</a>