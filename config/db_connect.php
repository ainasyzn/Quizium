<?php
    // connect to database
    $conn = mysqli_connect('localhost','aiman','123','quizium');

    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    } 
?>