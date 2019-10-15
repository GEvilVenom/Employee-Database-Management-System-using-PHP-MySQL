<?php
$server="C:\xampp\htdocs";
$user="mca";
$pass="passwd";
$dbname="employee";
$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn)
{
 die("Coneection failed ".mysqli_connect_error());
}
$ecode=$_POST['txt1'];
$ename=$_POST['txt2'];
$sal="Inert into employee(EmpCode,EmpName) values($ecode,$ename)";
if(myqli_query($conn,$sal)
{
 echo"Record added succefully";
}
else echo"ERROR";
mysqli_close($conn);
?>