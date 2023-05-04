<?php

?>
<html>

<head>
    <title>Escape&Enjoy</title>
    <link rel="stylesheet" type="text/css" href="sign_up.css">

</head>

<body>

    <?php
    if (isset($_POST["submit"])) {
        $fullname = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $confirm = $_POST["confirm_password"];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();

        if (empty($fullname) || empty($email) ||  empty($password)) {
            array_push($errors, "All fields are requierd");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email not valid");
        }
        if (strlen($password) < 8) {
            array_push($errors, "password must be 8 characters at least");
        }
        if ($password !== $confirm) {
            array_push($errors, "it is not same password");
        }
        include("database.php");
        $sql = "SELECT * fROM users WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);
        $num_row = mysqli_num_rows($result);
        if ($num_row > 0) {
            array_push($errors, "this email already existed");
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo " <div class= 'alert_alert-danger'> <h3> $error <h3></div>";
            }
        } else {
            include("database.php");
            $fullname = $_POST["name"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $confirm = $_POST["confirm_password"];
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $errors = array();
            $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email','$hash')";
            $result = mysqli_query($conn, $sql);
            header("location: http://localhost/movies%20websit/naden/project.php");//
        }
    }


    ?>
    <div>
        <h3>Sign Up</h3>
    </div>
    <div class="container500">
        <form action="" method="post">
            <lable for="fullname">
                <input type="name" name="name" placeholder="Enter your Full Name" >
            </lable>
            <br>
            <label for="email">

                <input type="email" name="email" placeholder="Enter your Email" >
            </label>
            <br>
            <label for="passward">
                <input type="password" name="password" placeholder="Enter your Password">
            </label>
            <br>
            <lable for="confirm password">
                <input type="password" name="confirm_password" placeholder="Confirm your Password">
                <br>
                <label for="sign up">
                    <input type="submit" name="submit" value="Create Account">
                </label>

    </div>
    </form>
</body>

</html>