<?php
	$link=mysqli_connect('localhost','root','','vaibhav');
		$qry="select * from v3 where gender='male'";
      
		$q1=mysqli_query($link,$qry);
while($a=mysqli_fetch_array($q1))
{
echo $a[5];
echo "<br>";
}

?>