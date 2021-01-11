<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/report.css">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-user">
            <img src="../image/fox.png">
            <div class="user-image">
                <p>Instructor</p>
            </div>
        </div>
        <div class="sidebar-menu">
            <hr>
            <ul>
                <li>
                    <a href="index.php">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php" >
                        <span>My Profile</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <span>Report</span>
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
        <main>
            <div class="sorting">
                <div class="quizTot">
                    Quiz(N)
                </div>
                <div class="sortBy">
                    <p>Sort by:</p>
                    <select name="sortBy">
                        <option value="recent">Most recent</option>
                        <option value="recent">Oldest</option>
                    </select>
                    <p>Search quiz:</p>
                    <input type="text">
                </div>
            </div>

            <div class="quiz-list">
                <table>
                    <tr>
                        <th>No.</th><th>Quiz name</th><th>Start date</th><th>End date</th><th>Class average</th><th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Database</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="quiz-report.php"><button class="button btnView">View</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Human-Computer Interaction</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="quiz-report.php"><button class="button btnView">View</button></a></td>
                    </tr>
                   
                </table>
            </div>
        </main>
    </div>
</body>
</html>