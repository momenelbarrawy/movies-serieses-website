<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>series Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>series Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $series_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM series WHERE id='$series_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $series = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="series_id" value="<?= $series['id']; ?>">

                                    <div class="mb-3">
                                        <label>title</label>
                                        <input type="text" name="title" value="<?=$series['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> description</label>
                                        <input type="text" name="description" value="<?=$series['description'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>episodes</label>
                                        <input type="text" name="episodes" value="<?=$series['episodes'];?>" class="form-control">
                                    </div> 
                                    <div class="mb-3">
                                        <label>type</label>
                                        <input type="text" name="type" value="<?= $series["type"] ?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>trailer</label>
                                        <input type="text" name="trailer" value="<?= $series["trailer"] ?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>cover</label>
                                        <input type="file" name="cover" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_series" class="btn btn-primary">
                                            Update series
                                        </button>
                                    </div>

                                </form>
                                <?php
                                
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>