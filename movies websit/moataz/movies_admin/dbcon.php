<?php

$con = mysqli_connect("localhost","root","","movies");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>