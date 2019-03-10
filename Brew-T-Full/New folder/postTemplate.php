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
                            <li><a href="index.html#home">Home</a></li>
                            <li><a href="index.html#about">About</a></li>
                            <li><a href="index.html#posts">Posts</a></li>
                            <li><a href="index.html#gallery">Gallery</a></li>
                        </ul>
                    </nav>
                </div>
        </header>
        <!-- ***** End Nav bar ***** -->
        
        <!-- ***** Blog Post ***** -->
        
        <div class="blogPostFull">
        <div class="postHead">  <br/> </div>
        <div class="date"></div>
            <br/>
        <div class="menuHead">Menu</div> 
        <div class ="foodMenu">

        </div><br/>
        <p class="wholePost">

            
        </p>
            <br/><br/>
        
        <div class="return"><a href="allPosts.html">Back to all posts</a></div>
        
            <br/><br/>
        </div>
        <!-- ***** End of Post ***** -->
        
        
        <!-- ***** Comments Section ***** -->
        <div class="container">
        <div class="col-xs-4"></div>
        
        <form class="form-horizontal">
            
            <div class="col-xs-4">
            
          <div class="form-group" >

            <label for="commentSecs" class="control-label">Your Name</label>

            <div >
              <input type="text" class="form-control" id="commentSec" placeholder="Your Name">
            </div>

          </div>
            
        <div class="form-group">  
          
            <label for="commentSecs" class="control-label">Your comment</label>
          
            <div>
                
                <textarea type="text" class="form-control" id="commentSec" placeholder="Have your say..." rows="3"> </textarea>
                
            </div>
          
        </div>
  
        <div class="form-group">  
            
            <label for="inputEmail3" class="control-label">Email</label>
            
            <div>
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
            
        </div>
            
            
          <div class="form-group">
              
            <div >
                
              <button type="submit" class="btn btn-primary btn-block">Leave your Comment</button>
                
            </div>
              
          </div> 
                
               
    </div>
                     
</form>
        
<div class="col-xs-4"></div>
</div> 
        <!-- ***** End of Comments Section ***** -->
        
        <!-- *****Footer ***** -->
        <footer>
        &copy;
        </footer>
        <!-- ***** End of Footer ***** -->
        
        <!-- ***** Javascript links ***** -->

        <script src="Resources/JS/main.js"></script>
    </body>
    
</html>