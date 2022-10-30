<!DOCTYPE html>  
<html>  
    <head>   
	  <title>Task-2</title>  
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
	  <style>
		table{
			border: 1px solid #000000;
			border-collapse: collapse;
			margin:auto;
			font-size:18px;
		}
	
		td{
			border: 1px solid #000000;
			padding: 10px;
		}
	  </style>
	  </head>  
	<body>   
    <?php 
	echo "<table>"; 
	for ($i=1; $i<=6; $i++){
	echo "<tr>";
		for($j=1; $j <=5; $j++){
			echo "<td>";
			echo "" . $i . " * " . $j . " = " . $j * $i . ""; 
			echo "</td>";
		}
		echo "</tr>";
		}
	echo "</table>";
    ?>  
  </body>  
</html>  
	