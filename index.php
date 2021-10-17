<?php

    session_start();
    $session_active = true;
    if(!isset($_SESSION['loggedin'])){
        $session_active = false;
        session_destroy();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginProject/home</title>


    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- bootstrap js --->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" media="all" href="./cssFiles_here/styles.css" type="text/css">
    <link rel="stylesheet" media="all" href="./cssFiles_here/indexphp_styles.css" type="text/css">
 
</head>

<body>
    <?php 
        if(!$session_active){
            require './partials/_navbar.php';
        } 
        else {
            require './partials/logged_nav.php';
        }
    ?>

    <div class="helper mt-5">
        <div class=" textEffect col-md-8 col-sm-12 text-center">
            <h1 style="height : 10vh; width : 100%;" class=" my-5">Greetings, Traveller ! I'm <i id="whatami"></i></h1>
            <h3 style="height : 20vh;" class=" my-5"><i id="writing_textEffect"></i></h3>
        </div>

        <div class="imgcnt mt-5">
            <img id="mydp" src="./images/pp.jpg" alt="">
        </div>
    </div>

    <h2 class="text-center mb-5"> -: <span style="text-decoration: underline;">Key Skills</span> :- </h2>


    <div class="aboutme my-5">

        <div id="smthab" class="px-5 my-5 col-sm-12 col-md-6 mydesc ">I am a programmer . Very much intersted in web
            development both front End and back end
            using various technologies like <i class="text-green">HTML5</i>
            ,
            <i class="text-green">CSS</i> , <i class="text-green">JavaScript</i> , <i class="text-green">React
                redux</i> , <i class="text-green">Node.js</i> , <i class="text-green">Php
            </i>,
            <i class="text-green">MongoDb</i> ,<i class="text-green"> MySQL</i> , <i class="text-green">Java</i>
            , <i class="text-green">Apache
                server</i>
            , <i class="text-green">Heroku</i> , <i class="text-green">Digital Ocean</i> etc. looking forward to
            becoming a full
            time full stack developer .I
            am Also interested
            in Machine
            Learning .
        </div>

        <div id="bars" class="mybars col-md-6 col-sm-12">
            <div class="my-1">
                <h5><i>Communication</i></h5>
                <div class="progress">
                    <div id="communication" class="progress-bar bg-success" role="progressbar"
                        style="transition : all 2s ease ;">
                    </div>
                </div>
            </div>


            <div class="my-1">
                <h5><i>Team Player</i></h5>
                <div class="progress">
                    <div id="team" class="progress-bar bg-primary" role="progressbar"
                        style="transition : all 2s ease ;">
                    </div>
                </div>
            </div>

            <div class="my-1">
                <h5><i>Coding</i></h5>
                <div class="progress">
                    <div id="coding" class="progress-bar bg-success" role="progressbar"
                        style="transition : all 2s ease ;">
                    </div>
                </div>
            </div>

            <div class="my-1">
                <h5><i>New Technology Learning Ability</i></h5>
                <div class="progress">
                    <div id="newTech" class="progress-bar bg-primary" role="progressbar"
                        style="transition : all 2s ease ;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mb-5">

    <h2 class="text-center"> -: <span style="text-decoration: underline;">Technology expertise</span> :-</h2>
    <div class="techpart px-5 py-5">
        <div class=" techs" style="border-left : 1px dotted black; border-radius: 5px;">
            <h4 class="text-center">Front end</h4>
            <ul>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/html.png" alt="sry" style="transform : translate(-150% , 50%);">
                    <h6>HTML</h6>
                    <div class="progress mb-2">
                        <div id="htmlbar" class="progress-bar bg-primary" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>
                </li>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/css3.png" alt="sry">
                    <h6>CSS</h6>
                    <div class="progress mb-2">
                        <div id="cssbar" class="progress-bar bg-primary" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>
                </li>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/jsc.png" alt="sry" style="transform : translate(-110% , 50%);">
                    <h6>JavaScript</h6>
                    <div class="progress mb-2">
                        <div id="jsbar" class="progress-bar bg-primary" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>
                </li>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/bstp.png" alt="sry" style="transform : translate(-150% , 60%);">
                    <h6>BootStrap</h6>
                    <div class="progress mb-2">
                        <div id="bootstrapbar" class="progress-bar bg-primary" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>

                </li>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/jque.png" alt="sry" style="transform : translate(-150% , 60%);">
                    <h6>JQuery</h6>
                    <div class="progress mb-2">
                        <div id="jquery" class="progress-bar bg-primary" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>

                </li>

                <li class="my-1 techi_use">
                    <img class="logo spin" src="./images/react_svg.png" alt="sry">
                    <h6>React redux</h6>
                    <div class="progress mb-2">
                        <div id="reactbar" class="progress-bar bg-primary" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>

                </li>
            </ul>
        </div>
        <div class="techs " style="border-left : 1px dotted black; border-radius: 5px;">
            <h4 class="text-center">Back end</h4>
            <ul>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/php.png" alt="sry" style="transform : translate(-160% , 50%);">
                    <h6>Php</h6>
                    <div class="progress mb-2">
                        <div id="phpbar" class="progress-bar bg-success" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>
                </li>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/mysql_logo.png" alt="sry"
                        style="transform : translate(-120% , 50%);">
                    <h6>MySQL</h6>
                    <div class="progress mb-2">
                        <div id="mysqlbar" class="progress-bar bg-success" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>
                </li>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/node.png" alt="sry" style="transform : translate(-110% , 50%);">
                    <h6>Node.js</h6>
                    <div class="progress mb-2">
                        <div id="nodebar" class="progress-bar bg-success" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>
                </li>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/mongo.png" alt="sry" style="transform : translate(-170% , 50%);">
                    <h6>MongoDB</h6>
                    <div class="progress mb-2">
                        <div id="mongobar" class="progress-bar bg-success" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>
                </li>
                <li class="my-1 techi_use">
                    <img class="logo" src="./images/apache.png" alt="sry" style="transform : translate(-110% , 50%);">

                    <h6>Apache Server</h6>
                    <div class="progress mb-2">
                        <div id="apachebar" class="progress-bar bg-success" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>
                </li>

                <li class="my-1 techi_use">
                    <img class="logo" src="./images/git_logo.png" alt="sry" style="transform : translate(-150% , 50%);">

                    <h6>GitHub</h6>
                    <div class="progress mb-2">

                        <div id="gitbar" class="progress-bar bg-success" role="progressbar"
                            style="transition : all 1s ease ;">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <hr class="mb-5">
    <div class="container my-5">
        <div>
            <button class="myBtn btn-active" data-id="frontend">Front end Projects</button>
            <button class="myBtn " data-id="fullstack">Full Stack Projects</button>
            <button class="myBtn" data-id="others">Special Projects</button>
        </div>
    </div>

    <div id="projectcards">


    </div>


  
</body>
<script type="text/javascript" src='./js_scripts/aboutme_sc.js'>
</script>

</html>