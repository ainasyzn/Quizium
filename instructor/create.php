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
       <div class="quiz-details">
           <p class="header">Create a new quiz</p>
           
    <form>
           <input type="text" name="title" placeholder="Enter a title, eg: “Mathematics Exercise 1: Algebra”">
           <p class="title">TITLE</p>
        
           <input type="text" name="description" placeholder="Add a description...">
           <p class="title">DESCRIPTION</p>
       </div>

       <div class="cntdelegate">
            <div id="readroot">
                <div class="question-box">
                    <input type="text" id="questName" name="questName[]" placeholder="Add a question" onFocus="if(this.value=='questName'){this.select()};" onClick="if(this.value=='questName'){this.select()};">

                    <div class=action>
                        <select>
                            <option value="" disabled selected>Select question type</option>
                            <option value="fill">Fill in the blank</option>
                            <option value="mcq">Multiple choice</option>
                            <option value="check">Checkbox</option>
                        </select>
                    </div>
                    <hr>
                    
                    <div class="fill box">
                        <input type="text" name="ans" placeholder="Enter answer">
                    </div>
                    <div class="mcq box">
                        a. &nbsp <input type="radio" name="ansrad">&nbsp
                                 <input type="text" name="ans_rad" placeholder="Enter answer">
                        b. &nbsp <input type="radio" name="ansrad">
                                 <input type="text" name="ans_rad" placeholder="Enter answer">
                    </div>
                    <div class="check box">You have selected <strong>blue option</strong> so i am here</div>
                </div>
               
                <a href="javascript:;" onClick="this.parentNode.parentNode.removeChild(this.parentNode);">Remove</a>
                <div class="clear"></div>
            </div>
        
            <span id="writeroot"></span>
            <button  type="submit" class="button btn1" name="submit" id="submit" value="submit" alt="Send" title="Send"><span>Create</span></button>
            <div class="clear"></div>
            </form>
        </div> 
                
        <div class="add-question">
        <p onClick="moreFields();" id="moreFields">+ Add Question</p>
       </div>
    </div>
    <script src="../js/modal.js"></script>
    <script src="../js/create.js"></script>  
</body>
</html>