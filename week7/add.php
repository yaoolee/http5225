<?php
if(isset($_POST['AddSchool'])){


$BoardName = $_POST['BoardName'];
$SchoolName = $_POST['SchoolName'];
$Email = $_POST['Email'];

require('connect.php');
$query= "INSERT INTO schools (`Board Name`, `School Name`, `Email` )
VALUES ('$BoardName', '$SchoolName', '$Email')";

$school = mysqli_query($connect, $query);

print_r($school);
if($school){
    header("Location: index.php");
    exit;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add school</title>
</head>
<body>
    <h1>add a new school</h1>
    <form action= "add.php" method ="POST">
<input type= "text" name= "BoardName" placeholder=" Board Name">
<input type= "text" name= "SchoolName" placeholder="School name">
<input type= "text" name= "Email" placeholder="Email">
<input type="submit" value="submit" name="AddSchool">

</form>
</body>
</html>