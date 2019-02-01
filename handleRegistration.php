<?php
    $conn = mysqli_connect("localhost", "root", "", "registration");
?>
<html>
	<head>
		<title>Sign Up</title>
	</head>
<body>	


<?php
    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $emailreg = $_POST['emailreg'];
        $mobileno = $_POST['mobileno'];
        $password = $_POST['password'];
        if(isset($_POST['gender']))
            $gender = $_POST['gender'];
        
        else
            $gender = 'M';
        
        $month = $_POST['month'];
        $day = $_POST['day'];
        $year = $_POST['year'];
        $dob=$year."-".$month."-".$day;
        $query = "insert into details (Firstname, Lastname, Email, Mobileno, Password, Gender, dob)values('$firstname', '$lastname', '$emailreg', '$mobileno', '$password', '$gender', '$dob')";
        $run = mysqli_query($conn, $query);
        
        if($run){
            ?>
            <p>Data Entered Successfully</p>
            <a href="index.php">Click to go back</a>
            <?php
        }
        else{
            echo "Error:".mysqli_error($conn);
        }
        
    }

?>

</body>
</html>