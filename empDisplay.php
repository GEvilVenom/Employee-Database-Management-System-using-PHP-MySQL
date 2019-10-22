
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
$sql =  "select * from Employee";

; 
 
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0)
{
	echo "<table border='2'><tr><th>Code</th><th>Name</th><th>Department</th><th>Designation</th><th>Delete</th></tr>";
	while($row = mysqli_fetch_assoc($result))
	{
		$del_link ="<a href=empDelete.php?id=".$row['Empcode'].">Delete</a>";
		echo "<tr><td>".$row["Empcode"]."</td><td> ".$row["Empname"]."</td><td> ".$row["Empdept"]."</td><td> ".$row["Empdes"]."</td><td> ".$del_link."</td></tr>";
	}
}
else
{
   echo "No record found";
}
mysqli_free_result($result);
mysqli_close($conn);
?>
	