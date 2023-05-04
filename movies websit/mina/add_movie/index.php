<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design.css">
    <title>Films</title>
</head>

<body>
    <div class="form">
        <div class="addmovie">
            <h2 style="font-weight: bold;"> Add Movie</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="name">
                    <label style="color: rgb(151, 52, 144); font-weight: bold;">NAME :</label>
                    <br>
                    <input type="text" placeholder="input name of movie" name="name" class="name1" required>

                </div>
                <div class="type">
                    <label style="color: rgb(172, 61, 148); font-weight: bold;">Type Of Movie :</label>
                    <br>
                    <input list="type of movie" name="type" class="type1" placeholder="Entre the type of movie" required>
                </div>
                <div class="description">
                    <label style="color: rgb(151, 52, 135); font-weight: bold;">description :</label>
                    <br>
                    <input type="text" placeholder="Entre a description of movie" name="description" class="description1" required>
                </div>
                <div class="trailer">
                    <label style="color: rgb(174, 61, 160); font-weight: bold;">Trailer :</label>
                    <br>
                    <input type="text" placeholder="entre a trailer of movie" name="trailer" class="trailer1" required>
                </div>
                <div class="cover">
                    <label style="color: rgb(154, 37, 126); font-weight: bold;">Cover :</label>
                    <br>
                    <input type="file" placeholder="entre a cover of movie" name="cover" class="cover1" required>
                </div>
                <div class="vedio">
                    <label style="color: rgb(147, 35, 126); font-weight: bold;">Vedio :</label>
                    <br>
                    <input type="file" placeholder="Entre the movie" name="vedio" class="vedio1" required>
                </div>
                <div class="send">
                    <input type="submit" name="send" value="Send" style="font-weight: bold;">
                </div>
                <div class="reset">
                    <!-- <input type="Reset" style="font-weight: bold;"> -->
                    <input type="Reset" style="font-weight: bold;"></input>
                </div>

            </form>

        </div>
    </div>
</body>

</html>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'movies');
if (!isset($conn)) {
    //     echo "man be man";
    // } else {
    die("Connection failed" . mysqli_connect_error());
}



if (isset($_POST["send"])) {
    $name = $_POST["name"];
    $type = $_POST["type"];
    $description = $_POST["description"];

    $trailer = $_POST["trailer"];

    $cover = mysqli_real_escape_string($conn, file_get_contents($_FILES["cover"]["tmp_name"]));

    $vedio = mysqli_real_escape_string($conn,file_get_contents($_FILES["vedio"]["tmp_name"]));
    $sql = "INSERT INTO movies (name,type,description,trailer,cover,vedio) VALUES ('$name','$type','$description','$trailer','$cover','$vedio')";
    $query = mysqli_query($conn,$sql);

    if ($query) {
        echo "Done";
    } else {
        echo "Wrong";
    }
}

?>