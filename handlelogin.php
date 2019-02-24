<?php
    $conn = mysqli_connect("localhost", "root", "", "registration" );


?>
   <html>
    <body style="background: url(PHP_Images/Background.jpg);">
       <center>
        <?php
            if(isset($_POST['Login'])){
                $email = $_POST['email'];
                $pass = $_POST['pwd'];
                
                $sql = "select * from details where email='".$email."' AND password='".$pass."'";
                $result=mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($result)==1){
                    echo "You are successfully logged in ";
                    ?>
                    <br><a href="HTML_Files/index.html">Click here</a>, to redirect to Official Site of Indian Information .
                    <?php
                    exit();
                }
                else{
                    echo "Wrong email or password";
                    ?>

                    <br><a href="index.php">Click to go back.</a>    
                    <?php
                    exit();
                }
            }
        
           ?>
        </center>

    </body>
</html>