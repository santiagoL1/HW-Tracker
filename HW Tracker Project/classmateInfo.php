<!DOCTYPE html>

<!-- Homework Planner -->
<!-- By: Santiago Lizarraga and Grey Lawson-->
<html>
   <head>
      <meta charset="utf-8">
      <title>Classmates</title>

      <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
      <link href="style.css" rel="stylesheet" type="text/CSS">
      <script src="homeworkTracking.js"></script>

   </head>
   <body>
       <p>Welcome <?php print($_POST['fullname']); ?>! Your classmates and their info is listed below (if empty, there are no current students enrolled in your class):</p>

<p>Your profile: <br> 
You name: <?php print($_POST['fullname']); ?><br>
Your graduation year is: <?php print($_POST['gradYear']); ?> <br> 
Your email is: <?php print($_POST['email']); ?> <br> 
</p>



<?php 
include("connectToDB.inc");




function insertDataToDB()
{
	$dataBase = connectDB();
	$st1 = "INSERT INTO students(fullname,txtList,CRN,teacherName,gradYear,email)";
	$st2 = "VALUES('";
	$st3 = mysqli_real_escape_string($dataBase, $_POST['fullname'])."','";
	$st4 = mysqli_real_escape_string($dataBase, $_POST['txtList'])."','";
    $st5 = mysqli_real_escape_string($dataBase, $_POST['CRN'])."','";
	$st6 = mysqli_real_escape_string($dataBase, $_POST['teacherName'])."','";
	$st7 = mysqli_real_escape_string($dataBase, $_POST['gradYear'])."','";
	$st8 = mysqli_real_escape_string($dataBase, $_POST['email'])."','";
	$st99 = "');";

  	$query1 = $st1.$st2.$st3.$st4.$st5.$st6.$st7.$st8.$st99;

	$result1 = mysqli_query($dataBase, $query1) or die('Query failed: ' . mysqli_error($dataBase));
	


mysql_close($dataBase);
}
       
function displayClassmates($txtList,$CRN,$teacherName,$fullname,$email,$gradYear){
    $database = connectDB();
    
    $query1 = 'SELECT * FROM students WHERE txtList LIKE '$_POST['txtList']'' && 'SELECT * FROM students WHERE CRN LIKE '$_POST['CRN']''&& 'SELECT * FROM students WHERE teacherName LIKE '$_POST['txtList']'';
    $result1 = mysqli_query($dataBase, $query1) or die('Query failed: ' . mysqli_error($dataBase));
	
	echo "<br>All matching students:<br>";
	
	echo "<table border='1'>";
	echo "<tr> <td>fullname</td> <td>email</td> <td>gradYear</td></tr>";
	while ($line1 = mysqli_fetch_array($result1, MYSQL_ASSOC))
		{extract($line1);
			echo "<tr> <td>$fullname</td> <td>$email</td> <td>$gradYear</td></tr>";
		}
    echo "</table>";
    mysqli_close($dataBase);
}


displayClassmates();

insertDataToDB();


?>



</body>
</html>