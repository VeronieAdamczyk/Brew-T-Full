<?php

include 'Connection/db_connection.php';

$_dtz= new DateTimeZone('Europe/London');
$_date_created = new DateTime('',$_dtz);


if (isset($_POST['user_name'])=== TRUE)
{

    $user_name = $_POST['user_name'];
    $user_comment = $_POST['user_comment'];
    $user_email = $_POST['user_email'];


   $sql=" INSERT INTO `_brew_t_full_user_comments` SET
            webpage_id = 3,
            user_name='" . mysqli_real_escape_string($conn, $user_name) ."',
            user_comment ='" . mysqli_real_escape_string($conn, $user_comment) ."',
            user_email ='" . mysqli_real_escape_string($conn, $user_email) ."',
            date_created = '" . $_date_created->format('Y-m-d') . "'";

   $r = mysqli_query($conn, $sql) or die (mysqli_error($conn));


}



?>


<!doctype html>
    <html>

        <head>

            <title>Brew-T-Full</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale = 1"/>

            <!-- CSS Stlying links -->

            <!-- Bootstrap -->

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!-- ***** Font Awesome CDN CSS versoin 5.2.0 ***** -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

            <!-- ***** Custom CSS ***** -->
            <link rel="stylesheet" type="text/css" href="Resources/CSS/main.css"/>



        </head>

        <body>

            <header>
                <!-- ***** Logo ****** -->
                <div id="Logo">
                    <a href="#home"><img id="logo" src="Resources/Img/logo.JPG"  height="40" width="40" alt ="Brew-T-Full Logo"/></a>
                </div>
                <!-- ***** Nav bar ***** -->
                <div class="navBar">

                    <a href="javascript:void(0);" class="icon" onclick="mobileMenu()"><i class="fas fa-bars"></i></a>
                    <nav>
                        <ul id ="ddMenu"class="menu">
                            <li><a href="index.php#home">Home</a></li>
                            <li><a href="index.php#about">About</a></li>
                            <li><a href="index.php#posts">Posts</a></li>
                            <li><a href="index.php#gallery">Gallery</a></li>
                        </ul>
                    </nav>
                </div>
            </header>



        <div class="commentConfirm">

            <div class="breadcrumbDiv">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="index.php">Brew-T-Full Home</a></li>
                    <li class="breadcrumb-item"><a href="allPosts.php">All Posts</a></li>
                    <li class="breadcrumb-item"><a href="MaryPoppins.php">Mary Poppins Afternoon Tea</a></li>
                    <li class="breadcrumb-item active"><a>Comment Saved</a></li>

                </ol>
            </div>

            <div class="confirmMessage"></br></br>
                Thank you for your Comment. It will now appear on the post page. To return please click <a href="MaryPoppins.php">here</a>.
                </br></br></br></div>

        </div>

            </br>
            </br>
            </br>

            <footer>
                &copy; Brew-T-Full 2019
            </footer>

            <!-- ***** Javascript links ***** -->

            <script src="Resources/JS/main.js"></script>

        </body>

    </html>