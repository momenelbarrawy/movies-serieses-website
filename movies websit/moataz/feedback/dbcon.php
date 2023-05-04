<?php

$con = mysqli_connect("localhost","root","","login_register");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
