<?php
    include(__DIR__.'../../inc/header.php');
    
    include(__DIR__.'../../inc/footer.php');

    if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connect = mysqli_connect("localhost","root","","tourism") or die("connection error");

    $select = "select * from user_info where Email = '$email' and Password = '$password'";

    $result = mysqli_query($connect,$select);

    if(mysqli_num_rows($result) != 0)
    {
        echo "welcome";
    }
    else
    {
        echo "invalid";
    }
}


?>



<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo site_url().'/Assets/css/login.css';?>"/>


    </head>
    <body>
        <div class="login-box">
            <div class="login-wrapper">
                <form action="" method="post">
                    <div class="form-element name">
                        <label>Email:</label>
                          <input type = "text" name = "email"/>  
                    </div><!-- name -->
                    <div class="form-element password">
                        <label>Password:</label>
                            <input type="text" name ="password"/>
                    </div><!-- password -->
                    <div class="button-section">
                        <input type="submit" name = "submit" value = "Log In" class="button login"/>
                        <a href ="<?php echo site_url().'/controller/signup.php';?>" class ="button">signup</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>