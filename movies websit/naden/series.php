    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="movies_style.php">

    <?php include('nav.php'); ?>
</head>


<body>
    <div class="form1">


        <form action="movie.php" method="post">
            <h1 for='genre'>Types of series</h1>
            <label for="my-checkbox"><input type="checkbox" name="genres[]" value="comedy"> Comedy</label>

            <label for="my-checkbox"><input type="checkbox" name="genres[]" value="romance"> Romance</label>

            <label for="my-checkbox"> <input type="checkbox" name="genres[]" value="fantacy">Fantacy</label>

            <label for="my-checkbox"> <input type="checkbox" name="genres[]" value="action">Action</label>

            <label for="my-checkbox"> <input type="checkbox" name="genres[]" value="drama">Drama</label>

            <label for="my-checkbox"> <input type="checkbox" name="genres[]" value="horror">Horror</label>

            <label for="my-checkbox"> <input type="checkbox" name="genres[]" value="mystry"> Mystery</label>

            <input type="submit" value="Filter">
        </form>
    </div>
</body>


<?php
$mysqli = new mysqli("localhost", "root", "", "series");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $genres = isset($_POST['genres']) ? $_POST['genres'] : array();

    $sql = "SELECT * FROM movies";
    if (!empty($genres)) {
        $sql .= " WHERE genre IN ('" . implode("','", $genres) . "')";
    }
} else {

    $sql = "SELECT * FROM series";
}
$result = $mysqli->query($sql);


while ($row = $result->fetch_assoc()) {
    echo  "<li class='row'>
            <div class='column'>
                "?>
            <a href="/movies websit/mostafa/display seies info/indexx.php?id=<?php echo $row["id"];?>">
            <?php
            echo"<img class = 'card' src='data:image/jpeg;base64," . base64_encode($row['cover']) . "' />
            <div class='text1'>
                        <h5>" . $row['name'] . "</h5>";?>
            </a> 
            <?php
            echo"</div>
             </li>";
             
}

?>

</html>
<!-- <select id="genre" name="genre">
        <option value="">All Genres</option>
        <option value="action">Action</option>
        <option value="comedy">Comedy</option>
        <option value="drama">Drama</option>

    </select>-->


</body>

<?php include('footer.php'); ?>

</html>