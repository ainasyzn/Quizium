<?php include("config/db_connect.php");
include("database/query/StudentLogin.php");


?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/studenthome.css">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-user">
            <img src="image/bear.png">
            <div class="user-image">
                <p>Student</p>
            </div>
        </div>
        <div class="sidebar-menu">
            <hr>
            <ul>
                <li class="active">
                    <a href="">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>History</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="website-name">
                <h3>
                    <span>Quizium</span>
                </h3>
            </div>
        </header>
    </div>
    <div class="content">
        <div class="profilebox">
            <form>
                <div class="change-img">
                    <img src="image/bear.png"><br>
                    <a href="">change profile image</a>
                </div>
                <h4>User Profile</h4>
                <?php if($result-> num_rows >0) {
                  $i = 1;
                  while ($row = $result-> fetch_assoc()) {
                    ?>
                    <table>
                        <tr>
                            <td><label>Student ID: </label></td>
                            <td><input type="text" value="<?php echo $row["matrix"]?>"><br></td>
                        </tr>
                        <tr>
                            <td><label>Full name: </label></td>
                            <td><input type="text" value="<?php echo $row["studentName"]?>"></td>
                        </tr>
                    </table>
                <?php }
            } ?>
            </form>
        </div>
    </div>
</body>
</html>