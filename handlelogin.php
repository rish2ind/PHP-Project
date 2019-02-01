<?php
    $conn = mysqli_connect("localhost", "root", "", "registration" );
?>
   <html>
    <body>
       <center>
        <?php
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        
        
           if(isset($_POST["Login"])){
               $email = $_POST['email'];
               $pwd = $_POST['pwd'];
               $query = "select * from details where email='$email' && password='$pwd'";
               $result = mysqli_query($query, $conn);
               if(mysqli_num_rows($result)<=0){
                   ?>
                   <p>Invalid Username</p>
                   <a href="index.php">Click to go back</a>
                   <?php
               }
               else
                    echo "Authentication Successfully";    
           }
            ?>
        </center>
    </body>
</html>