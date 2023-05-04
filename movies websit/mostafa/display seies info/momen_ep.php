<?php
$conn = mysqli_connect("localhost", "root", "", "series");
if (!isset($conn)) {
    die("Connection failed" . mysqli_connect_error());
}
$id = $_GET["id"];
$num = $_GET["num"];
$sql = "SELECT * FROM series WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if (isset($result)) {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $sql_episode = "SELECT * FROM $name WHERE number = '$num'";
        $result_episode = mysqli_query($conn, $sql_episode);
        if (mysqli_num_rows($result_episode) > 0) {
            $row_episode  = mysqli_fetch_assoc($result_episode);
            $name_episode = $row_episode["name"];
            $episode = $row_episode["episode"];


?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
                <style>
                    body {
                        background-color: black;
                    }

                    .title {
                        position: relative;
                        display: flex;
                        margin: 5px;
                        padding: 5px;
                        width: 300px;
                        height: 30px;
                        top: 20px;
                        left: 670px;
                        text-shadow: 4px 4px 15px rgb(158, 51, 158);
                    }

                    .title p {
                        font-size: 30px;
                        color: rgb(187, 61, 187);
                        /* color:white; */
                        text-align: center;
                    }

                    .video-container {
                        margin: 5px auto;
                        width: 90%;
                        max-width: 1200px;
                        height: 0;
                        padding-bottom: 56.25%;
                        /* 16:9 aspect ratio */
                        position: relative;
                    }

                    .video-container video {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }
                </style>
            </head>

            <body>
                <?php
                include("nav.php")
                ?>
                <div class="container">
                    <p class="title"><?php echo $name_episode ?></p>
                    <div class="video-container">
                        <video controls class="vedio">
                            <source src=<?php echo "'data:video/mp4;base64," . base64_encode($episode) . "'  />" ?> </video>
                    </div>

                </div>
            <?php
            include("footer.php");
        } //episode
        else { ?>
                <!DOCTYPE html>
                <html>

                <head>
                    <title>Page Not Found</title>
                    <style>
                        body {
                            background-color: #e6ecf0;
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }

                        .container {
                            max-width: 500px;
                            margin: 0 auto;
                            text-align: center;
                            padding: 4rem 0;
                        }

                        h1 {
                            font-size: 6rem;
                            color: #333;
                            margin: 0;
                            line-height: 1;
                        }

                        p {
                            font-size: 1.5rem;
                            color: #555;
                            margin: 0;
                            margin-top: 2rem;
                        }

                        .btn {
                            background-color: #333;
                            color: #fff;
                            padding: 1rem 2rem;
                            border-radius: 0.3rem;
                            text-decoration: none;
                            transition: background-color 0.2s ease;
                            display: inline-block;
                            margin-top: 2rem;
                        }

                        .btn:hover {
                            background-color: #444;
                        }
                    </style>
                </head>

                <body>
                    <div class="container">
                        <h1>404</h1>
                        <p>Oops, thise episode you were looking for doesn't exist.</p>
                        <button class="btn" onclick="window.history.back()">Go Back</button>
                    </div>
                </body>

                </html>

    <?php
            // echo "No Episode Added";
        }
    } //series
    else {
        echo "No Series Added";
    }
}
    ?>
            </body>

            </html>