<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In class Activity</title>
</head>
<body>
    <h1 style="text-align: center; font-size: 4rem;">In-Class Activity</h1>
    <p style="text-align: center; font-size: 2rem;">this is PHP: Week 3 & 4 </p>
<hr>
    <!-- learning php -->
   <p>Challenge 1 </p>
   <?php
   $breakfast = "Bananas";
   $lunch = "Fish";
   $dinner= "Steak";
   $timeHour = rand(1,23);


   if($timeHour >= 5 && $timeHour <= 9){
    echo 'the animals should have breakfast which is ' . $breakfast;
   }
   else if($timeHour >= 12 && $timeHour <= 2){
    echo 'the animals should have lunch which is ' . $lunch;
   }
   else if($timeHour >= 7 && $timeHour <= 9){
    echo 'the animals should have dinner which is ' . $dinner;
   } 
   else{
    echo 'the animals are not being fed';
   }
   ?>
   <p>Challenge 2</p>
   <?php
   $number = rand(1,100);
   
   if($number % 3===0 && $number % 5===0){
    echo 'the magic number is "FizzBuzz"' .$number;
   }
   else if($number % 3=== 0){
    echo 'the magic number is "Fizz"' .$number;
   }
   else if($number % 5 ===0){
    echo 'the magic number is "Buzz"' .$number;
   }
   else{
    echo $number;
   }
   ?>

<hr>
<p> loop </p>
<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
$url = "https://jsonplaceholder.typicode.com/users";
$data = file_get_contents($url);
return json_decode($data, true);
}
// Get the list of users
$users = getUsers();
for($i=0; $i< count($users); $i++){
    echo "<li>";
    echo "Id:" . htmlspecialchars($users[$i]['id']) ."<br>";
    echo "Name:" . htmlspecialchars($users[$i]['name']) ."<br>";
    echo "Email:" . htmlspecialchars($users[$i]['email']) ."<br>";
}
?>
</body>
</html>