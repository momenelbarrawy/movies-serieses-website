<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_feedback'])) {
    $feedback_id = mysqli_real_escape_string($con, $_POST['delete_feedback']);

    $query = "DELETE FROM feedback WHERE id='$feedback_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "feedback Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "feedback Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_feedback'])) {
    $feedback_id = mysqli_real_escape_string($con, $_POST['feedback_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $problem = mysqli_real_escape_string($con, $_POST['problem']);
    $solve = mysqli_real_escape_string($con, $_POST['solve']);

    $query = "UPDATE feedback SET name='$name', email='$email', problem='$problem', solve='$solve' WHERE id='$feedback_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "feedback Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "feedback Not Updated";
        header("Location: index.php");
        exit(0);
    }
}
