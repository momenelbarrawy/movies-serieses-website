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

    <title>Feedbacks Control</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>All Feedbacks
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Name</th>
                                    <th>Email</th>
                                    <th>Problem</th>
                                    <th>Solve</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM feedback";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $feedback) {
                                ?>
                                        <tr>
                                            <td><?= $feedback['id']; ?></td>
                                            <td><?= $feedback['name']; ?></td>
                                            <td><?= $feedback['email']; ?></td>
                                            <td><?= $feedback['problem']; ?></td>
                                            <td><?= $feedback['solve']; ?></td>
                                            <td>

                                                <a href="feedback-reply.php?id=<?= $feedback['id']; ?>" class="btn btn-success btn-sm">Reply</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_feedback" value="<?= $feedback['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
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