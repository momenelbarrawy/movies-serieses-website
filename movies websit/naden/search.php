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
                <h1 for='genre'></h1>
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
    $mysqli = new mysqli("localhost", "root", "", "movies");
    $mysqli2 = new mysqli("localhost", "root", "", "series");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
        $genres = isset($_POST['genres']) ? $_POST['genres'] : array();

        $sql = "SELECT * FROM movies WHERE name LIKE '%$searchq%' OR type LIKE '%$searchq%'";
        $sql2 = "SELECT * FROM series WHERE name LIKE '%$searchq%' OR type LIKE '%$searchq%'";
        if (!empty($genres)) {
            $sql .= " WHERE genre IN ('" . implode("','", $genres) . "')";
            $sql2 .= " WHERE genre IN ('" . implode("','", $genres) . "')";
        }
    } else {

        $sql = "SELECT * FROM movies WHERE name LIKE '%$searchq%' OR type LIKE '%$searchq%'";
        $sql2 = "SELECT * FROM series WHERE name LIKE '%$searchq%' OR type LIKE '%$searchq%'";
    }
    $result = $mysqli->query($sql);
    $result2 = $mysqli2->query($sql2);

    if ((mysqli_num_rows($result) > 0) || (mysqli_num_rows($result2) > 0)) {
        while ($row = $result->fetch_assoc()) {
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

            ?><?php
        while ($row2 = $result2->fetch_assoc()) {
            echo  "<li class='row'>
            <div class='column'>
                " ?>
            <a href="/movies websit/mina/display_movie/index.php?id=<?php echo $row2["id"]; ?>">
                <?php
                echo "<img class = 'card' src='data:image/jpeg;base64," . base64_encode($row2['cover']) . "' />
            <div class='text1'>
                        <h5>" . $row2['name'] . "</h5>"; ?>
            </a>
    <?php
            echo "</div>
             </li>";
        }
    } //else{
    //     echo "Not Found";
    // }
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