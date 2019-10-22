
<?php
$server="localhost";
$user="root";
$pass='';
$db="emp";
$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn)
{
				die("Connection Failed".mysqli_connect_error());
}

$sql =  "delete from EMPLOYEE where Empcode='$_GET[id]'";
$result = mysqli_query($conn, $sql);
if ($result)
	header("refresh:1; url=empDisplay.php");
else
	echo "Not deleted";
?>
