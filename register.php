<html>
<head>
<title>Register</title>
</head>
<body>
<form method = "POST" action = "register.php">
<label>idnumber</label>
<input type = "number" name = "idnumber"/>
<br><br>
<label>campus</label>
<input type = "text" name = "campus"/>
<br><br>
<label>firstname</label>
<input type = "text" name = "firstname"/>
<br><br>
<label>lastname</label>
<input type = "text" name = "lastname"/>
<br><br>
<label>amountpaid</label>
<input type = "number" name = "amountpaid"/>
<br><br>
<button type = "submit" name = "submit">Submit</button>
<a href = "registration.php">Go back</a>
<?php
include("dbcon.php");
if(isset($_POST["submit"])){
$id = $_POST["idnumber"];
$campus = $_POST["campus"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$amountpaid = $_POST["amountpaid"];
$sql = "INSERT INTO `registration`(`idNum`, `campus`, `studFName`, `studLName`, `amountPaid`, `attended`) VALUES ($id,'$campus','$firstname','$lastname',$amountpaid,'no')";
$result = mysqli_query($con,$sql);
}


?>
</form>
</body>
</html>