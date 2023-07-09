<?php  
	$start  = 1;
	$end = 10;
?>
<html>
 <head>
	<title>A divison table in PHP</title>
 </head>
 <body>
	<table border="1">
	<?php
		print("<tr>");
		print("<th></th>");
		for($count = $start; $count <= $end; $count++) 
		print("<th>".$count."</th>");
		print("</tr>");
		
		for($count = $start; $count <= $end; $count++) 
		{
		  print("<tr><th>".$count."</th>");
		  for($count2 = $start; $count2 <= $end; $count2++) 
		  {
			$result = $count / $count2; 
			printf("<td>%.3f</td>", $result);
		  }
		  print("</tr> \n");
		}	
	?>
	</table>
 </body>
</html>