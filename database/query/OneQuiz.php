<?php

    if(isset($_GET['quizCode'])){
        $quizCode = mysqli_real_escape_string($conn, $_GET['quizCode']);

        //query for one quiz
        $quiz = "SELECT quiz.*, quizquestion.*, quizanswer.* FROM quiz
        INNER JOIN quizquestion ON quiz.quizID = quizquestion.quizID
        INNER JOIN quizanswer ON quizquestion.quizQuestionID = quizanswer.quizQuestionID
        WHERE quiz.quizCode = $quizCode";

        $instructor = "SELECT instructor.* FROM quiz
        INNER JOIN instructor ON quiz.InstructorID = instructor.instructorID
        WHERE quiz.quizID = $id";

        //make query & get result
        $quizResult = mysqli_query($conn, $quiz);
        $instructorResult = mysqli_query($conn, $instructor);

        // fetch resulting in an array
        $quizez = mysqli_fetch_all($quizResult, MYSQLI_ASSOC);
        $inst = mysqli_fetch_all($instructorResult, MYSQLI_ASSOC);

        //free result
        mysqli_free_result($quizResult);
        mysqli_free_result($instructorResult);

        //close connection
        mysqli_close($conn);
    }
?>