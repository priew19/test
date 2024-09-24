<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php
    if(isset($_POST['submit'])) {

        $id = $_GET["id"];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $sql = "UPDATE users SET name='$name',email='$email', age='$age' WHERE id='$id'";

        $result = mysqli_query($conn, $sql);

        if($result == TRUE){
            header('location:/php_test_app/index.php');
         }
    }

    $id = $_GET["id"];
    $sql_fetch = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql_fetch);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found.";
        exit();
    }
    
    ?>
</head>
<body>
    <h1>EDIT</h1>

    <form action="" method="POST">
        <label for="">name</label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>"><br>

        <label for="">email</label>
        <input type="text" name="email" value="<?php echo $product['email']; ?>"><br>

        <label for="">age</label>
        <input type="text" name="age" value="<?php echo $product['age']; ?>"><br>

        <input type="submit" name="submit"><br>
    </form>
</body>
</html>