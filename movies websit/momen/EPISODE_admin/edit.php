<?php
session_start();
// echo $_SESSION['name']; 
// echo $_GET['id'];

$name = $_SESSION['name'];
$num = $_GET['id'];
$conn = connection('series');
$sql = "SELECT * FROM series";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="grid-container">';
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $number = $row["episodes"];

        $sql2 = "SELECT * FROM $name WHERE number='$num'";
        $result2 = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result2) > 0) {
            $row2 = mysqli_fetch_assoc($result2);
            $name_ep = $row2['name'];
            $num_ep = $row2['number'];
?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>update_Episode</title>
                <style>
                    body {
                        background-color: black;
                    }

                    .title {
                        display: flexbox;
                        margin-top: 50px;
                        justify-content: center;
                        color: rgb(162, 40, 138);
                        text-shadow: 2px 2px 8px rgb(162, 40, 138);
                        position: relative;
                        top: 100px;
                        right: 10px;
                    }

                    .container {
                        background-color: transparent;
                        width: 30%;
                        height: 30%;
                        border: 3px solid #a45fbe;
                        margin: 150px;
                        padding: 50px;
                        border-radius: 10px;
                        display: grid;
                        justify-content: center;
                        box-shadow: 2px 2px 8px rgb(162, 40, 138);
                    }

                    .episode_name {
                        background-color: transparent;
                        border: 1px solid #a45fbe;
                        margin-bottom: 30px;
                        border-radius: 18px;
                        color: #4b81ab;
                        display: flex;
                        justify-content: center;
                        height: 35px;
                        text-align: center;
                        font-size: 10px;
                        min-width: 1px;
                        width: 300px;
                        box-shadow: 2px 2px 5px rgb(162, 40, 138);

                    }

                    .number-episode {
                        background-color: transparent;
                        border: 1px solid #a45fbe;
                        margin-bottom: 30px;
                        border-radius: 18px;
                        color: #4b81ab;
                        display: flex;
                        justify-content: center;
                        height: 35px;
                        text-align: center;
                        font-size: 10px;
                        width: 300px;
                        box-shadow: 2px 2px 5px rgb(162, 40, 138);

                    }

                    .episode input[type="file"] {
                        color: #7c8995;
                    }

                    ::-webkit-file-upload-button {
                        background: transparent;
                        color: #4b81ab;
                        padding: 5px;
                        display: none;
                    }

                    .episode {
                        font-size: 20px;
                        display: inline-block;
                        padding: 6px 12px;
                        cursor: pointer;
                        color: #4b81ab;
                        display: grid;
                        justify-content: center;
                        margin-bottom: 30px;
                        border-radius: 4px;
                    }

                    .episode2 {
                        font-size: 20px;
                        border: 1px solid #a45fbe;
                        display: inline-block;
                        padding: 6px 12px;
                        cursor: pointer;
                        color: #4b81ab;
                        display: block;
                        justify-content: center;
                        border-radius: 10px;
                        margin: 10px 0px;

                    }

                    .add {
                        background-color: transparent;
                        color: #4b81ab;
                        outline: transparent;
                        padding: 6px 12px;
                        cursor: pointer;
                        margin-bottom: 15px;
                        border: 1px solid #a45fbe;
                        border-radius: 18px;
                        font-size: 20px;
                        display: grid;
                        justify-content: center;
                        box-shadow: 2px 2px 5px rgb(162, 40, 138);


                    }

                    .add:hover {
                        background-color: #4b81ab;
                        color: #382f60;
                    }

                    .cancel {
                        background-color: transparent;
                        color: #4b81ab;
                        outline: transparent;
                        padding: 6px 12px;
                        cursor: pointer;
                        margin-bottom: 15px;
                        border: 1px solid #a45fbe;
                        border-radius: 18px;
                        font-size: 20px;
                        display: flex;
                        justify-content: center;
                        box-shadow: 2px 2px 5px rgb(162, 40, 138);
                    }

                    .cancel:hover {
                        background-color: #4b81ab;
                        color: #382f60;
                    }

                    ::placeholder {
                        color: #eee;
                        font-weight: bold;
                        float: left;
                    }
                </style>
            </head>

            <body>
                <center>
                    <h1 class="title">Add Episode</h1>
                    <div class="container">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="name">
                                <input type="text" name="episode_name" id="" placeholder="Name" class="episode_name" value="<?php echo $name_ep ?>">
                            </div>
                            <div class="number">
                                <input type="text" name="episode_number" id="" placeholder="Number Of Episode" class="number-episode" value="<?php echo $num_ep ?>">
                            </div>
                            <label class="episode">
                                Add Episode
                                <div>
                                    <input type="file" name="episode" id="" class="episode2">
                                </div>
                            </label>
                            <div class="add1">
                                <input type="submit" value="Update" name="add-episode" class="add">
                            </div>
                            <div class="cancel1">
                                <input type="submit" value="cancel" name="cancel-episode" class="cancel">
                            </div>
                        </form>
                    </div>
                </center>
            </body>

            </html>
<?php
        } // if episode
    }
} //if series

?>


<?php
// $conn = connection('series');
if (isset($_POST["add-episode"])) {
    if (isset($_POST["add-episode"])) {
        if (isset($_POST["episode"])) {
            $episode_data = mysqli_real_escape_string($conn, file_get_contents($$_FILES["episode"]["tmp_name"]));
            $sql_up = "UPDATE $name SET episode='$episode_data' WHERE number='$num_ep'";
            $result_up = mysqli_query($conn, $sql_up);
        } else if (isset($_POST["episode_name"])) {
            $name_up = $_POST["episode_name"];
            $sql_up = "UPDATE $name SET name='$name_up' WHERE number='$num_ep'";
            $result_up = mysqli_query($conn, $sql_up);
        } else if (isset($_POST["episode_number"])) {
            $num_up = $_POST["episode_number"];
            $sql_up = "UPDATE $name SET number='$num_up' WHERE number='$num_ep'";
            $result_up = mysqli_query($conn, $sql_up);
        }
        if (isset($result_up)) {
            echo "EDITE DONE";
        }
    }
    //         }
    //     }
}
?>


<?php
function connection($dbName)
{
    $conn = mysqli_connect('localhost', 'root', '', $dbName);
    if (isset($conn)) {
        return $conn;
    } else {
        die("Connection failed" . mysqli_connect_error());
    }
}

function add_episode($conn, $table_name, $name_of_episode, $number_of_episode, $episode)
{
    $episode_data = mysqli_real_escape_string($conn, file_get_contents($episode["tmp_name"]));
    $sql = "INSERT INTO $table_name (number, name, episode) VALUES ('$number_of_episode','$name_of_episode', '$episode_data')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "ok";
    } else {
        echo "error";
    }
}
function update_ep($conn, $table_name, $colum_in_sql, $valuo_updated, $num_of_ep)
{
    $sql = "UPDATE $table_name SET '$colum_in_sql'='$valuo_updated' WHERE number='$num_of_ep'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "ok";
    } else {
        echo "error";
    }
}


?>