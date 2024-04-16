<html>
<head>
<title>Edit</title>
</head>
<body>
<?php
include("dbcon.php");
$idNum;
$campus = "";
$firstname = "";
$lastname = "";
$amountPaid;

if(isset($_GET["edit"])){
$id = $_GET["edit"];
$sql = "SELECT * FROM `registration` WHERE idNum = $id";
$result = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($result);
$idNum = $row["idNum"];
$campus = $row["campus"];
$firstname = $row["studFName"];
$lastname = $row["studLName"];
$amountPaid = $row["amountPaid"];
}

if(isset($_POST["submit"])){
$id = $_POST["idnumber"];
$campus = $_POST["campus"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$amountpaid = $_POST["amountpaid"];
$sql = "UPDATE `registration` SET `campus`='$campus',`studFName`='$firstname',`studLName`='$lastname',`amountPaid`= $amountpaid,`attended`='no' WHERE idNum = $id";	
$result = mysqli_query($con,$sql);
header("location:registration.php");	
}
	
?>
<form method = "POST" action = "edit.php">
<label>idnumber</label>
<input type = "number" name = "idnumber" value = <?php echo $idNum;?> readonly />
<br><br>
<label>campus</label>
<input type = "text" name = "campus" value = "<?php echo $campus;?>" />
<br><br>
<label>firstname</label>
<input type = "text" name = "firstname" value = "<?php echo $firstname;?>" />
<br><br>
<label>lastname</label>
<input type = "text" name = "lastname" value = "<?php echo $lastname;?>" />
<br><br>
<label>amountpaid</label>
<input type = "number" name = "amountpaid" value = <?php echo $amountPaid;?> />
<br><br>
<button type = "submit" name = "submit">Update</button>
</form>
<a href = "registration.php">Go back</a>



</body>

</html>