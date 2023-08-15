<?php 

// connection  to database
if(!$con = mysqli_connect('localhost', 'root', '', 'dbcrud'))
{
    die("Failed to connect");
}