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
                        <input type="radio" name = "radgen" value = "Feale"/>Female
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
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>