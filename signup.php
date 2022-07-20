<?php

session_start();
if(isset($_POST['submit']))
{
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $gen = $_POST['radgen'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];


    $connect = mysqli_connect("localhost","root","","tourism") or die("connection error");
    $insert = "insert into user_info values ('$fname','$mname','$lname','$dob','$gen','$email','$contact','','')";
    mysqli_query($connect,$insert);
    $_SESSION['email'] = $email;
    $_SESSION['contact'] = $contact;

}

?>








<!DOCTYPE html>
<html>
    <head>
        <title>signup</title>
        <link rel = "stylesheet" type = "text/css" href = "assets/css/signup.css"/> 
    </head>
    <body>
        <div class="signup-form-section">
            <div class="signup-wrapper">
                <form action="" method = "post">
                    <div class="name-section">
                        <label>Full Name:</label>
                        <input type="text" name = "firstname" placeholder = "First Name"/>
                        <input type="text" name = "middlename" placeholder = "Middle Name"/>
                        <input type="text" name = "lastname" placeholder = "Last Name"/>
                    </div>

                    <div class="dob">
                        <label >DOB:</label>
                        <input type="date" name = "dob"/>
                        <label >Gender:</label>
                        <input type="radio" name = "radgen" value = "Male"/>Male
                        <input type="radio" name = "radgen" value = "Female"/>Female
                        <input type="radio" name = "radgen" value = "Others"/>Others
                    </div>
                    <div class="contacts">
                        <label >Email:</label>
                        <input type="email" name = "email" placeholder = "abc@abc.com"/>

                        <label>Conctact no:</label>
                        <input type = "text" name = "contact"/>
                    </div>
                    <p>By clicking on submit you would allow us to store your information permanently.</p>
                    <div class="btn-section">
                        <input type="submit" name = "submit" value = "submit"/>
                    <a href="signupimg.php" class="btn">Next</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>