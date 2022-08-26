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

<!------------------------------------------- login form ------------------------------------------->
    <form method="POST" action="" class="login">
        <div class="login-body">
            <p class="title">Login</p>
            <div>
                <?php
                if(!empty($error)){
                echo $error;
                }
                ?>
            </div>
            <input type="text" name="login-email" placeholder="Enter your email"><br>
            <?php
                            if(isset($_POST["login-email"]))
                            {
                                if($_POST["login-email"] == "")
                                {
                                    echo '<p class="error" >Please enter email.</p>';
                                    $flag = false;
                                }
                            }
                        ?>
            <input type="password" name="login-password" placeholder="Enter your password"><br>
            <?php
                            if(isset($_POST["login-password"]))
                            {
                                if($_POST["login-password"] == "")
                                {
                                    echo '<p class="error" >Please enter password.</p>';
                                    $flag = false;
                                }
                            }
                        ?>
            
            <button name="login-submit" class="login-btn">LOGIN</button>

            <!-- Line  -->
            <div class="separator">
                <div class="line"></div>
                <h6>OR</h6>
                <div class="line"></div>
            </div>

            <input type="button" name="button" id="goto-signup" class="signup-btn" value="SIGN UP">
        </div>
    </form>



<!------------------------------------------- Signup form ------------------------------------------->
    <form method="POST" class="signup" action="">
        <div class="signup-body">
            <p class="title">Signup</p>
            <input type="text" name="email" placeholder="Enter your email"><br>
            <?php
                            $flag = true;
                            if(isset($_POST["email"]))
                            {
                                if($_POST["email"] == "")
                                {
                                    echo '<p class="error" >Please enter email.</p>';
                                    $flag = false;
                                }
                            }
                        ?>
            <input type="password" name="password" placeholder="Enter your password"><br>
            <?php
                            if(isset($_POST["password"]))
                            {
                                if($_POST["password"] == "")
                                {
                                    echo '<p class="error" >Please enter password.</p>';
                                    $flag = false;
                                }
                            }
                        ?>
            <div class="captcha">
                <div><img src="captcha.php" alt="PHP Captcha" class="d-flex justify-content-start"></div> <br>
            </div>
            <?php
                            session_start();
                            if(isset($_POST["Captcha"]))
                            {
                                if($_POST["Captcha"] == "")
                                {
                                    echo '<p class="error" >Please Enter Captcha.</p>';
                                    $flag = false;
                                }
                                else if($_SESSION['captcha'] != $_POST["Captcha"] )
                                {
                                    echo '<p class="error" >Incorrect captcha.</p>';
                                    $flag = false;
                                }
                                else
                                {
                                    echo '<p class="error">Correct captcha.</p>';
                                    $flag = true;
                                }
                            }
                        ?>

            <input type="text" name="captcha" placeholder="Enter Captcha"><br>
            <button name="submit" id="signup" class="signup-btn">SIGNUP</button>
            <?php
        if(isset($_POST['submit']))
        {
            if($flag == true)
            {
                include('connection.php');

                $sql = "insert into user_login values('".$_POST['email']."','".$_POST['password']."')";
                if($con->query($sql))
                {
                    echo "<script>alert(`Singup successfull`)</script>";
                }
                else
                {
                    echo "<script>alert(`user already exist`)</script>";
                }
            }
        }
        
        ?>


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

<!-- For login -->
<?php
        if(isset($_POST['login-submit']))
        {
            if($flag == true)
            {
                include('connection.php'); 
                $sql = "select * from user_login where email = '".$_POST['login-email']."'";
                if(mysqli_num_rows(mysqli_query($con,$sql)))
                {
                    $sql = "select password from user_login where email = '".$_POST['login-email']."'";
                    $result = mysqli_query($con,$sql);
                    $data = mysqli_fetch_assoc($result);
                    if($data['password'] == $_POST['login-password'])
                    {
                        header("Location:../index.html");
                        exit();
                    }
                    else{
                        $error="Incorrcet Password"; 
                    }   
                }
                else{           
                    $error="Username does not exist. Kindly register yourself.";
                }
            }
        }
        
        ?>