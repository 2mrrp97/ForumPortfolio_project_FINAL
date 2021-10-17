<?php
    require './partials/_dbconnect.php';

    session_start();
    $session_active = true;
    $category_id = isset($_GET['catid']) ? $_GET['catid'] : "all";
    $user_id = "";
   

    if(!isset($_SESSION['loggedin'])){
        $session_active = false;
        session_destroy();
    }
    else
        $user_id = $_SESSION['username'];

    if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['question']) && isset($_POST['desc'])){
        $question = $_POST['question'];
        $desc = $_POST['desc'];
        $sql = "INSERT into `threadlist` (`thread_id_`,`category_id`,`owner_id_` , `question_` , `description_` , `posted_on`) values ('', '$category_id' , '$user_id' , '$question' , '$desc' , current_timestamp())";
        $res = mysqli_query($connection , $sql);
        if($res){
            header('location: ./threads.php?&catid='.$category_id.'&tid='.mysqli_insert_id($connection));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginProject/create_thread
    </title>
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- bootstrap js --->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" media="all" href="./cssFiles_here/styles.css" type="text/css">
    <style>
        .threadBox {
            padding: 50px 30px;
            background: rgb(66, 66, 66);
            box-shadow: 5px 5px 10px black;
            display: flex;
            flex-direction: column;

        }

        .inputBox {
            width: 80%;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
            box-shadow: 5px 5px 10px black;
        }
    </style>
</head>

<body>
    <?php 
        if(!$session_active){
            require './partials/login_needed_to_create.php';
            echo '<script>';
            require './js_scripts/login_form_validation.js';
            echo '</script>';
            exit();
        } 
        else {
            require './partials/logged_nav.php';
        }
    ?>

    <div class="threadBox container my-5">

        <form class="inputBox px-5 py-5 bg-light" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
            <h5 class="mx-2 ">Hi , <i style="color :red ;">
                    <?php echo $user_id; ?>
                </i> ! to Create a new Thread , you need to fill in the required
                fields , please fill up the fields carefully.</h5>

            <div class="container-fluid my-3 px-2 py-2">
                <textarea class="inputs " id="ques" class="my-3" rows="3" cols="50" name="question"
                    placeholder="Write Your Question Here ..."><?php
                        if(isset($_POST['question'])  && !$valid_thread)
                            echo $_POST['question'];
                    ?></textarea>
                <div class="form-text" style="color : black ;"> Please keep your question as to the point and crisp as
                    possible . </div>
            </div>
            <div class="container-fluid my-3 px-2 py-2">
                <textarea class="inputs " id="desc" class="my-3" rows="6" cols="70" maxlength="500" name="desc"
                    placeholder="Please Describe your Problem a little bit more ..."><?php
                        if(isset($_POST['desc']) && !$valid_thread)
                            echo $_POST['desc'];
                    ?></textarea>

            </div>
            <div id="blank_prompt" class="form-text px-2 my-2 invisible" style="color : red ;">
                <strong> Oops ! None of Fields can be empty , or Something else went wrong please try again. </strong>
            </div>
            <div class="container">
                <button id="postthread" class="btn btn-dark">
                    Post Thread
                </button>
            </div>

        </form>
    </div>

</body>
<script>

    postthread.addEventListener('mouseover', () => {
        if (desc.value == "" || ques.value == "") {
            blank_prompt.classList.remove('invisible');
            postthread.disable = true;
        }
    });

    document.querySelectorAll('.inputs').forEach(elem => {
        elem.addEventListener('input', () => {
            if (desc.value != "" && ques.value != "") {
                blank_prompt.classList.add('invisible');
                postthread.disable = false;
            }
        });
    });
</script>

</html>