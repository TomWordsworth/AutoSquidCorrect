<html>
	<meta http-equiv="refresh" content="0; url=SQUID-Fix.php"> 
	<?php
		if(file_exists("upload/eicoData.txt")){
			shell_exec('C:\Python33\python.exe cancelEico.py');
		}
	?>
</html>