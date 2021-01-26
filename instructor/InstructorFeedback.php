<?php 

    $title = $msg = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // the message
        if(!empty($_POST['title'])){
            $title = $_POST['title'];
        }
        if(!empty($_POST['message'])){
            $msg = $_POST['message'];
            $msg = wordwrap($msg,70);
        }

        // send email
        mail("zaiman670@gmail.com",$title,$msg);
        
        header('Location: ../../index.php');
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback</title>
        <!--icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body bgcolor="#A64AC9"> 
     <header>
        <div class="website-name">
            <h3>
            <a href="#"><span>Quizium</span></a>
            </h3>
      </div>
        </header>
        <div class="quizdetail-container">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="validateForm()"> 
                <div>
                    <label>TITLE</label>
                    <input type="text" id="title" name="title" class="form-control" required><br>
                </div>
                <div>
                    <label>MESSAGE</label><br>
                    <textarea id="message" name="message" rows="4" cols="50" class="form-control" required></textarea><br>
                </div>
                <br>
                <input type="submit" name="send" id="send" class="button btn3" value="Submit">
            </form>
        </div>
        <script>
            function validateForm() {
                alert("You Have summited an email to Quizium");
            }
        </script>
    </body>
</html>