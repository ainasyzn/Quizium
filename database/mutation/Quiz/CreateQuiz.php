<?php
    include("../../../config/db_connect.php");
    session_start();
    $quizName = $openDate = $closeDate = $quizCode = $quizDescription = '';
    $errors = array('quizName'=>'','openDate'=>'',
    'closeDate'=>'','quizCode'=>'','quizDescription'=>'');

    //the idea is, once quiz dah create, guna the id to insert quizquestions in this same file

        //instructorID
        $instructorID = 2;
        //quizCode dummy
        $quizCode = "WYG-GHT-WXT";
        $quizDescription = $_POST['description'];
        $quizName = $_POST['quizName'];
        $openDate = date('Y-m-d', strtotime($_POST['openDate']));
        $closeDate = date('Y-m-d', strtotime($_POST['closeDate']));
        //radio1-3, text1-3 from create.php

        if(array_filter($errors)){

        } else {
            $instructorID = mysqli_real_escape_string($conn, '2');
            $quizName = mysqli_real_escape_string($conn, $_POST['quizName']);
            $openDate = mysqli_real_escape_string($conn, date('Y-m-d', strtotime(str_replace('-','/',$_POST['openDate']))));
            $closeDate = mysqli_real_escape_string($conn, date('Y-m-d', strtotime(str_replace('-','/',$_POST['closeDate']))));
            $quizStatus = mysqli_real_escape_string($conn, $quizStatus);

            $sql = "INSERT INTO quiz(instructorID,quizName,dateOpen,dateClose,quizDescription,quizCode)
            VALUES ('$instructorID', '$quizName','$openDate','$closeDate','$quizDescription', 'quizCode')";
            

            if($conn->query($sql) === TRUE){
                //tak jadi
                $quizID = mysqli_insert_id($conn);
                echo "New record created successfully. Last inserted ID is: " . $quizID; //TODO: Check balik
                header('Location: ../../../instructor/index.php');
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }
    // End of POST check

?>