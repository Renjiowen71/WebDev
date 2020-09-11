<!DOCTYPE html> 
<html> 
<title>Mahasiswa</title> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<body> 
 
<div class="w3-container">   
<h2>Data Mahasiswa</h2>   
 
	<table class="w3-table-all">     
	<thead>       
	<tr class="w3-red">         
	<th>NRP</th>         
	<th>Nama</th>         
	<th>Tahun Angkatan</th>         
	<th>Fakultas</th>
	<th>Jurusan</th>
	
	</tr>     
	</thead>              
		
		<?php       
		include 'koneksi.php'; 
 
		$sql = "SELECT NRP, Nama, TahunAngkatan, Fakultas, Jurusan FROM mahasiswa";       
		$result = $conn->query($sql); 
 
		if ($result->num_rows > 0) {           // output data of each row           
			while($row = $result->fetch_assoc()) {               
				echo "<tr>";               
				echo "<td>" . $row["NRP"] . "</td>";               
				echo "<td>" . $row["Nama"] . "</td>";               
				echo "<td>" . $row["TahunAngkatan"] . "</td>";               
				echo "<td>" . $row["Fakultas"] . "</td>";
				echo "<td>" . $row["Jurusan"] . "</td>";   
				echo "</tr>";           
			}       
		} 
		else {           
		echo "0 results";       
		} 
 
		$conn->close();       
		?>             
	</table>
</div> 
 
</body> 
</html>