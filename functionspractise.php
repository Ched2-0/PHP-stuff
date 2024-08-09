<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Your First Name:</label><br>
        <input type="text" name="fname"><br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    function happy_birthday($first_name){
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday dear {$first_name}! <br>";
        echo"Happy Birthday to you!";
    }
    if(isset($_POST["confirm"])){

        if(isset($_POST["fname"])){
            happy_birthday($_POST["fname"]);
        }
        else{
            echo"Please input your name";
        }
    }  
?>