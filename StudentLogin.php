<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/SignUpIn.css">
</head>
<body>
    <header>
        <header>
            <div class="website-name">
                <h3>
                    <span>Quizium</span>
                </h3>
            </div>
        </header>
    </header>
    <div class="container">
        <div class="inner-box">
            <h1>Welcome back, <p style="text-decoration: underline;">Students!</p></h1>
            <div class="subtext">
                sign in to continue
            </div>
            <form method="POST" action="database/query/studentLogin.php">
                <label>Student ID</label><br><input type="text" name="matrix">
                <br><br><label>Password</label><br><input type="password" name="password">
                <br><br>
                <div class="ketengahplis">
                    <input type="submit" value="submit" name="submit"><a href="StudentRegister.php">Sign up</a>
                </div>            
            </form>
            <br><br>
            <div class="subtext">
                Not a student? <a href="TutorLogin.html">Click here</a>
            </div>
        </div>
    </div>
</body>
</html>