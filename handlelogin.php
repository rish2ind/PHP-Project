<html>
    <body>
       <center>
        <?php
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $sql="select * from registration where email = '$email' and password = '$pwd' ";
            
            $dbServername = "localhost";
            $doUsername = "root";
        $dbPassword = "";
        $dbName = "registration";
        
        $conn = mysqli_connect($dbServername,$doUsername,$dbPassword,$dbName);
           if(!$conn){
               die("Connection failed: ".mysqli_connect_error());
           }
        $db = null;
        $db = mysql_select_db($dbName,$conn); 
        
        $resultval = mysql_query($sql,$conn);
        if(mysql_num_rown($resultval) <=0){
            ?>
            <br><p style="color:red">Invalid Username or Password</p><br>
            <a href="index.php">Click to go back</a>
            <?php
        }
        
            else
                    echo "<h1>Authenticated successfully.</h1>";
            mysql_close($conn);
            ?>
        </center>
    </body>
</html>