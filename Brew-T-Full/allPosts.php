<?php

include 'Connection/db_connection.php';

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
                <a href="index.php#home"><img id="logo" src="Resources/Img/logo.JPG"  height="40" width="40" alt ="Brew-T-Full Logo"/></a>
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
              <!-- ***** End of Nav bar ***** -->
            </header>
    
                
        <!-- ***** Page heading and info ***** --> 
        <div class ="allPosts">
            <div class="secHead">Posts by Brew-T-Full</div>
            <div class="secInfo"></div> 
        </div>
           
        <!-- ***** End of Section ***** -->
        <div class ="allPosts">
            <div class="post">
                <h1 class="postTitle">Diamond Jubilee Tea Salon - <br>Fortnum and Mason's</h1>
                <h1 class="date">13/01/2019</h1>
                <p class="postInfo">An afternoon tea at a high end London department store Fortnum and Masons.
                    With both a savoury and sweet menu, Fortnum and Mason's have used their knowledge of the high end to produce a tea worthy of their name.
                    <br><a class="read" href="fortnumAndMasons.php" target="_blank">Read post</a></p>
            </div>
            <!-- ***** End of Post snippet ***** -->
            
            <!-- ***** Post snippet ***** -->
            <div class="post">
                <h1 class="postTitle">Mary Poppins Afternoon tea - <br>Aqua Shard</h1>
                <h1 class="date">08/01/2019</h1>
                <p class="postInfo">As you can probably guess from the title, this was a Mary Poppins themed Afternoon Tea
                    in the Shard's 42nd floor restaurant the Aqua shard. A tea with a breath taking view and a menu based on the writings of P.L. Travers.
                    <br><a class="read" href="MaryPoppins.php" target="_blank">Read post</a></p>
            </div>
            <!-- ***** End of Post snippet ***** -->
            
            <!-- ***** Post snippet ***** -->
            <div class="post">
                <h1 class="postTitle">Welcome to My Blog</h1>
                <h1 class="date">01/01/2019</h1>
                <p class="postInfo">Just a little welcome post for you. A little bit of an insight into my past experiences
                    and the places that I have already been. who knows it may inspire you of place to visit yourself!
                    <br><a class="read" href="welcomePost.php" target="_blank">Read post</a></p>
            </div>
        
            
            </div>
        <!-- ***** End of Post snippet ***** -->


         <!-- ***** Comments Section ***** -->
         <div class="container">

             <form class="form-horizontal" action="mary_poppins_comment_confirm.php" method="post">

                 <div>

                     <div class="form-group" >

                         <label for="commentSecs" class="control-label">Your Name</label>

                         <div >
                             <input required type="text" class="form-control" id="user_name" name="user_name">
                         </div>

                     </div>

                     <div class="form-group">

                         <label for="commentSecs" class="control-label">Your comment</label>

                         <div>

                             <textarea required type="text" class="form-control" id="user_comment"rows="3" name="user_comment"> </textarea>

                         </div>

                     </div>

                     <div class="form-group">

                         <label for="inputEmail3" class="control-label">Email</label>

                         <div>
                             <input type="email" class="form-control" id="user_email" name="user_email">
                         </div>

                     </div>


                     <div class="form-group">

                         <div >

                             <button type="submit" class="btn btn-primary btn-block">Leave your Comment</button>

                         </div>

                     </div>


                 </div>

             </form>

         </div>

         </br>
         </br>
         </br>
         </br>

         <div class="showComments">
             </br>
             <h3>Comments</h3>
             </br>

                <table class="showComments">

                    <?php

                        $sql="SELECT user_name, user_comment, date_created FROM `_brew_t_full_user_comments` WHERE webpage_id=1";

                        $r = mysqli_query($conn, $sql);

                        $num_of_rows = mysqli_num_rows($r);

                        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
                        {
                            print '<tr>';
                            print '<th>Date Posted</th>';
                            print '<td>'.$row['date_created'].'</td>';
                            print '</tr>';
                            print '<tr>';
                            print '<th>Name</th>';
                            print '<td>'.$row['user_name'].'</td>';
                            print '</tr>';
                            print '<tr>';
                            print '<th>Comment</th>';
                            print '<td>'.$row['user_comment'].'</td>';
                            print '</tr>';

                        }
                    ?>


                </table>


             </br>

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