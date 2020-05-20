<?php
$strconn=mysqli_connect("localhost","id13779190_muhuza","9MLy$<{FIQcZ}cP=","id13779190_admin");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
?>
<?php echo '<pre>';?>
<h1>Index</h1>
<ul>
	<?php
		$query = "SELECT Title FROM chapter";
		$result = mysqli_query($strconn,$query);
		while($row = mysqli_fetch_array($result))
		{
			echo '<li><a href="">Chapter :'.$row[0].'</a><br></li>';
		}
	?>
</ul>
<?php echo '</pre>';?>