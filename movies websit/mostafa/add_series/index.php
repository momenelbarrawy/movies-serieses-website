<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add series</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="buler"></div>
    <h1>Add Series</h1>
    <div class="add">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="name">Series Name:</label>
            <input id="name" type="text" name="name" placeholder="Enter series Name." required>
            <label for="type">type of series:</label>
            <select name="type">
                <option class="opt" hidden>choose</option>
                <option class="opt" value="action">Action</option>
                <option class="opt" value="romantic">Romantic</option>
                <option class="opt" value="comedy">Comedy</option>
                <option class="opt" value="science_fiction">Science fiction</option>
            </select>
            <label for="cover"> Series Cover:</label>
            <input id="cover" type="file" required name="cover" value="choose img" class="cover2" required>

            <label for="description">Description:</label>
            <textarea id="description" required name="description" rows="5" cols="50" placeholder="Enter describtion." required></textarea>

            <label for="trailer">Trailer:</label>
            <input id="ID" type="url" required  name="trailer" placeholder="Enter trailer's link." required>

            <label>How many episods?</label>
            <input id="ID" type="text" required  name="number" placeholder="enter number of episods." required>
            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>


<?php
$dbName = 'series';
$conn = mysqli_connect('localhost', 'root', '', $dbName);
if (!isset($conn)) {
    // echo"conn";}else{
    die("Connection failed" . mysqli_connect_error());
}

if (isset($_POST["submit"])) {

    $name =  $_POST["name"];
    $type =  $_POST["type"];
    $cover = file_get_contents($_FILES["cover"]["tmp_name"]);
    $cover_data = mysqli_real_escape_string($conn, $cover);
    $description = $_POST["description"];
    $trailer = $_POST["trailer"];
    $episodes =  (int)$_POST["number"];

    $sql = "INSERT INTO series (name,type,cover,description,trailer,episodes) VALUES ('$name','$type','$cover_data','$description','$trailer','$episodes')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $sql2 = "CREATE TABLE $name (
        number INT,
        name VARCHAR(255),
        episode LONGBLOB
      )";
        $result2 = mysqli_query($conn, $sql2);

        if ($result2) {
            echo "Series added successfully.";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
    } else {
        echo "Error inserting series: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>