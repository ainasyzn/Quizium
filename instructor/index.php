<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/modal.css">
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
                <li class="active">
                    <a href="#">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="report.php">
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

            <div class="card-quiz">
                <div class="quiz-name">
                    <p>First Week Quiz</p>
                    <i class="fas fa-trash-alt left" id="myBtn" class="left"></i>
                    <a href="edit.php"><i class="fas fa-edit"></i></a>
                </div>
                           
                <div class="card-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <div class="quiz-code">
                    <p>WJK-YKE-SOQ</p>
                </div>

                <div class="quiz-copy">
                    <i class="far fa-copy"></i>
                </div>
            </div>
           <a href="create.php"><button class="button btn1"><span>Create</span></button></a>

             <!-- modal -->
              <div class="modal" id="myModal">
                <!-- modal content-->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4>Delete Quiz</h4>
                    <p>You are about to delete --quiz name--.</p>

                    <div class="action-btn">
                        <button class="button btnDelete">Delete</button>
                    </div>
                </div>
              </div>
        </main>
    </div>
    <script src="../js/modal.js"></script>
</body>
</html>