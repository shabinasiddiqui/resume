<?php
error_reporting(0);
include("connection.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylesheet/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&family=Kanit:ital,wght@1,300&family=Rubik&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

</head>

<body onscroll="change()">
    <section id="home">
        <div id="navbar">
            <div id="container">
                <div>
                    <li><a href="#home" class="anchor">HOME</a></li>
                </div>
                <div>
                    <li><a href="#about" class="anchor">ABOUT</a></li>
                </div>
                <div>
                    <li><a href="#skill" class="anchor">MY SKILLS</a></li>
                </div>
                <div>
                    <li><a href="#contact" class="anchor">CONTACT</a></li>
                </div>
            </div>
        </div>
        <div class="home-content">
            <div class="home-content-inner">
                <div class="home-h2">
                    <h2>HELLO,</h2>
                </div>
                <div class="home-header">
                    <header>I'M SHABINA SIDDIQUI</header>
                </div>
                <div class="home-p">
                    <p>COMPUTER ENGINEERING STUDENT</p>
                </div>
            </div>
        </div>

    </section>
    <!-- about me -->
    <section id="about">
        <div id="about-container">
            <div class="header about-header">
                <header>Let's Introduce About Myself</header>
            </div>
            <div class="about-box">


                <div class="about-para">
                    <div>
                        <p>Hello! I am Shabina Siddiqui studying in Rizvi College Of Engineering. A hardworking Engineer always eager to learn new skills and able to handle multiple task. I love making projects and I'm very passionate about coding, give
                            most of my time in coding. </p>
                    </div>
                    <div>
                        <p>I,m currently learning Node js,React js,Machine learning and working on few Web Development projects.</p>
                    </div>
                </div>
                <div class="about-img"><img src="./images/shabina.jpg" class="me-img"></div>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skill">
        <div class="header">
            <header>MY SKILLS</header>
        </div>
        <div class="skill-box">
            <!-- <div class="ui">
                <div> <img src="./images/ui-img.jpg" class="webdev-img"></div>
                <div></div>
                <h2 class="div-h2">UI/UX</h2>
                <div class="div-btn"><button id="btn-skill">Learn More</button></div>
            </div>
            <div class="webdev">
                <div> <img src="./images/web-img.jpg" class="ui-img"></div>
                <div></div>
                <h2 class="div-h2">Web Development</h2>
                <div class="div-btn"><button id="btn-skill">Learn More</button></div>
            </div>
            <div class="ml">
                <div> <img src="./images/ml-img.jpg" class="ml-img"></div>
                <div></div>
                <h2 class="div-h2">Machine Learning</h2>
                <div class="div-btn"><button id="btn-skill">Learn More</button></div>
            </div> -->
            <div class="container_a">

                <div class="logo">
                    <div class="flex"><img class="php logo-img" src="./images/php.png"></div>
                    <div class="flex"><img class="bootstrap logo-img" src="./images/bootstrap.png"></div>
                    <div class="flex"><img class="python logo-img" src="./images/python.png"></div>
                    <div class="flex"><img class="java logo-img" src="./images/java.png"></div>
                    <div class="flex"><img class="c_plus logo-img" src="./images/c++.png"></div>
                    <div class="flex"><img class="c logo-img" src="./images/c.png"></div>
                    <div class="flex"><img class="html logo-img" src="./images/html.png"></div>
                    <div class="flex"><img class="js logo-img" src="./images/js.png"></div>
                    <div class="flex"><img class="css logo-img" src="./images/css (2).png"></div>
                    <div class="flex"><img class="mysql logo-img" src="./images/mysql.png"></div>
                </div>

            </div>

    </section>
    <!-- CONTACT -->
    <section id="contact">
        <div class="header">
            <header>CONTACT</header>
        </div>
        <div class="contact-box">
            <div class="contact-left">
                <div class="h1">
                    <h1>Lets Get In Touch</h1>
                    <hr>
                </div>

                <div class="inner-box">
                    <div class="inner-inner-box">


                        <div class="phone">
                            <div><i class="fa fa-phone-square fa-2x" style="color:green" aria-hidden="true"></i></div>
                            <div><a href="tel:8108323982"> 8108323982</a></div>
                        </div>
                        <div class="email">

                            <div class="gmail"><img src="./icons/Gmail-Logo.svg" id="gmail"></div>
                            <div><a href="mailto:siddiquishabina10@gmail.com">siddiquishabina10@gmail.com</a></div>
                        </div>
                        <div class="icons">
                            <div class="git-icon">
                                <a href="https://github.com/shabinasiddiqui" id="git"><i class="fa fa-github-square" aria-hidden="true"></i> </a>

                            </div>
                            <div class="hack">
                                <a href="https://www.hackerrank.com/Shabinasiddiqui"> <img src="./icons/hackerrank.webp" id="hack"></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php
            // if(isset($_POST['submit'])) 
            //  {
            // echo "New record created successfully";
            //  }                      
            //     ?>
            <form action="index.php" method="POST">

                <div class="contact-right">
                    <div class="name-phone">
                        <div class="div1"><input type="text" name="username" id="text" placeholder="  Name"></div>
                        <div class="div2"><input type="number" name="number" id="phone" placeholder="  Phone"></div>
                    </div>
                    <div class="div3"><input type="email" name="email" id="email" placeholder="  Email Address"></div>
                    <div class="div4"><textarea name="message" id="msg" cols="20" placeholder="  Message"></textarea></div>
                    <div class="div5"><input type="submit" name="submit" id="btn" value="Send Message"></div>
                </div>
            </form>

        </div>

    </section>

</body>
<script src="./script/index.js"></script>

</html>