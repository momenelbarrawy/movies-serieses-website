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

    <title>Feedback reply</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Feedback Reply
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $feedback_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM feedback WHERE id='$feedback_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $feedback = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="feedback_id" value="<?= $feedback['id']; ?>">

                                    <div class="mb-3">
                                        <label> Name</label>
                                        <input type="text" name="name" readonly value="<?= $feedback['name']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Email</label>
                                        <input type="email" name="email" readonly value="<?= $feedback['email']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> problem</label>
                                        <input type="text" name="problem" readonly value="<?= $feedback['problem']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>solve</label>
                                        <input type="text" name="solve" value="<?= $feedback['solve']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_feedback" class="btn btn-primary">
                                            Update feedback
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
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