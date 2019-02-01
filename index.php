<html>
    <head>
        <title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="PHPstyle.css" type="text/css">
    </head>
    
    <body>
        <div id="header">
            <div class="fl" id="headertitle">
                Social Media Home
            </div>
            <div id="headerlogin" class="fr">
                
                   <form action="handlelogin.php" method="post">
                   
                     <div class="fr" style="padding-right:20px;"><br>
                    
                    <input type="submit" name="Login" value="Login"></div>
                    
                    <div class="fr" style="padding-right:20px;">Password<br><input type="password" name="pwd" placeholder="password"><br><a href="forgetpwdpage.php" style="color:#ffffff; text-decoration:none;">Forget your password?</a></div>
                    
                    <div class="fr" style="padding-right:20px;">Email<br><input type="email" name="email" placeholder="email id"><br><input type="checkbox" name="chkkeeplogin">Keep me logged in</div>
                </form>
            </div>
        </div>
        <div id="midcontent">
            <div class="fl" style="width:550px; padding-left:150px; padding-top:150px; border:0px solid;">Connect with friends and the <br>world around you. <br><br>
             See photos and news updates from friends. <br><br>
             Find more of what you are looking for <br><br>
             </div>
             <div class="fl" style="border:0px solid; margin-left:10px; float:right;">
                 <table style="float:left" border="0">
                    
                    
                    
                     <form action="handleRegistration.php" method="POST" name="frmregs">
                         <tr><td colspan="2" style="font-size:48px">Sign Up</td></tr>
                         <tr><td colspan="2"></td></tr>
                         
                         
                         <tr><td width="150px"><input type="text" class="biginput" placeholder="firstname" name="firstname" style="width:150px;" required=""></td>
                         
                         <td><input type="text" name="lastname" placeholder="last name" class="biginput" style="width:150px;" required=""></td></tr>
                         
                         <tr><td colspan="2"><input type="text" placeholder="Email" style="width:304px" name="emailreg" class="biginput" required=""></td></tr>
                         
                         <tr><td colspan="2"><input type="text" placeholder="Mobile no" style="width:304px" name="mobileno" class="biginput" required=""></td></tr>
                         
                         <tr><td colspan="2"><input type="password" placeholder="New Password" style="width:304px" name="password" class="biginput" required=""></td></tr>
                         <tr><td colspan="2" style="font-size:16px;">Birthday</td></tr>
                         <tr><td colspan="2"><select name="month" class="biginput">
                            <option>Month</option>
                             <option value="01">January</option>
                             <option value="02">February</option>
                             <option value="03">March</option>
                             <option value="04">April</option>
                             <option value="05">May</option>
                             <option value="06">June</option>
                             <option value="07">July</option>
                             <option value="08">August</option>
                             <option value="09">September</option>
                             <option value="10">October</option>
                             <option value="11">November</option>
                             <option value="12">December</option>
                        </select>
                         <select name="day" class="biginput">
                             <option>Day</option>
                             <?php for($i=1; $i<=31; $i++)
                                echo "<option value=$i>$i</option>";
                             ?>
                         </select>
                         <select name="year" class="biginput">
                             <option>Year</option>
                             <?php for($i=date("Y"); $i>=date("Y")-90; $i--)
                                echo "<option value=$i>$i</option>";
                             ?>
                         </select> 
                         </td></tr>
                         <tr><td colspan="2"><input type="radio" name="gender" value="">Female
                         <input type="radio" name="gender" value="">Male</td></tr>
                         <tr><td colspan="2" width="350">By clicking Sign Up, you are agree to our Terms and that you have read our Data Policy, including our Cookies Use.</td></tr>
                         <tr><td colspan="2"><input type="submit" class="biginput" name="submit" value="Sign Up" style="background-color:#f1f1f1; width:150px;"></td></tr>
                     </form>
                 </table>
             </div>
             <div style="clear:both;"></div>
        </div>
    </body>
</html>