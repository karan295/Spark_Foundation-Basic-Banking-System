 <?php
		  


$dbServername="localhost";
$dbUsername="id17018779_karan_db";
$dbPassword="JG1Oh+yU7cFq]FfU";
$dbName="id17018779_db1";

$con=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);



// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to mySQL: " . mysqli_connect_error();
  }


?>