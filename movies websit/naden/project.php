<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/movies websit/naden/home/style.php">
    <link rel="stylesheet" type="text/css" href="/movies websit/naden/navbar/navstyle.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Escape&Enjoy</title>
    <?php include('nav.php'); ?>

</head>


<body>

    <div class="main">

        <div>
            <p> Providing best streaming experience for you is our role.</p>
        </div>
    </div>
    <?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "movies";
    $conn = "";
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if (!$conn) {
        echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
        echo 'Error Message: ' . mysqli_connect_error() . '<br>';
        exit;
    }
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "series";
    $conn2 = "";
    $conn2 = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if (!$conn2) {
        echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
        echo 'Error Message: ' . mysqli_connect_error() . '<br>';
        exit;
    }
    ?>
    <div class="container">
        <div class="content">
            <h1 class="showcase-heading">Top Rated Movies </h1>
            <?php

            $sql = "SELECT * FROM movies";
            // $sql = "SELECT * FROM test";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo  "<li class='row'>
                    <div class='column'>
                        " ?>
                    <a href="/movies websit/mina/display_movie/index.php?id=<?php echo $row["id"]; ?>">
                        <?php
                        echo "<img class = 'card' src='data:image/jpeg;base64," . base64_encode($row['cover']) . "' />
                    <div class='text1'>
                                <h5>" . $row['name'] . "</h5>"; ?>
                    </a>
            <?php
                    echo "</div>
                     </li>";
                }
            } else {
                echo "No image found.";
            }

            ?>
        </div>

        <div class="content">
            <h1 class="showcase-heading">Top Rated Series </h1>
            <?php

            // $sql = "SELECT Image,movie_name FROM movies";
            $sql = "SELECT * FROM series";

            $result = mysqli_query($conn2, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row2 = mysqli_fetch_assoc($result)) {
            ?>
                    <a href="/movies websit/mostafa/display seies info/indexx.php?id=<?php echo $row2["id"] ?>">
                        <?php
                        echo  "<li class='row'>
            <div class='column'>
            <img class = 'card' src='data:image/jpeg;base64," . base64_encode($row2['cover']) . "' />
            <div class='text1'>
                        <h5>" . $row2['name'] . "</h5>
            
            </div>
             </li>";
                        ?>
                    </a>
            <?php
                }
            } else {
                echo "No image found.";
            }

            ?>
        </div>
    </div>
</body>

<?php include("footer.php"); ?>




</html>