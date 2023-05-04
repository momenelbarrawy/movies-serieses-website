<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Episode Admin</title>
    <style>
        /* Set font family */
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }

        /* Style the container for each episode */
        .episode-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #a45fbe;
            border-radius: 5px;
            max-width: 600px;
        }

        /* Style the video */
        .video {
            width: 100%;
            height: auto;
        }

        /* Style the episode name */
        .episode-name {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
            margin-bottom: 5px;
            color: #a45fbe;
            align-items: center;
        }

        /* Style the edit and delete buttons */
        .edit-button,
        .delete-button {
            padding: 10px 20px;
            background-color: #383437;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            margin-top: 10px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* On hover, change the background color of the buttons */
        .edit-button:hover,
        .delete-button:hover {
            background-color: #3b3a3b;
            transform: translateY(-0.2rem);
            box-shadow: 1px 1px 10px #a91d99;
        }

        /* Set up the grid */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "series";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Handle form submission
    if (isset($_POST['delete'])) {
        $name = $_SESSION['name'];
        $number_ep = $_POST['number_ep'];
        $sql = "DELETE FROM $name WHERE number='$number_ep'";
        if (mysqli_query($conn, $sql)) {
            echo "Episode deleted successfully.";
        } else {
            echo "Error deleting episode: " . mysqli_error($conn);
        }
    }
    if (isset($_POST["edit"])) {
        $_SESSION['name'] = $name;
        $number_ep = $_POST['number_ep'];
        // $_SESSION['num'] = $number_ep;
        header("Location: http://localhost:3000/movies%20websit/momen/EPISODE_admin/edit.php?id=" . $number_ep);
    }

    $sql = "SELECT * FROM series";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="grid-container">';
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $number = $row["episodes"];

            $sql2 = "SELECT * FROM $name";
            $result2 = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result2) > 0) {
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $episode = $row2["episode"];
                    $name_epis = $row2["name"];
                    $number_ep = $row2["number"];
                    $_SESSION["name"] = $name;
    ?>
                    <div class="episode-container">
                        <video controls class="video">
                            <source src="data:video/mp4;base64,<?php echo base64_encode($episode); ?>" />
                        </video>
                        <div class="episode-info">
                            <p class="episode-name"><?php echo $name_epis . "(" . $number_ep . ")"; ?></p>
                            <div class="episode-buttons">
                                <form action="" method="post">
                                    <button type="submit" class="edit-button" name="edit">Edit</button>
                                    <input type="hidden" name="number_ep" value="<?php echo $number_ep; ?>" />
                                    <input type="submit" name="delete" class="delete-button" value="Delete" />
                                </form>
                            </div>
                        </div>
                    </div>





    <?php
                } //while episode
                echo '</div>'; // end of parent container
            } //if episode
        } //while series
    } else {
        echo "<p>No series found.</p>";
    }

    mysqli_close($conn);
    ?>
</body>

</html>