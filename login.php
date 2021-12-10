<?php
    $uname = $_POST["username"] ?? "";
    $pass = $_POST["password"] ?? "";
    $error = "";
    $success = "";
    if(isset($_POST['login'])){
        if($uname == "admin"){
            if($pass == "password"){
                $error = "";
                $success = "Welcome Admin!";
            }
            else{
                $error = "Invalid Password";
                $success = "";
            }
        }
        else{
            $error = "Invalid Login";
            $success = "";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Povestea unui om lenes</title>
</head>
<body>
    <div id="sidebar">
        <div class="toggle-btn" onclick="openMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li>Menu</li>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
    <div class="container-box">
        <form id="registration" name="registration" action="login.php" method="POST">
            <div class="contact-box">
                <div class="right">
                    <h2>Login</h2>
                    <p class="error-field"><?php echo $error; ?></p><p class="success"><?php echo $success; ?></p>
                    <input type="text" name="username" id="username" class="field" placeholder="Enter Username" >
                    <input type="password" id="password" class="field" placeholder="Enter Password" name="password">
                    <button type="submit" name="login" class="btni loginbtn">Login</button>
                    <input type="checkbox" class="remember" checked="checked" name="remember"> 
                    <label for="remember">Remember me.</label>
                    <div class="container signin">
                        <p>Don't have an account? <a href="register.html" >Sign Up</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="js/singup-form.js"></script>
    <script src="js/script.js"></script>
</body>
</html>