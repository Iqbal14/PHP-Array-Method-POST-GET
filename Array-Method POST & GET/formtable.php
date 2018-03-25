<?php

if(isset($_POST['simpan'])){

$nim = $_POST['nim'];

$nama= $_POST['nama'];

$telp= $_POST['telp'];
  
foreach($nim as $key => $value){

echo 'Nomor NIM = '.$nim[$key].' Nama = '.$nama[$key].' Telp = '.$telp[$key].'<br/>';

}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form table</title>
</head>
<body>
	<form action="formtable.php" name="frm" method="GET" >
		<input type="text" name="jumlah">
		<input type="submit" name="btnJumlah" value="proses">
	</form>

	<form action="formtable.php" method="POST" >
		<table width="400" border="0" cellpadding="0" cellspacing="0" >

			<tr>	

				<td width="100" height="30" valign="top" >No</td>
				<td width="100" height="30" valign="top" >NIM</td>
				<td width="100" height="30" valign="top" >Nama</td>
				<td width="100" height="30" valign="top" >Telp</td>
			</tr>

			<?php 
				if (isset($_GET['jumlah']) && $_GET['jumlah']>0) {
					$jumlah_form = $_GET['jumlah'];
				}else{
					$jumlah_form = 1;
				}

				for ($i=0; $i <$jumlah_form; $i++) { 
					# code...
				

			 ?>

			 <tr>
			 		<td height="30"><?php echo $i; ?></td>

					<td><input type="text" name="nim[]" size="30"></td>

					<td><input type="text" name="nama[]" size="30"></td>

					<td><input type="text" name="telp[]" size="30"></td>
			 </tr>
			 <?php 

			 	}

			  ?>
			  <tr>
			  	<td height="30" colspan="5" align="right"><input type="submit" name="simpan" value="simpan"></td>

			  </tr>

		</table>
	</form>
</body>
</html> 