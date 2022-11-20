<?php

	include("dbConfig.php");

	$query = mysql_query("Select count(id) From members Where position = 'Student'");
	$result = mysql_fetch_assoc($query);

	$query2 = mysql_query("Select count(bookId) From books");
	$result2 = mysql_fetch_assoc($query2);

	$query3 = mysql_query("Select count(id) From members Where position = 'Faculty'");
	$result3 = mysql_fetch_assoc($query3);

	$query4 = mysql_query("Select count(publisher) From books Group By publisher");
	$result4 = mysql_num_rows($query4);
	
	$query5 = mysql_query("Select sum(price) From books");
	$result5 = mysql_fetch_assoc($query5);

	$query6 = mysql_query("Select count(bookId) From books Where available = 1");
	$result6 = mysql_fetch_assoc($query6);

?>

<!DOCTYPE html>
<html>
	<head>
	<style>
	body {
	
  
    background-image: url("https://schoolbook.getmyuni.com/assets/images/rev_img/28097__9384/1481882476423702_249528518466723_1130202868_n.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center bottom;

    background-repeat: no-repeat;
    background-size: 1400px 500px;
}
	
	
	</style>
	</head>
	<body>
	<table border="1">
	<tr>
			<td><b>Total Student:<b> </td><td><b><?php echo $result['count(id)'];?></b></td>
			</tr>
			<tr>
<td>
			<b>Total Book :</b>
			</td><td><b><?php echo $result2['count(bookId)']; ?></b></td></tr>

			<tr><td><b>Total Faculty :</b></td><td><b><?php echo $result3['count(id)']?></b></td></tr>	

			<tr><td><b>Total Publishers:</b></td><td> <b><?php echo $result4; ?></b></td></tr>	


		<tr><td><b>Price of all books:</b></td><td><b> <?php echo $result5['sum(price)']; ?></b></td></tr>	

         <tr><td><b>Books in library:</b></td><td><b> <?php echo $result6['count(bookId)']; ?></b></td></tr>	
		 </center></table>

			
<h1 style="text-align:right;font-size:250%;color:Fuchsia;">Prashanth Vavineela</h1>
<h1 style="text-align:left;font-size:250%;color:#4633ff;">Raju pabba</h1><br>


		</div>
	</body>
</html>