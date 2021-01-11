<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/create.css">   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js"></script>
</head>

<body>
    <header>
        <div class="website-name">
            <h3>
                <span>Quizium</span>
            </h3>
        </div>
    </header>
   <div class="main">
        <form class="repeater">
            <div class="quiz-details">
                <p class="header">Create a new quiz</p>
            
                <input type="text" name="title" placeholder="Enter a title, eg: “Mathematics Exercise 1: Algebra”">
                <p class="title">TITLE</p>
            
                <input type="text" name="description" placeholder="Add a description...">
                <p class="title">DESCRIPTION</p>
            </div>

            <div data-repeater-list="group-a" class="cntdelegate">
                <div data-repeater-item class="repeater-container">
                    <div class="question-box">
                        <input type="text" id="questName" name="questName" placeholder="Add a question" onFocus="if(this.value=='questName'){this.select()};" onClick="if(this.value=='questName'){this.select()};">
                        <div class="action">
                            <select onchange="questionType(this)">
                                <option value="mcq" disabled selected>Select question type</option>
                                <option value="mcq">Multiple choice</option>
                                <option value="check">Checkbox</option>
                            </select>
                        </div>
                    <hr>
                    <div class="mcq answer-container">
                        a. &nbsp; <input type="radio" name="ansrad">
                                    <input type="text" name="radio1[]" placeholder="Enter answer"><br>
                        b. &nbsp; <input type="radio" name="ansrad">
                                    <input type="text" name="radio2[]" placeholder="Enter answer"><br>
                        c. &nbsp; <input type="radio" name="ansrad">
                                    <input type="text" name="radio3[]" placeholder="Enter answer">
                    </div>
                    <div class="check answer-container">
                        a. &nbsp; <input type="checkbox" name="ansrad">
                                    <input type="text" name="check1[]" placeholder="Enter answer"><br>
                        b. &nbsp; <input type="checkbox" name="ansrad">
                                    <input type="text" name="check2[]" placeholder="Enter answer"><br>
                        c. &nbsp; <input type="checkbox" name="ansrad">
                                    <input type="text" name="check3[]" placeholder="Enter answer">
                    </div>
                </div>
               
                <!-- <a href="javascript:;" onClick="this.parentNode.parentNode.removeChild(this.parentNode);">Remove</a> -->
                <a data-repeater-delete >Remove </a>

                <div class="clear"></div>
            </div>
        
            <span id="writeroot"></span>
            <button  type="submit" class="button btn1" name="submit" id="submit" value="submit" alt="Send" title="Send"><span>Create</span></button>
            <div class="clear"></div>
        </form>
                
        <div class="add-question">
            <p data-repeater-create>+ Add Question</p>
        </div>

    </div>
    <script src="../js/modal.js"></script>
    <script src="../js/create.js"></script>  
</body>
</html>