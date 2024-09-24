<?php include 'connect.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
</head>
<body>

<h1>CRUD</h1>
    <table border="2">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>การจัดการ</th>
            <a href="addfrom.php">Add</a><br>
        </tr>

        <?php
            $search = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search = $_POST['search'];
            }
            $sql = "SELECT * FROM users WHERE name LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);

            if($result->num_rows > 0){
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$count++."</td>";

                    echo "<td>". $row["name"] ."</td>";
                    echo "<td>". $row["email"] ."</td>";
                    echo "<td>". $row["age"] ."</td>";
                    echo "<td>" . '<a href="edit.php/?id='.$row["id"].'">Edit</a>'.  '   ' . '<a href="delete.php/?id='.$row["id"].'">Delete</a>'."</td>";
                   
                    echo "</tr>";
                }
            }
        ?>
        <form action="" method="post">
                    <input type="text" name="search">
                    <input type="submit" name="submit" value="Search">
                </form>
    </table>
</body>
</html>