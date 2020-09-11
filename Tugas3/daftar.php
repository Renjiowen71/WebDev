<!DOCTYPE html> 
<html> 
<title>Mahasiswa</title> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<body> 
 
<br> 
 
<div class="w3-row">   
	<div class="w3-col s4">     
		<br>   
	</div>   
	<div class="w3-col s4">        
		<div class="w3-card-4">       
			<div class="w3-container w3-brown">          
 
        <?php 
 
        include 'koneksi.php';          
		$NRP = $_POST["NRP"]; 		 		 
		$NAMA = $_POST["Nama"];          
		$TAHUNANGKATAN = $_POST["TahunAngkatan"];          
		$FAKULTAS = $_POST["Fakultas"];
		$JURUSAN = $_POST["Jurusan"];	
 
        $sql = "INSERT INTO `mahasiswa` (`NRP`, `Nama`, `TahunAngkatan`, `Fakultas`, `Jurusan`) VALUES ('$NRP','$NAMA', '$TAHUNANGKATAN', '$FAKULTAS','$JURUSAN')";          
		$result = array();
 
        if ($conn->query($sql) === TRUE) {           
			echo "<h2>New record created successfully</h2>";          }         			
		else {           
			echo "<h2>Error: " . $sql . "<br>" . $conn->error . "</h2>";          } 
 
        $conn->close(); 
 
         ?>                           
			</div>    
		</div>        
	</div>   
	<div class="w3-col s4">     
	<br>   
	</div> 
</div> 
 
 
</body> 
</html> 
 
 