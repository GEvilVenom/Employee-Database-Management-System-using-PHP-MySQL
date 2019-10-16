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
			{while($row=mysqli_fetch_assoc($result))
			{
				echo $row["EmpCode"]." ".$row["EmpName"]."<br>";
			}
			}
			else
			{
				echo "no records found!";
			}
				mysqli_close($conn);
		?>
	</body>
</html>