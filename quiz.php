<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Your Knowledge</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap');

        * {
            padding: 0 0;
            margin: 0 0;
        }

        body {
            background-color: #f4af1b;
        }

        header h2 {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 25px;
            color: white;
            text-decoration: none;
        }

        header {
            background-color: #001545;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 32px 10px;

        }

        header li {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: white;
            text-decoration: none;
        }

        .nav__links {
            list-style: none;
        }

        .nav__links li {
            display: inline;
            padding: 0px, 20px;
        }

        .nav__links li a {
            list-style: none;
            text-decoration: none;
            color: white;
            margin-right: 40px;
            transition: all 0.3s ease 0s;

        }

        .nav__links li a:hover {
            color:  rgb(238, 241, 34)
        }

        .canvas {

            margin: 30px 2rem;
            background-color: #f2bc94;
        }

        #heading {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 20px;
            color: white;
            text-align: center;
            background-color: #001545;
            border: 1px solid black;
            padding: 1rem;
        }


        header h2 {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 25px;
            color: white;
            text-decoration: none;
            margin-left: 30px;
        }

        .question_heading{
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            font-size: 17px;
            color: white;
            background-color: #001545;
            border: 1px solid black;
            padding: .5rem;
            margin-left: 1rem;
        }
        
        input[type="radio"]{
            margin-left: 2rem;
        }

        label{
            font-size: 18px;
            line-height: 24px;
            font-family: "Raleway",sans-serif;
            font-weight: 350;
            padding: .5rem;

        }
        .banr-btn{
            text-align: center;
           
        }
        
        button{
            font-size: 1.5rem;
            border-radius: 5%;
            padding: .5rem;
            font-family: sans-serif;
            text-align: center;
            margin-left: 45%;
            background-color: #001545;
            margin-bottom: 3%;
            color: white;

        
        }
    </style>
</head>

<body>
    <header> 
         <div class="logo"><a href="#"><img src="logo2.png"></a>

    </div>

        <h2>Memory Management</h2>
        <nav>
            <ul class="nav__links">

                <li><a href="homepage.php">Home</a></li>
                <li><a href="index_new.php">Description</a></li>
                <li><a href="types.php">Algorithms</a></li>
                <li><a href="imple.php">Implementation</a></li>
                

            </ul>

        </nav>
    </header>

    <div class="canvas">
        <h2 id="heading">Test Your Knowledge</h2>

        <br>  <br>

        <h3 class = "question_heading" >What is true about memory management?</h3>
        <div class="subcanvas">
            <form action="/action_page.php">
                <input type="radio" id="op1" name="q2" >
                <label for="vehicle1"> Memory management keeps track of each and every memory location</label><br>
                <input type="radio" id="op2" name="q2" value="Car">
                <label for="vehicle2"> It decides which process will get memory at what time.</label><br>
                <input type="radio" id="op3" name="q2" value="Boat">
                <label for="vehicle3">  It tracks whenever some memory gets freed or unallocated and correspondingly it updates the status.</label><br>
                <input type="radio" id="op4" name="q2" value="Boat">
                <label for="vehicle3">All of the above</label><br><br>

                <!-- answer:d -->
                
              </form>
        </div>

        <h3 class = "question_heading" >In which type of Fragmentation, Memory block assigned to process is bigger. Some portion of memory is left unused, as it cannot be used by another process.</h3>
        <div class="subcanvas">
            <form action="/action_page.php">
                <input type="radio" id="op1" name="q1" >
                <label for="vehicle1"> External fragmentation</label><br>
                <input type="radio" id="op2" name="q1" value="Car">
                <label for="vehicle2">  Internal fragmentation</label><br>
                <input type="radio" id="op3" name="q1" value="Boat">
                <label for="vehicle3"> Both A and B  </label><br>
                <input type="radio" id="op4" name="q1" value="Boat">
                <label for="vehicle3"> None of the above</label><br><br>
                
              </form>
        </div>


        <h3 class = "question_heading" >How many types of Fragmentation are there?   </h3>
        <div class="subcanvas">
            <form action="/action_page.php">
                <input type="radio" id="op1" name="q1" >
                <label for="vehicle1"> 2</label><br>
                <input type="radio" id="op2" name="q1" value="Car">
                <label for="vehicle2"> 3</label><br>
                <input type="radio" id="op3" name="q1" value="Boat">
                <label for="vehicle3"> 4</label><br>
                <input type="radio" id="op4" name="q1" value="Boat">
                <label for="vehicle3">5 </label><br><br>
                
              </form>
        </div>

        <h3 class = "question_heading" >The first fit, best fit and worst fit are strategies to select a ____________</h3>
        <div class="subcanvas">
            <form action="/action_page.php">
                <input type="radio" id="op1" name="q1" >
                <label for="vehicle1"> process from a queue to put in memory</label><br>
                <input type="radio" id="op2" name="q1" value="Car">
                <label for="vehicle2"> processor to run the next process</label><br>
                <input type="radio" id="op3" name="q1" value="Boat">
                <label for="vehicle3">free hole from a set of available holes</label><br>
                <input type="radio" id="op4" name="q1" value="Boat">
                <label for="vehicle3">all of the mentioned</label><br><br>
                
              </form>
        </div>
        

        <h3 class = "question_heading" >__________ is generally faster than _________ and _________</h3>
        <div class="subcanvas">
            <form action="/action_page.php">
                <input type="radio" id="op1" name="q1" >
                <label for="vehicle1">first fit, best fit, worst fit</label><br>
                <input type="radio" id="op2" name="q1" value="Car">
                <label for="vehicle2">best fit, first fit, worst fit</label><br>
                <input type="radio" id="op3" name="q1" value="Boat">
                <label for="vehicle3">worst fit, best fit, first fit</label><br>
                <input type="radio" id="op4" name="q1" value="Boat">
                <label for="vehicle3">none of the mentioned</label><br><br>
                <!-- answer: a
                 -->
              </form>
        </div>
        

        <h3 class = "question_heading" >External fragmentation exists when?</h3>
        <div class="subcanvas">
            <form action="/action_page.php">
                <input type="radio" id="op1" name="q1" >
                <label for="vehicle1">enough total memory exists to satisfy a request but it is not contiguous</label><br>
                <input type="radio" id="op2" name="q1" value="Car">
                <label for="vehicle2">the total memory is insufficient to satisfy a request</label><br>
                <input type="radio" id="op3" name="q1" value="Boat">
                <label for="vehicle3">a request cannot be satisfied even when the total memory is free</label><br>
                <input type="radio" id="op4" name="q1" value="Boat">
                <label for="vehicle3">none of the mentioned</label><br><br>

                <!-- answer:a -->
                
              </form>
        </div>

        
        <h3 class = "question_heading" >External fragmentation will not occur when?</h3>
        <div class="subcanvas">
            <form action="/action_page.php">
                <input type="radio" id="op1" name="q1" >
                <label for="vehicle1"> first fit is used</label><br>
                <input type="radio" id="op2" name="q1" value="Car">
                <label for="vehicle2">best fit is used</label><br>
                <input type="radio" id="op3" name="q1" value="Boat">
                <label for="vehicle3">worst fit is used</label><br>
                <input type="radio" id="op4" name="q1" value="Boat">
                <label for="vehicle3">no matter which algorithm is used, it will always occur</label><br><br>

                <!-- answer:d -->
                
              </form>
        </div>


        <h3 class = "question_heading" > When the memory allocated to a process is slightly larger than the process, then ____________</h3>
        <div class="subcanvas">
            <form action="/action_page.php">
                <input type="radio" id="op1" name="q1" >
                <label for="vehicle1">internal fragmentation occurs</label><br>
                <input type="radio" id="op2" name="q1" value="Car">
                <label for="vehicle2">external fragmentation occurs</label><br>
                <input type="radio" id="op3" name="q1" value="Boat">
                <label for="vehicle3">both internal and external fragmentation occurs</label><br>
                <input type="radio" id="op4" name="q1" value="Boat">
                <label for="vehicle3">neither internal nor external fragmentation occurs</label><br><br>

                <!-- answer:a-->
               
              </form>
        </div>

    </div>
  <button>Submit</button>
       
</body>

</html>  