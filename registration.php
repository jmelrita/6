<html>
<head>
<title>Registration</title>
</head>
<body>
<center>
<br>
<a href = "register.php">Register a Student Here</a> | <a href = "menu.php">Back to Menu</a>
<table border = 1>
<tr>
<th>ID#</th>
<th>Name</th>
<th>Campus</th>
<th>Amount</th>
<th>Actions</th>
</tr>
<tbody>
<?php 
include("dbcon.php");
$sql = "SELECT * FROM `registration`";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>$row[idNum]</td>";
echo "<td>$row[campus]</td>";
echo "<td>$row[studFName] $row[studLName]</td>";
echo "<td>$row[amountPaid]</td>";
echo "<td><a href = 'registration.php?delete=$row[idNum]'>Delete</a>   <a href = 'edit.php?edit=$row[idNum]'>Edit</a></td>";
echo "</tr>";

}
if(isset($_GET["delete"])){
$id = $_GET["delete"];	
$sql= "DELETE FROM `registration` WHERE idNum = $id";
$result= mysqli_query($con,$sql);	
}

?>
</tbody>
</table>

</center>


</body>
</html>