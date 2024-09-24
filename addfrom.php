<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>

    <?php
    if(isset($_POST['submit'])) {

        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $sql = "INSERT INTO users (name, email, age) VALUE ('$name', '$email', '$age')";
        $result = mysqli_query($conn, $sql);

        if($result == TRUE){
            header('location:/php_test_app/index.php');
         }
    }
    
    ?>
</head>
<body>
    <h1>ADD</h1>

    <form action="" method="POST">
        <label for="">name</label>
        <input type="text" name="name"><br>

        <label for="">email</label>
        <input type="text" name="email"><br>

        <label for="">age</label>
        <input type="text" name="age"><br>

        <input type="submit" name="submit"><br>
    </form>
</body>
</html>