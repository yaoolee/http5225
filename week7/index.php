<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontario Public Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1 class="display-4 mt-5 mb-5">All Schools</h1>
  <?php 
      require('connect.php');
      $query = 'SELECT * FROM schools';
      $schools = mysqli_query($connect, $query);
  ?>
<?php foreach($schools as $school): ?>
        <p><?php echo $school['School Name']; ?></p>

        <form action="update.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $school['id']; ?>">
            <input type="submit" name="edit" value="Edit">
        </form>
        <form action="delete.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $school['id']; ?>">
            <input type="submit" name="delete" value="Delete">
        </form>
        <hr>
    <?php endforeach; ?>
</body>
</html>