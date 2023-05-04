<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>movie</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>movie Details
                            <!-- <a href="" class="btn btn-primary float-end">Add movie</a> -->
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TITLE</th>
                                    <th>DESCRIPTION</th>
                                    <!-- <th>Episodes</th> -->
                                    <th>Type</th>
                                    <th>Trailer</th>
                                    <th>cover</th>
                                    <th>video</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM movies";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $movie) {
                                ?>
                                        <tr>
                                            <td><?= $movie['id']; ?></td>
                                            <td><?= $movie['name']; ?></td>
                                            <td><?= $movie['description']; ?></td>
                                            <!-- <td>< $movie['episodes']; ?></td> -->
                                            <td><?= $movie['type']; ?></td>
                                            <td><?= $movie['trailer']; ?></td>
                                            <td><?php echo "<img class = 'cover' src='data:image/jpeg;base64," . base64_encode($movie['cover']) . "' />" ?></td>
                                            <td><video controls class="video">
                                                    <source src=<?php echo "'data:video/mp4;base64," . base64_encode($movie['vedio']) . "'  />" ?> </video>
                                            </td>
                                            <td>
                                                <a href="movie-edit.php?id=<?= $movie['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_movie" value="<?= $movie['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>