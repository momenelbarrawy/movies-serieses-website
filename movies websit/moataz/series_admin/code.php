<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_series']))
{
    $series_id = mysqli_real_escape_string($con, $_POST['delete_series']);

    $query = "DELETE FROM series WHERE id='$series_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "series Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "series Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_series']))
{
    $series_id = mysqli_real_escape_string($con, $_POST['series_id']);

    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $cover = mysqli_real_escape_string($con,file_get_contents($_FILES["cover"]["tmp_name"]));
    $episodes = mysqli_real_escape_string($con, $_POST['episodes']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $trailer = mysqli_real_escape_string($con, $_POST['trailer']);


    $query = "UPDATE series SET title='$title', description='$description', cover='$cover',episodes='$episodes',type='$type',trailer='$trailer' WHERE id='$series_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "series Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "series Not Updated";
        header("Location: index.php");
        exit(0);
    }

}

?>