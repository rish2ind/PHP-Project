<!DOCTYPE html>
<html>
   <head>
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
   <script src="js/script.js"></script>
   <link rel="icon" type="image/gif" href="PHP_Images/contact.png" sizes="16*16">
    </head>
    <body id="contact-page">
     
        <div class="containers">
           <header class="header">
           <img src="Images_Home/Ashoke.jpg" alt="Ashoke Stambh" width="80px" height="90px" style="float: left; position: relative; top: -10px; left: -10px;">
            <a class="link-title" href="index1.php"><h1>India</h1></a>
            </header>
            <nav class="Menu">
            <a href="index.php">Home</a> &nbsp; &nbsp; &nbsp;
            <a href="about.php">About Us</a> &nbsp; &nbsp; &nbsp;
            <a href="contact.php">Contact</a> &nbsp; &nbsp; &nbsp;
            <a href="logout.php">Logout</a>
            </nav>
              
            <article class="main">
                <div class="form">
                    <form id="form" action="process.php" method="post">
                    
                    
                        <input class="Text" type="text" name="Name" placeholder="Your Name" required="">
                        <br>                    
                    
                        <input class="Text" type="email" name="Email" placeholder="Your Email" required="">
                        <br>
                        <textarea name="message" class="Text" rows="4" required="" placeholder="Feedback here...."></textarea><br>
                        <input type="submit" class="submit" value="SEND MESSAGE">
                    
                </form>        
                </div>
           
         

              
         
   </article>
            
             <footer class="footer">
                
                &copy; 2020 Indian Site &nbsp;<span class="saparator">|</span> Design by <a href="www.rishabhmathur.com" target="_blank">Rishabh Mathur</a>
            </footer>
        </div>
    
    </body>
</html>