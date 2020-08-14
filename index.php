<?php 
require 'DBconnect.php';

 $error = '';

 if(isset($_POST['submit'])){


    if(empty($_POST['name'])||empty($_POST['address'])||empty($_POST['gender'])||empty($_POST['birth_date'])
    ||empty($_POST['age'])||empty($_POST['phone_no'])||empty($_POST['email'])){

        $error = 'Please fille in the all blanks';
    }else{

    $uname = $_POST['name'];
    $uadress = $_POST['address'];
    $ugender = $_POST['gender'];
    $udob = $_POST['birth_date'];
    $uage = $_POST['age'];
    $uphoneno = $_POST['phone_no'];
    $uemailid = $_POST['email'];

    $query = "INSERT INTO user (UserName,Address,Gender,DOB,Age,PhoneNo,Email_ID) VALUES 
    ('$uname','$uadress','$ugender','$udob','$uage','$uphoneno','$uemailid')";
    $result = mysqli_query($conn,$query);

    if($result){
        header("location:index.php");
    }else{
        echo 'User Registration Failed.';
    }

    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
   
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img align-middle">
                    <img src="images/add_user_3.png" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>User registration form</h2>
                        <h3 class="text-danger"><?php echo $error ?></h3>
                        <div class="form-group">
                            <label for="address">Name :</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address"/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="male" id="male">
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="female" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="text" name="birth_date" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Age :</label>
                            <input type="text" name="age" id="age">
                        </div>
                        <div class="form-group">
                            <label for="email">Phone No :</label>
                            <input type="number" name="phone_no" id="phone_no" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-submit">
                            <input type="button" value="View User Details" class="submit" name="reset" id="reset" onclick="location.href='table.php'" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>