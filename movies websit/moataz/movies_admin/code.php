<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_movie']))
{
    $movie_id = mysqli_real_escape_string($con, $_POST['delete_movie']);

    $query = "DELETE FROM movies WHERE id='$movie_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "movie Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "movie Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_movie']))
{
    $movie_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $cover = mysqli_real_escape_string($con,file_get_contents($_FILES["cover"]["tmp_name"]));
    $video = mysqli_real_escape_string($con,file_get_contents($_FILES["cover"]["tmp_name"]));
    // $episodes = mysqli_real_escape_string($con, $_POST['episodes']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $trailer = mysqli_real_escape_string($con, $_POST['trailer']);


    $query = "UPDATE movies SET name='$title', description='$description', cover='$cover', vedio='$video',type='$type',trailer='$trailer' WHERE id='$movie_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "movie Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "movie Not Updated";
        header("Location: index.php");
        exit(0);
    }

}

?>