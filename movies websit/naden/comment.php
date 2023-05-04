<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login_register";
$conn = "";
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (isset($_POST['post_comment'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql = "INSERT INTO feedback(name,email, problem)
		VALUES ('$name','$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="comment_style.php">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <form action="" method="post" class="form">
            <div class="text">
                <input type="text" class="name" name="name" placeholder="Enter your name" required>
                <br>
                <input type="text" class="email" name="email" style="
    margin-top: 10px" ; placeholder="Enter your email" required>
                <br>
            </div>
            <textarea name="message" cols="30" rows="10" class="message" placeholder="Comment" required></textarea>
            <br>
            <button type="submit" class="btn" name="post_comment">Post Comment</button>
        </form>
    </div>



    <?php
// ORDER BY timestamp DESC
    $sql = "SELECT * FROM feedback";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo "
            <div class='content'>
             <i class='material-icons' style='font-size:50px;float: left;color:grey '>account_circle</i> <h3>" . $row['name'] . " <span style='font-size:14px;color:#D3D3D3 '>" . $row['email'] . "<span> </h3>

                
                <p>" . $row['problem'] . " </p>
       
                <h2>Reply</h2>
                <p>" . $row['solve'] . "</p>

                </div>";
        }
    }


    ?>



    </form>

    </div>

</body>

</html>