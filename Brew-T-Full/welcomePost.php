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
        </header>
        <!-- ***** End Nav bar ***** -->
        
        <!-- ***** Blog Post ***** -->
        
         <div class="blogPostFull">
             <div class="postHead"> Welcome to <br/> My Blog</div>
        <div class="date">1st January 2019</div>
            <br/>
        <p class="wholePost">
            I love afternoon tea.  I’ve been going to afternoon teas since I was 13 and plan on doing so for a very long time. I mean who doesn’t love the idea of getting dressed up, sitting in a room listening to a pianist tinkling away on the keys, eating tiny little sandwiches and tiny little cakes while sipping on a cup of tea or a glass of champagne. It’s something I like to do, particularly with my mum. It’s become sort of a tradition where we will pick a place to go to every year where we have a Mother Daughter Day, just the two of us. <br/><br/>
            Over the years we have been to numerous venues for teas:
            <br/>
            <br/>
            -The Dorchester<br/>
            -The Berkley Hotel<br/>
            -The Ritz<br/>
            -The Sanderson<br/>
            -The Langham  <br/>
            -The Savoy  <br/>
            -Claridges <br/>
            -Blenheim Palace <br/>
            -The Old Parsonage <br/>
            -Mandarin  <br/>
            -Browns  <br/>
            -Penny Hill Park <br/>
            -Sanctum Soho hotel <br/>
            -Forbury hotel reading <br/><br/>

            And those are just the ones that I can remember we’ve been to, I’m sure there’s probably some I have forgotten somewhere. <br/>
            <br/>Each of the venues we have been to have brought something different. Some venues provide refills on sandwiches so you can eat as much as you like, I think this is seen as a challenge by my brother at times. I think his record so far has been 5 rounds of sandwiches and he still has room for the scones and cakes. <br/>
            <br/>Some venues have offered a sweet and a savory option. This is good as it means that we can order one of each kind and share them. This works well as by having a savory option you get some relief from the sweetness of some of the desserts. <br/>
            <br/>So here it is a place for me to write my thoughts on where we go and what we eat. A way to remember what we thought about the experiences we’ve had and to share with others. <br/>
            I hope you enjoy reading.
            <br/><br/>
            
        </p>
        <br/><br/>
        <div class="return"><a href="allPosts.php">Back to all posts</a></div>
        <br/><br/>
        
        <!-- ***** End of Post ***** -->
         </div>
        <!-- ***** End of Post ***** -->


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

        <!-- ***** End of Comments Section ***** -->

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

                $sql="SELECT user_name, user_comment, date_created FROM `_brew_t_full_user_comments` WHERE webpage_id=2";

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
        <!-- *****Footer ***** -->
        <footer>
        &copy; Brew-T-Full 2019
        </footer>
        <!-- ***** End of Footer ***** -->
        
        <!-- ***** Javascript links ***** -->

        <script src="Resources/JS/main.js"></script>
    </body>
    
</html>