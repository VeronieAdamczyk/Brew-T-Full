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
        <div class="postHead"> Mary Poppins Afternoon Tea <br/> The Shard</div>
        <div class="date">8th January 2019</div>
            <br/>
        <div class="menuHead">Menu</div> 
        <div class ="foodMenu">
        Sandwiches
        <br/>
        Cackleberry egg & black truffle sandwich <br/>
        Ms Kirkham's cheddar, Branston pickle & English mustard ploughman's sandwich <br/>
        Dingley Dell honey roast ham, mustard mayonnaise & Norfolk rocket cress sandwich <br/>
        Dressed Devon crab, cucumber & coriander served on a brioche roll <br/>
        Mini crumpet served warm with Scottish smoked salmon & cream cheese <br/>
        <br/>
        Freshly Baked Scones Homemade Jam & Cornish Clotted Cream
        <br/>
        <br/>
        Selection of Homemade Cakes and Sweet Treats
        <br/>
        <br/>
        'Strike me pink' sponge <br/>
        Fairground candy floss <br/>
        Mrs Corry's gingerbread star <br/>
        Mary's chocolate & cherry hat <br/>
        The 'back to front zoo' golden syrup tart <br/>
        </div><br/>
        <p class="wholePost">
            Pretty standard sandwich selection for afternoon tea but were all tasty. I liked that there was no cucumber sandwich and was replaced by the crab roll – not so good for ant who doesn’t really like fish, good for me as it gave me an extra sandwich. I especially liked the crumpet, I’d never thought of putting salmon and cream cheese on a crumpet but surprisingly it was a good combination.<br/><br/>

            Now I’m very fussy about scones. They can’t be dry, and they can’t have that weird after taste that leaves your tongue felling a bit fuzzy because they’ve put too much soda in them. These were some very good scones, they were light and fluffy and no funny after taste. The bonus here as well they were still warm which I think helped the flavour.<br/><br/>

            Cakes were delicious but I thought maybe the gingerbread star was a bit safe. We possibly ate the deserts in the wrong order as we had the sponge shortly after eating the scones which made it a bit heavy and dense. We possibly should have saved this one til last to break up the cakeyness. My favourite dessert was the golden syrup tart. It came in a little golden tin and was just pure heaven! It was sticky and syrupy but it was made less sweet by the addition of clotted cream and raspberries, a pudding I would happily have again.<br/><br/>
            
            The overall experience was lovely – we had gone to celebrate an anniversary, so the waitress brought us out a little tart and happy anniversary plate. The view was great and we chose a great time to go as it meant we were able to see London during the day, as the sun was setting and at night- only problem with the night time was that there wasn’t much lighting in the restaurant so was a bit difficult to see what we were eating but it was still a nice atmosphere. The waitress was very attentive and was also very knowledgeable of the Mary Poppins story so was able to provide us an insight into the link between the menu and the written stories of Mary Poppins.<br/><br/>   
            
            My only other thought about here is when I have gone for afternoon teas in the past, we have been offered refills of sandwiches or at least there was a hint that they were available. At the shard I didn’t feel like this was an option as there was the sense that you get what you’re given and that’s it.<br/><br/>

            
        </p>
        
            <br/><br/>
        <div class="return"><a href="allPosts.php">Back to all posts</a></div>
        <br/><br/>

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

                $sql="SELECT user_name, user_comment, date_created FROM `_brew_t_full_user_comments` WHERE webpage_id=3";

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