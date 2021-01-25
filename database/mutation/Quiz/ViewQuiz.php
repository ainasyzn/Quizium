<?php
$id = $_SESSION["studentID"];
$query = "SELECT * FROM quiz 
WHERE StudentID = $id 
ORDER BY quizID desc";
$result = $conn->query($query);

$mql = "SELECT answeredquiz.*, student.* 
FROM answeredquiz INNER JOIN student ON answeredquiz.StudentID = student.studentID 
WHERE answeredquiz.quizID = 142";
            $result2 = $conn->query($mql);
            $ron = mysqli_fetch_all($result2, MYSQLI_ASSOC);
            var_dump($ron);
?>