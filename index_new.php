<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory</title>

    <style>
         @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap');
         *{
            padding: 0 0;
            margin: 0 0;
        }
        body{
            background-color: #f4af1b;
        }
        .nav{
            display:flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
            
    
        }
        .nav-links{
            flex: 1;
            text-align: right;
           
        }
        .nav-links ul li{
         list-style: none;
         display: inline-block;
         padding: 8px 8px;
         position: relative;
        }   
        .nav-links ul li a{
            text-decoration: none;
            font-size: 13px;
            font-family: cursive;
        }  
        .nav-links ul li::after{
             content: '';
             width: 0%;
             height: 2px;
             background: #32e43b;
             display: block;
             margin: auto;
             transition: 0.5s;
    }
        .nav-links ul li:hover::after{
            width: 100%;
            
                }
           
           .h2{
            font-size: 36px;
            font-weight: 600;
            
           }
           .p{
               color: blue;
               font-size: 14px;
               font-weight: 300;
               line-height: 22px;
               padding: 10px;
           }
           .row{
               margin-top: 5%;
               display: flex;
               justify-content: space-between;
    
           }
           .types{
            width: 80%;
            margin: auto;
            text-align: center;
            padding-top: 100px;
            }
           .types-col{
              flex-basis: 31%;
              background: #96c0ce;
              border-radius: 65px;
              margin-top: 40px;
              padding: 30px 12px;
              box-sizing: border-box;
              transition: 0.5s;
              box-shadow:  10px 10px #787b83;
           }
           .h3{
               text-align: center;
               font-weight: 600;
               margin: 10px 0;
               font-family: cursive;
             }
           .types-col:hover{
               box-shadow: 0 0 20px 0px rgba(7, 7, 7, 0.2);
               
           }
    
           .fixed{
               width: 70%;
               margin: auto;
               text-align: center;
               padding-top: 50px;
    
           }
           .fixed-col{
               flex-basis: 70%;
               border-radius: 10px;
               margin-bottom: 30px;
               position: relative;
               overflow: hidden;
           }
           .stat-col{
            flex-basis: 45%;
            background: rgb(179, 191, 209);
            border-radius: 50px;
            padding: 20px 12px;
            box-sizing: border-box;
            transition: 0.5s;
            box-shadow:  10px 10px #787b83; 
            
         }
         .stat-col:hover{
            box-shadow: 0 0 20px 0px rgba(7, 7, 7, 0.2);
            
        }
    
        .layer{
            background: transparent;
            height: 90%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: 0.5s;
        }
        .layer:hover{
            background: rgba(8, 8, 8, 0.7);
        }
        ::before,
        ::after{
          margin: 0;
          padding: 0;
          box-sizing: inherit;
        }
       .section{
          width: 100%;
          height: 100vh;
          background-color: #3c4053;
          display: flex;
          align-items: center;
          justify-content: center;
    
       }
        
        .accordion-item{
           background-color: #9096a3;
            border-radius: 4rem;
            
            box-shadow: .5rem 2px .5rem rgba(0,0,0,0.1);
        }
        .accordion-link{
            font-size: 1.6rem;
            color: rgba(255,255,255,.8);
            text-decoration: none;
            background-color: #283042;
            width: 100%;
            display: flex;
            border-radius: 4rem;
            justify-content: space-between;
        }
    
        .answer{
            position: relative;
            background-color: rgb(164, 173, 173);
            transform: max-height 650ms; 
         }
         .answer::before{
                content: " ";
                position: absolute;
                width: 0.4rem;
                height: 90%;
                background-color: rgb(97, 236, 120);
                align-items: left;
                top : 50%;
                left: 0 ;
                transform: translateY(-50%);
                color: rgba(167, 182, 224, 0.7);
                top: 50%;
                left:0;
                transform: translateY(-50%);
                 
         }
         .answer p{
             color: rgba(255,255,255,.8);
             font-size: 1.4rem;
             padding: 2rem;
         }
         .accordion-item:target{
    
            max-height: 20rem;
         }
         .accordion-item:target.answer{
             display: none;
         }
         header h2{
            font-family: "Montserrat",sans-serif;
                font-weight: 500;
                font-size: 25px;
                color: white;
                text-decoration: none;
                margin-left: 30px;
           } 
    
           header{
               background-color:#001545 ;
               display: flex;
               justify-content: space-between;
               align-items:center;
               padding: 32px 10px;
               
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
                padding : 0px, 15px;
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
            #heading2{
           
                font-weight: 400;
                font-size: 15px;
                color: black;
                text-align: center;
                background-color: #96c0ce;
                border: 1px solid black;
                padding:1rem;
                font-family: "Montserrat",sans-serif;
            }
            .Subcanvas{
                border: 1px solid black;
                padding:2rem;
                margin-top: none;
            }
            .canvas{

                margin: 30px 2rem;
                background-color: #f2bc94;
            }
    
    </style>
    
</head>

<header>
<body style="background-color: #e0b860;" >
    <div class="logo"><a href="#"><img src="logo2.png"></a>

    </div>

        <h2 >Memory Management</h2>
        <nav>
            <ul class="nav__links">
                
                <li><a href="homepage.php">Home</a></li>
                <li><a href="types.php">Algorithms</a></li>
                <li><a href="imple.php">Implementation</a></li>
                <li><a href="quiz.php">Quiz</a></li>
            </ul>

        </nav>
    </header>
    </section>
  
   
    <div class="row">
      <div class="types-col">
        <h3 style="color: #565656">What is Memory Management...?</h3>
        <br>
        <p>The term Memory can be defined as a collection of data in a specific format. It is used to store instructions 
            and processed data. The memory comprises a large array or group of words or bytes, each with its own location.
             The primary motive of a computer system is to execute programs. These programs, along with the information they access, 
             should be in the main memory during execution. The CPU fetches instructions from memory according to the value of the
              program counter. </p> 
      </div>

        <div class="types-col">
          <h3 style="color: #525564">Why it is Required...?</h3>
          <br>
         <p style="color: #020202">
            Allocate and de-allocate memory before and after process execution.<br> <br>
           <li style="color: #000000"> To keep track of used memory space by processes.</li><br>
           <li style="color: #0d0d0e"> To minimize fragmentation issues.</li><br>
           <li style="color: #070707"> To proper utilization of main memory.</li><br>
           <li style="color:#070707"> To maintain data integrity while executing of process.</li></p> 
        </div>

        <div class="types-col">
            <h3 style="color: #525564">What is Main Memory...?</h3>
            <br>
            <p style="color: #070707">The main memory is central to the operation of a modern computer. Main Memory is a large array of words or bytes, ranging in size from hundreds of thousands to billions. Main memory is a repository of rapidly available information shared by the CPU and I/O devices. Main memory is the place where programs and information are kept when the processor is effectively utilizing them.  Main memory is associated with the processor, so moving instructions and information into and out of the processor is extremely fast.  Main memory is also known as RAM(Random Access Memory).. </p> 
          </div>
      </div>
    </div>
   
<ul>
    <section class="types">
        <h2 id="heading">Contiguous Memory Allocation</h2>
        
        <p id="heading2">Contiguous memory allocation is basically a method in which a single contiguous 
            section/part of memory is allocated to a process or file needing it. </p>
            <br> <br>
            <h2 id="heading">Types of Contiguous Memory Allocation----</h2>

            <div class="row">
                <div class="stat-col">

                    <h3>Static or Fixed</h3>
                    <p>Contiguous memory allocation is basically a method in which a single 
                        contiguous section/part of memory is allocated to a process or file 
                        needing it. </p>

            </div>
                <div class="stat-col">
                    <h3>Dynamic</h3>
                    <p>The entire program and all data of a process must be in physical memory
                         for the process to execute. So, the size of a process is limited to the
                          size of physical memory. To gain proper memory utilization, dynamic 
                          loading is used. In dynamic loading, a routine is not loaded until 
                          it is called. All routines are residing on disk in a relocatable load format. One of the advantages of dynamic loading is that unused routine is never loaded </p>

            </div>

        </section>
            <section class="fixed">
                <h2 id="heading">fixed Partition</h2>
                
                <p id="heading2">the operating system maintains a table that indicates which parts of memory are available and which are occupied by processes. Initially, all memory is available for user processes and is considered one large block of available memory. This available memory is known as “Hole”. When the process arrives and needs memory, we search for a hole that is large enough to store this process. If the requirement fulfills then we allocate memory to process, otherwise keeping the rest available to satisfy future requests. While allocating a memory sometimes dynamic storage allocation problems occur, which concerns how to satisfy a request of size n from a list of free holes.</p>
             <br> <br>

              </div>
              <div class="accordion-item" id="q1">
                    <a class="accordion-link" href="#q1">
                        FIRST FIT

                    </a>
                    <div class="answer">
                        
          <p> This method keeps the free/busy list of jobs organized by memory location, low-ordered to high-ordered memory. In this method, first job claims the first available memory with space more than or equal to it’s size. The operating system doesn’t search for appropriate partition but just allocate the job to the nearest memory partition available with sufficient size.
        </p> 
              </div>
              <div class="accordion-item" id="q2">
                    <a class="accordion-link" href="#q2">
                        BEST FIT
                    </a>
                    <div class="answer">
                      <p> The best fit deals with allocating the smallest free partition which meets the requirement of the requesting process. This algorithm first searches the entire list of free partitions and considers the smallest hole that is adequate. It then tries to find a hole which is close to actual process size needed.
                    </p> 
                     </div>
                     <ion-icon name="heart"></ion-icon>
                    <div class="accordion-item" id="q3">
                            <a class="accordion-link" href="#q3">
                                WORST FIT
                            </a>
                            <div class="answer">
                              <p>  Worst Fit allocates a process to the partition which is largest sufficient among the freely available partitions available in the main memory. If a large process comes at a later stage, then memory will not have space to accommodate it.
                            </p>

                </section>
                <div class="fragmentation">
                    
                    <h2 id="heading">Fragmentation</h2>
                    
                    <p id="heading2">Fragmentation is an unwanted problem where the memory blocks cannot be allocated to the processes due to their small size and the blocks remain unused. It can also be understood as when the processes are loaded and removed from the memory they create free space or hole in the memory and these small blocks cannot be allocated to new upcoming processes and results in inefficient use of memory. </p>
                        
            <br><br>
                        <div class="frag">
                            <div class="frag-col">
                                <h3>Internal Fragmentation</h3>
                                <p>In this fragmentation, the process is allocated a memory block of size more than the size of that process. Due to this some part of the memory is left unused and this cause internal fragmentation.

                                    Example: Suppose there is fixed partitioning (i.e. the memory blocks are of fixed sizes) is used for memory allocation in RAM. These sizes are 2MB, 4MB, 4MB, 8MB. Some part of this RAM is occupied by the Operating System (OS). </p>
            
                        </div>
                            <div class="frag-col">
                                <h3>External Fragmentation</h3>
                                <p>In this fragmentation, although we have total space available that is needed by a process still we are not able to put that process in the memory because that space is not contiguous. This is called external fragmentation.

                                    Example: Suppose in the above example, if three new processes P2, P3, and P4 come of sizes 2MB, 3MB, and 6MB respectively. Now, these processes get memory blocks of size 2MB, 4MB and 8MB respectively allocated.
                        </div>
            
                   

                <style>
                   
                    .fragmentation{
                        width: 80%;
                        margin: auto;
                        text-align: center;
                        padding-top: 100px;
              
                      
                    }
                    .frag-col{
                        flex-basis: 45%;
                        background: rgb(179, 191, 209);
                        border-radius: 50px;
                        padding: 20px 12px;
                        box-sizing: border-box;
                        transition: 0.5s;
                        box-shadow: 10px 10px #787b83;
                }
                     .frag{
                       
                        display: flex;
                        justify-content: space-between;
                        
                    }
                    .frag-col:hover{
                        box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
                        
                    }
             
</style>            



</form>
</body>
</html>