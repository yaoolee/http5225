<?php
require('connect.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (isset($_POST['DeleteSchool'])) {
    $schoolId = intval($_POST['id']); 
    $query = "DELETE FROM schools WHERE id = $schoolId";
    $deleteResult = mysqli_query($connect, $query);

    if ($deleteResult) {
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
    <title>delete school</title>
</head>
<body>
    <h1>delete school</h1>
    <form action= "delete.php" method ="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="submit" value="Delete" name="DeleteSchool">

</form>
</body>
</html>