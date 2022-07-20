<?php
session_start();
if(isset($_POST['submit']))
{
    $contact = $_SESSION['contact'];
    $email = $_SESSION['email'];
    $password = $_POST['password'];
    $photo = $_FILES['profile_pic']['name'];
    move_uploaded_file($_FILES['profile_pic']['tmp_name'],$photo);

   $connect = mysqli_connect("localhost","root","","tourism") or die("connection error");
    
    $insert = "update user_info set Imagepath = '$photo' , Password = '$password' where Email = '$email'";
    mysqli_query($connect,$insert);
}
?>







<html>
    <head>
        <title>signup</title>
        <link rel = "stylesheet" type = "text/css" href = "assets/css/signupimg.css"/>
    </head>
    <body>
        <div class="img-pwd-sec">
            <div class="img-pwd-wrapper">
                <form action="" method = "post" enctype = "multipart/form-data">
                <label>profile Picture:</label>

                    <input type="file" name = "profile_pic" accept = "image/*"/>

                    <div class="password">
                        <label>Passowrd:</label>
                        <input type="password" name = "password"/>
                        <label>Confirm Password:</label>
                        <input type="password"/>
                    </div>

                    <div class="submit-sec">
                        <input type="submit" name = "submit" value = "signup"/>
                    </div>
                </form>
            </div>
        </div>

        <div class="img-display-sec">
            <div class="display-wrapper">

                <div class="image" style="background-image:url('assets/pictures/dummyimg.jpg');"></div>
            </div>
        </div>
    </body>
</html>