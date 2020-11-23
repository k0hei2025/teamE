<?php
$g=$_POST['gender'];
$f=$_POST['ageFrom'];
$t=$_POST['ageTo'];
$r=$_POST['Region'];
$s=$_POST['search'];
if(isset($_post('Search')));
{
	$link=mysqli_connect('localhost','root','','vaibhav');
		$qry="select * from v3 where gender='female'";
      
		$q1=mysqli_query($link,$qry);
while($a=mysqli_fetch_array($q1))
{
echo $a[1];

}         
}
?>
