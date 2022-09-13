<?php
      include(__DIR__.'../../inc/header.php');
    
      include(__DIR__.'../../inc/footer.php');

      if(isset($_POST['next']))
      {
        $fname = $_POST['Fname'];
        $gen = $_POST['radgen'];
        $age = $_POST['date'];
        $email = $_POST['email'];

        if(isset($_POST['submit']))
        {
            $photo = $_FILES['profile-pic']['name'];
            move_uploaded_file($_FILES['profile-pic']['tmp-name'],$photo);
            $password = $_POST['password'];

            $connect = mysqli_connect("localhost","root","","Tourism") or die("connection Error");
            $insert = "insert into user_info(Full_Name,Gender,Age,Email,Password,Profile_Pic) values('$fname','$gen','$age','$email','$password','$photo')";
            mysqli_query($connect,$insert);
        }
      }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="<?php echo site_url().'/Assets/css/signup.css';?>"/>
    </head>
    <body>
       <div id="name-info">
        <div class="name-info-container">
            <form action="" method="post">
                <div class="full-name">
                    <label>Full Name:</label>
                    <input type="text" name = "Fname" placeholder="Full Name"/>
                </div>
                <div class="gen">
                    <label>Gender:</label>
                    <input type="radio" name="radgen" value ="Male"/>Male
                    <input type="radio" name="radgen" value ="Female"/>Female
                    <input type="radio" name="radgen" value ="others"/>Others
                  <span class="date">
                    <label>Age:</label>
                    <input type="date" name ="date"/>
                  </span>
                </div>

                <div class="email">
                    <label>Email:</label>
                    <input type="email" name = "email" placeholder="abc@xyz.com"/>


                    <span class="Contact">
                        <label>Contact No. :</label>
                        <input type="tel" name = "contact" value="+977">
                    </span>
                </div>

                <div class="btn">
                    <input type="button" name = "next" value = "Next" onclick = "toggle()"/>
                </div>
            </form>
        </div>
       </div>

       <div id="img-password-section">
        <div class="img-password-container">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="profile-pic">
                    <label>Profile Picture:</label>
                    <input type="file" name = "profile-pic" accept="image/*"/>
                </div>

                <div class="password">
                    <label>Password:</label>
                    <input type="password" name = "password"/>
                    <label> Confirm Password:</label>
                    <input type="password" name = "password"/>
                </div>
                <input type="button" name ="submit" value = "Submit"/>
            </form>
        </div>
       </div>
       <script src="<?php echo site_url().'/Assets/script/script.js';?>"></script>
    </body>
</html>