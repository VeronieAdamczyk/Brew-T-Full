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
        <div class="postHead">Diamond Jubilee Tea Salon - <br>Fortnum and Mason's</div>
        <div class="date">13th January 2019</div>
            <br/>
        <div class="menuHead">Menu</div> 
        <div class ="foodMenu">
            Sandwiches
            <br/>
            Rare Breed Hen’s Egg Mayonnaise with English Cress <br/>
            Cucumber with Mint Cream Cheese<br/>
            Suffolk Ham with English Mustard <br/> 
            Scottish Smoked Salmon with Tartare Dressing<br/>
            Coronation Chicken <br/>
            <br/>
            <br/>    
            Traditional Afternoon Tea
            <br/>
            <br/>
            Scones<br/>
            Plain & Fruit Scones<br/> Presented with Clotted Cream, Fortnum & Mason Strawberry Preserve and Lemon Curd
            <br/>
            <br/>
            Afternoon Tea Cakes<br/>
            Selection of individual Pâtisseries and your choice from our Cake Carriage
            <br/>
            <br/> 
            <br/>
            <br/> 
            Savoury Afternoon Tea
            <br/>
            <br/>
            Savoury Scones<br/>
            Cornish Lobster Scone with Brandy Egg Cream Cheese<br/>
            Barber’s Cheddar and Spinach Scone with Tomato Chutney <br/>
            <br/>
            <br/>
            Afternoon Tea Savouries<br/>
            Oeuf Drumkilbo <br/>
            Scotch Quails Egg <br/>
            Hot Smoked Salmon Pate with Caviar<br/>
            Duck Liver Mousse with Blackberry Jelly<br/>
            Wild Mushroom Truffle Éclair<br/>
            Followed with your choice from our Cake Carriage
        </div><br/>
        <p class="wholePost">
            This Afternoon Tea was what I’d call your more traditional Afternoon Tea. The sandwiches followed the traditional format of an egg, a salmon, a cucumber, a ham and one other. This just happened to be coronation chicken which I quite happen to like so no complaints. The only downside was the cucumber sandwich as it didn’t really appear to have much flavour, but I still ate it all the same but first so that I could save some of the other flavours for after. <br/><br/>

            As there was the option for a Savoury and Traditional tea, Ant and I went for one each with the idea of sharing so that we could experience both. <br/><br/>

            We started with eating the Savoury Tea. First up were the scones. It was easy to distinguish between the flavours as the Lobster scone had a particularly strong lobster flavour while the Cheddar scone was subtler but still tasted delicious. The savouries were delicious, you could tell that you were in a place that valued quality of food with the inclusion of more lobster, caviar and frois gras in there savouries. The wild mushroom éclair was given solely to Ant as I am not a lover of mushrooms but I was able to eat the ‘Oeuf Drumkilbo’ my self as this was more of a lobster cocktail so worked out pretty evenly for the both of us. <br/><br/>

            After finishing the Savoury Tea we moved onto the Traditional Tea. Starting with the scones which had the inclusion of lemon curd as a topping. This was a great change as usually it is scones with cream and jam but the lemon curd added a bit of a tangy side which cut through the sweetness. The cakes seemed fairly similar to those we’d have earlier in the week as it included a black forest desert and a treacle tart. The favourite desert out of those we were given was an orange cheesecake. This was due to it being something different and it not being too sweet. <br/><br/>

             Both teas were concluded with a choice of cake from the cart. The choices were between a chocolate cake, Victoria sponge and another sponge (the flavour I can’t quite remember). We both decided on the Victoria sponge but as we were both full, we decided to take the slice of cake home with us to eat later. The sponge was nice but for me there was just too much cream as the cake was covered in what I think was whipped cream rather than butter cream. <br/><br/>

             I found the experience at Fortnum and Masons to be great. The service was great (although we did have to ask a second time for our teas to be refilled but this was the only thing we had to ask for twice).  They also seemed very keen to encourage you to eat as much as you wanted with the waitress offering us refills on everything and even offering us a complete second plate of the cakes from the traditional tea so that we didn’t have to share. <br/><br/>

            I think I’d be interested to go here again to see what else they have to offer as I can see that they are a place that will update their menu on a frequent basis. <br/><br/>           
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

                $sql="SELECT user_name, user_comment, date_created FROM `_brew_t_full_user_comments` WHERE webpage_id=4";

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


        <!-- *****Footer ***** -->
        <footer>
        &copy;
        </footer>
        <!-- ***** End of Footer ***** -->
        
        <!-- ***** Javascript links ***** -->

        <script src="Resources/JS/main.js"></script>
    </body>
    
</html>