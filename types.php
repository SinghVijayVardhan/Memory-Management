<!DOCTYPE html>
<html lang="en" id="types">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorithms</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap');

        *{
            padding: 0 0;
            margin: 0 0;
        }

        body{
            background-color:#f4af1b;
        }
      
       header h2{
        font-family: "Montserrat",sans-serif;
            font-weight: 500;
            font-size: 25px;
            color: white;
            text-decoration: none;
       } 

       header{
           background-color:#001545 ;
           display: flex;
           justify-content: space-between;
           align-items:center;
           padding: 32px 10px;
           
       }
        .canvas{

            margin: 30px 2rem;
            background-color: #f2bc94;
        }

        #heading{
            font-family: "Montserrat",sans-serif;
            font-weight: 500;
            font-size: 20px;
            color: white;
            text-align: center;
            background-color: #001545;
            border: 1px solid black;
            padding:1rem;
        }

        .Subcanvas{
            border: 1px solid black;
            padding:2rem;
            margin-top: none;
            
        }
        #list{
            padding-left: 2rem;
            font-family: "Montserrat",sans-serif;
            font-weight: 350;
            font-size: 16px;
            color: black;
            text-decoration: none;
        }
        p{
            font-size: 18px;
            line-height: 24px;
            font-family: "Raleway",sans-serif;
            font-weight: 350;
        }
        header li{
            font-family: "Montserrat",sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: white;
            text-decoration: none;
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
        .nav__links li a:hover{
            color : rgb(238, 241, 34)
        }

        header h2 {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 25px;
            color: white;
            text-decoration: none;
            margin-left: 30px;
        }
        .Subcanvas li{
            margin-left: 20px;
            padding-right: 5px;
        }
        .frame{
            margin-left: 25%;
        }
        .img{
            margin-left: 35%;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo"><a href="#"><img src="logo2.png"></a>

        </div>
        <h2 >Memory Management</h2>
        <nav>
            <ul class="nav__links">
                
                <li><a href="homepage.php">Home</a></li>
                <li><a href="index_new.php">Description</a></li>
                <li><a href="imple.php">Implementation</a></li>
                <li><a href="quiz.php">Quiz</a></li>

            </ul>

        </nav>
    </header>
    <div class="canvas">
        <h2 id="heading">Algorithms for memory allocation</h2>
        <ul class="Subcanvas">
            <p>The operating system uses different memory management schemes to optimize resource allocation. The responsibility of these schemes is to allocate memory chunks based on the demand by the operating system. The three most commonly used allocation schemes are </p>
            <li id="list">First Fit</li>
            <li id="list">Best Fit</li>
            <li id="list">Worst Fit</li>
        </ul>

        <br>
        <br>

        <h2 id="heading">First Fit Algorithm</h2>
        <div class="Subcanvas">
            <p> First Fit Algorithm is the simplest technique of allocating the memory block to the processes amongst all. In this algorithm, the pointer keeps track of all the free blocks in the memory and accepts the request of allocating a memory block to the coming process. After that pointer start searching for the largest first free block for the process and allocate that memory block to the coming process. In this, two partitions are created one is for the hole and the one will store the processes.
            </p>
            <br>
            <h3 style="font-size: larger;">Algorithm:</h3>
            <p> Step 1.Get the number of process and number of blocks.<br>
                Step 2.Get the size of each block.<br>
                Step 3. Allocate process  If (size of the block > = size of the process)<br>
                //allocate the process<br>
                else<br>
                //move on to the next blog<br>
                Step 4.Display the process with the blocks allocated to a respective process<br>
                Step 5.Stop
            </p>
            <br>
          
            <div  class="frame">
            <iframe width="500" height="300"  src="https://www.youtube.com/embed/RZ6674-mjrQ" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
            </div>
            <br><br>
            <div  class="img">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20200524132212/FIRST-FIT-300x225.png" alt="">
            </div>
            <p>
                <b>Advantages of First-Fit Memory Allocation:</b> <br>
                It is fast in processing. As the processor allocates the nearest available memory partition to the job, it is very fast in execution.
                <br>
                <br>
                <b>Disadvantages of First-Fit Memory Allocation :</b> <br>
                It wastes a lot of memory. The processor ignores if the size of partition allocated to the job is very large as compared to the size of job or not. It just allocates the memory. As a result, a lot of memory is wasted and many jobs may not get space in the memory, and would have to wait for another job to complete.
            </p>
           

        <br>    
        <br>
        <h2 id="heading">Best Fit Algorithm</h2>
        <div class="Subcanvas">
            <p> The best fit deals with allocating the smallest free partition which meets the requirement of the requesting process. This algorithm first searches the entire list of free partitions and considers the smallest hole that is adequate. It then tries to find a hole which is close to actual process size needed.
                 </p>
            <br>
            <h3 style="font-size: larger;">Algorithm:</h3>
            <p> 
                Step1. Enter the memory blocks with size. <br>
                Step2. Enter the process blocks with size. <br>
                Step3. Set all the memory blocks as free. <br>
                Step4. Start by picking up each process. <br>
                Step5. Find the minimum block size that is best to assign to the current process. <br>
                Step6. If the best fit memory size is found, it is allocated to the process. <br>
                Step7. If the memory block and memory demand do not match, leave the process and search for another process. <br>
            </p>
            <br>
            <div  class="frame">
            <iframe width="500" height="300"  src="https://www.youtube.com/embed/TQSVMBsK1kk" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
        </div>
            <br> <br>
            <div class="img">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20200524132547/BEST-FIT-300x225.png" alt="">
        </div>
         <p>
                <b>Advantages of Best-Fit Allocation :</b> <br>
                Memory Efficient. The operating system allocates the job minimum possible space in the memory, making memory management very efficient. To save memory from getting wasted, it is the best method. 
                <br>
                <br>
                <b> Disadvantages of Best-Fit Allocation : </b> <br>
                It is a Slow Process. Checking the whole memory for each job makes the working of the operating system very slow. It takes a lot of time to complete the work
            </p>
        </div>
        <br>
        <br>
        <h2 id="heading">Worst Fit Algorithm</h2>
        <div class="Subcanvas">
            <p> In this allocation technique, the process traverses the whole memory and always search for the largest hole/partition, and then the process is placed in that hole/partition. It is a slow process because it has to traverse the entire memory to search the largest hole. 
                 </p>
            <br>
            <h3 style="font-size: larger;">Algorithm:</h3>
            <p> 
                Step 1: Input memory block with a size. <br>
                Step 2: Input process with size. <br>
                Step 3: Initialize by selecting each process to find the maximum block size that can be assigned to the current process. <br>
                Step 4: If the condition does not fulfill, they leave the process. <br>
                Step 5: If the condition is not fulfilled, then leave the process and check for the next process. <br>
                Step 6: Stop.
            </p>
            <br>
            <div class="frame">
            <iframe width="500" height="300"  src="https://www.youtube.com/embed/fQY2FVhDu9k" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
        </div>  
        <br>
        <br>
        <div class="img">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20200524132547/BEST-FIT-300x225.png" alt="">
        </div>  
    
        <p>
                <b>Advantages of Worst-Fit Allocation : </b> <br>   
                 Since this process chooses the largest hole/partition, therefore there will be large internal fragmentation. Now, this internal fragmentation will be quite big so that other small processes can also be placed in that leftover partition. <br>
                <br>
                 <b>Disadvantages of Worst-Fit Allocation :</b> <br>
                 It is a slow process because it traverses all the partitions in the memory and then selects the largest partition among all the partitions, which is a time-consuming process.
             </p>
        </div>
    </div>
    <section>
    </section>
</body>
</html>