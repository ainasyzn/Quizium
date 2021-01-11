<?php
    session_start();
    $quizName = $openDate = $closeDate = $quizDescription = $quizCode = '';
    $errors = array('quizName'=>'','openDate'=>'',
    'closeDate'=>'','quizDescription'=>'','quizCode'=>'');

    if(isset($_POST['submit'])){
        //instructorID
        $instructorID = $_SESSION['instructorID'];

        //quizName
        if(empty($_POST['quizName'])){
            $errors['quizName'] = 'An Quiz Name is required <br />';
        } else {
            $quizName = $_POST['quizName'];
        }

        //open date
        if(empty($_POST['openDate'])){
            $errors['openDate'] = 'An Open Date is required <br />';
        } else {
            $openDate = date('Y-m-d', strtotime($_POST['openDate']));
        }

        //close date
        if(empty($_POST['closeDate'])) {
            $errors['closeDate'] = 'An Close Date is required <br />';
        } else {
            $closeDate = date('Y-m-d', strtotime($_POST['closeDate']));
        }

        //quizDescription
        if(empty($_POST['quizDescription'])) {
            $errors['quizDescription'] = 'An Quiz Status is required <br />';
        } else {
            $quizDescription = $_POST['quizDescription'];
        }

        //quizCode
        if(empty($_POST['quizCode'])) {
            $errors['quizCode'] = 'An Quiz Status is required <br />';
        } else {
            $quizCode = $_POST['quizCode'];
        }

        if(array_filter($errors)){

        } else {
            $instructorID = mysqli_real_escape_string($conn, $_SESSION['instructorID']);
            $quizName = mysqli_real_escape_string($conn, $_POST['quizName']);
            $openDate = mysqli_real_escape_string($conn, date('Y-m-d', strtotime(str_replace('-','/',$_POST['openDate']))));
            $closeDate = mysqli_real_escape_string($conn, date('Y-m-d', strtotime(str_replace('-','/',$_POST['closeDate']))));
            $quizDescription = mysqli_real_escape_string($conn, $quizDescription);
            $quizCode = mysqli_real_escape_string($conn, $quizCode);

            $sql = "UPDATE quiz
            SET instructorID='$instructorID', quizName='$quizName', 
            openDate='$openDate', closeDate='$closeDate', 
            quizDescription='$quizDescription', quizCode='$quizCode'
            WHERE quiz.quizID = $quizID ";

            if(mysqli_query($conn, $sql)){
                $quizID = mysqli_insert_id($conn);
                echo "New record created successfully. Last inserted ID is: " . $quizID; //TODO: Check balik
                header('Location: index.php');
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }
    } // End of POST check

?>