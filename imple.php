<!DOCTYPE html>
<html lang="en" id="implementation">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap');

        * {
            margin: 0 0;
            padding: 0 0;
        }

        body {
            background-color: #f2bc94;
        }

        header li {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: white;
            text-decoration: none;
        }

        header h2 {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 25px;
            color: white;
            text-decoration: none;
            margin-left: 100px;
        }

        header {
            background-color: #001545;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 32px 10px;
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

        .nav__links{
                list-style: none;
            }
            .nav__links li{
                display: inline;
                padding : 0px, 20px;
            }
            
            .nav__links li a {
                list-style: none;
                text-decoration: none;
                color: white;
                margin-right: 40px;
                transition: all 0.3s ease 0s;
    
            }

        .nav__links li a:hover {
            color: rgb(238, 241, 34);
        }

        .canvas {
            height: 300px;
            width: auto;
            background-color: #a1c3d3;
            border: 1px, 1px, solid black;
            margin-left: 3rem;
            margin-right: 3rem;
            margin-top: none;
            margin-bottom: none;
            padding: 3rem;
            padding-top: none;

        }

        /* input{
            display: inline;
        } */

        table.ex1 {
            border: 1px solid black;
            empty-cells: show;
        }

        table {
            margin-top: 5rem;
            margin-left: 3rem;
        }

        td {
            width: 500px;
            height: 60px;

        }

        .bottom {
            margin: 50px 3rem;
            background-color: #bfe2c7;
            padding: 4rem;

        }

        h3 {
            font-family: sans-serif;
        }

        .chkbox {
            margin: 15px 0;
            display: inline-block;
        }

        .in-one-line {
            display: inline-flex;
        }

        .in-one-line h3 {
            margin-top: 0;
            padding-top: 0;
        }

        .options {
            display: flex;
        }

        .options h3 {
            margin-right: 30px;
        }

        .bottom h3 {
            padding: 10px;
        }

        .submit-button {
            margin-left: 30%;
            padding: 15px;
        }

        button {
            cursor: pointer;
        }

        .input-read {
            color: rgb(43, 10, 230);
        }
    </style>
</head>
<header>
<body style="background-color: #f4af1b;">
    <div class="logo"><a href="#"><img src="logo2.png"></a>
    </div>
        <h2>Memory Management</h2>
        <nav>
            <ul class="nav__links">

                <li><a href="homepage.php">Home</a></li>
                <li><a href="index_new.php">Description</a></li>
                <li><a href="types.php">Algorithms</a></li>
                <li><a href="quiz.php">Quiz</a></li>
            </ul>
        </nav>
    </header>
    <h2 id="heading" style="margin: 2rem 3rem 0 3rem ">Implementation of memory allocation</h2>
    <section id="sec" class="canvas" style = "height:400px;width: auto;" >

    </section>
    <section class="bottom">
        <form>
            <!-- <h3>Enter the size of the memory<input type="integer" id="size" style="margin-left: 10px;"></h3> -->
            <!-- <button type="button" onclick="memory()">Memory</button> -->
            <div class="options">
                <div style="float:left; margin-right: 0px;">
                    <h3>Enter process size for P1<input class="process" min="0" id="P1" type="text" style="margin-left: 42px;" required>
                    </h3>
                    <h3>Enter process size for P2<input class="process" id="P2" type="text" style="margin-left: 42px;" required>
                    </h3>
                </div>
                <div style="float: right; margin-left: 30px;">
                    <h3>Enter process size for P3<input type="text"  class="process" style="margin-left: 42px;" required></h3>
                    <h3>Enter process size for P4<input type="text"  class="process" style="margin-left: 42px;" required ></h3>
                </div>
            </div>
            <div style="display:block">
                <h3 class="chkbox">Choose the algorithm: </h3>
                <div class="in-one-line">
                    <input class="chkbox" name="radio" type="radio" />
                    <h3>First Fit</h3>
                    <input class="chkbox" name="radio" type="radio" />
                    <h3>Best Fit</h3>
                    <input class="chkbox" name="radio" type="radio" />
                    <h3>Worst Fit</h3>
                </div>
                <!-- <div class="submit-button"> -->
                <!-- <h3><input type="submit" value="Submit"></h3> -->
                <button type="button" id="my-Btn" onclick="memory()">Memory</button>
                <button type="button" onclick="myFun()">Submit</button>
                <button type="button" onclick="cls()">Clear</button>
                <!-- </div> -->
            </div>
        </form>
    </section>
    <script src="imple.js"></script>
</body> 

</html>