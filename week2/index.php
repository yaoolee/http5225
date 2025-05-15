<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center; font-size: 4rem;">hello fellas!</h1>
    <p style="text-align: center; font-size: 2rem;">this is PHP </p>
<hr>
    <!-- learning php -->
   <?php 
   echo "<h2> whats up</h2>"
   ?>
   <hr>
   <!-- learning variables -->
    <?php
    $fname= "damon";
    $lname="salvatore";
    echo "my name is $fname, $lname";
    ?>
<hr>
    <!-- learning array-->
     <?php
     $fruits=array("apple", "mango", "cherry");
     echo $fruits[1];
     $person["name"]="willy wonka";
     $person["phone"]= 4517894321;

     echo $person["name"];
     echo $person["phone"];
     ?>
</body>
</html>