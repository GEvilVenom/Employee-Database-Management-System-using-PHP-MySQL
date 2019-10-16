<html>

	<body>
		<?php
			$server="localhost";
			$user="root";
			$pass="";
			$db="employee";
			$conn=mysqli_connect($server,$user,$pass,$db);
			if(!$conn)
			{
				die("Connection Failed".mysqli_connect_error());
			}
		
			$sql="SELECT * FROM employee";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{    echo "<table border='4'><tr><th>Code</th><th>Name</th></tr>";
				while($row=mysqli_fetch_assoc($result))
			{
				echo "<tr><td>".$row["EmpCode"]."</td><td> ".$row["EmpName"]."</td></tr>";
			}
			echo "</table>";
			}
			else
			{
				echo "no records";
			}
				mysqli_close($conn);
		?>
	</body>
</html>