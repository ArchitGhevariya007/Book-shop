

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@300&family=Poppins&family=Rajdhani:wght@500;700;800&family=Roboto+Mono:wght@300;329&display=swap"
        rel="stylesheet">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <!-- Css -->
    <link rel="stylesheet" href="../css/login.css">

    <!-- Icons -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <form method="POST" action="" class="login">
        <div class="login-body">
            <p class="title">Login</p>
            <div>
                <?php
                echo $error;
                ?>
            </div>
            <input type="text" name="email" placeholder="Enter your email"><br>
            <input type="password" name="password" placeholder="Enter your password"><br>
            <input type="submit" name="button" id="" class=" login-btn" value="LOGIN">

            <!-- Line  -->
            <div class="separator">
                <div class="line"></div>
                <h6>OR</h6>
                <div class="line"></div>
            </div>

            <input type="button" name="button" id="" class="signup-btn" value="SIGN UP">
        </div>
    </form>

    <form method="POST" class="signup" action="">
        <div class="signup-body">
            <p class="title">Signup</p>
            <input type="text" name="email" placeholder="Enter your email"><br>
            <input type="password" name="password" placeholder="Enter your password"><br>

            <input type="text" name="captcha" placeholder="Enter Captcha"><br>
            <input type="button" name="button" id="" class="signup-btn" value="SIGNUP">



            <!-- Line  -->
            <div class="separator">
                <div class="line"></div>
                <h6>OR</h6>
                <div class="line"></div>
            </div>
            <input type="button" name="button" id="" class="backto-login-btn" value="Login">
        </div>
    </form>

</body>

<script src='https://cdn.rawgit.com/viljamis/responsive-nav.js/master/responsive-nav.min.js'></script>
<script language="JavaScript" type="text/javascript" src="../js/script.js"></script>


</html>

<?php      
    include('connection.php'); 
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $username = $_POST['email'];  
        $password = $_POST['password'];
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from user_login where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<center> Login successful </center>";  
        }  
        else{  
            $error= "<center> Login failed. Invalid username or password.</center>";  
        }     
    }
?>