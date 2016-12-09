<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa = new Siswa();
$data =$siswa->readAllSiswa();
//print '<pre>';
//print_r($data);
//print '<pre>';

?>
<table border='1' bgcolor='antiquewhite'>
	<tr>
		<th bgcolor='pink' >ID SISWA</th>
		<th bgcolor='pink' >FULL NAME</th>
		<th bgcolor='pink' >EMAIL</th>
		<th bgcolor='pink' >NATIONALITY</th>
		<th bgcolor='pink' > DETAIL </th>
		<th bgcolor='pink' > UPDATE </th>
		<th bgcolor='pink' > DELETE </th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td align='center'><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['nationality']?></td>
		<td align='center'> 
			<a href="dsiswa.php?a=<?php echo $a['id_siswa']?>">Detail</a></td>
		<td align='center'> 
			<a href="u_siswa.php?a=<?php echo $a['id_siswa']?>">Update</a></td>
		<td align='center'>
			<a href="delsiswa.php?a=<?php echo $a['id_siswa']?>">Delete</a></td>
		
	</tr>
	<?php endforeach?>
</table>
