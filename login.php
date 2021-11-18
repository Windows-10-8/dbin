<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    if (!isset($_SESSION)){

        session_start();
    }
    include('connect/db.php');
    if(isset($_POST) & !empty($_POST)){
        // PHP Form Validations
        if(empty($_POST['username'])){ $errors[]="Username / Email field required"; }
        if(empty($_POST['password'])){ $errors[]="Password field is required"; }
    
        
        
     
    
        if(empty($errors)){
            // Check the Login Credentials
            $sql = "SELECT * FROM users WHERE ";
            if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)){
                $sql .= "email=?";
            }else{
                $sql .= "username=?";
            }
            $result = $dbh->prepare($sql);
            $result->execute(array($_POST['username']));
            $count = $result->rowCount();
            $res = $result->fetch(PDO::FETCH_ASSOC);
            if($count == 1){
                // Compare the password with password hash
                if(password_verify($_POST['password'], $res['password'])){
                    // regenerate session id
                    session_regenerate_id();
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $res['id'];
                    $_SESSION['username'] = $res['username'];
                    $_SESSION['email'] = $res['email'];
                    $_SESSION['rank'] = $res['rank'];
                    $_SESSION['last_login'] = time();
    
                    
                    
                    // redirect the user to members area/dashboard page
                    
                    header("location: index.php");
    
                }else{
                    $errors[] = "Username / Email & Password Not working";
                }
            }else{
                $errors[] = "Username / Email invalid";
            }
        }
    }
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">
	
    <title>Login - Doxbin</title>
    <link rel="stylesheet" href="https://doxbin.com/legacy/index.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<style>
    .login-div{
        margin: 0 auto;
        max-width: 500px;
        min-width: 100px;
        width: 100%;
        text-align: left;
    }
    .login-div label{
        padding: 10px 0px 1px 3px;
        margin: 0;
    }
	input{
		line-height: 1.2;
		color: white;
		background: #282828;
		border: 0;
		border-radius: 2px;
		display: inline-block;
		-webkit-font-smoothing: antialiased;
		outline: none;
		padding: 7px 5px;
        width: 100%;
	}
	input::placeholder{
		color: rgb(167, 167, 167);
	}
	input[type=submit]{
		line-height: 1.2;
		color: white;
		background: #282828;
		border: 0;
		border-radius: 2px;
		display: block;
		-webkit-font-smoothing: antialiased;
		outline: none;
		padding: 7px 5px;
        width: 90%;
        margin: 15px auto 50px auto;
	}
	input{
		font-size: 100%;
	}
	
	input[type=submit]:hover{
		color: white;
		background: #3d3d3d;
		text-decoration: none;
	}
	.center {
	  text-align: center;
	}

    
	</style>
</head>

<body>
<input type="hidden" name="_token" value="jpkoadHxng9jFWNOscu7Xg3c8btw3nkMQArmQ2mm">
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../">Doxbin Remake</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="./index.php">Home</a></li>
                <li><a href="../upload">Add Paste</a></li>
                <li ><a href="../users.php">Users</a></li>
                            </ul>
            <div class="sidebar-right">
                                    <ul class="nav navbar-nav">
                        <li class="active"><a href="login.php">Login</a></li>
                        <li ><a href="register.php">Register</a></li>
                    </ul>
                            </div>
        </div>
    </div>
</nav>
    <div class="container" style="background-color: #111111; min-height: 100vh;-webkit-box-shadow: 0px 0px 7px 0px rgba(31,31,31,1);-moz-box-shadow: 0px 0px 7px 0px rgba(31,31,31,1);box-shadow: 0px 0px 7px 0px rgba(31,31,31,1);">
        <div class="col-md-12" style="margin-top: 10px;">
            <div class="col-md-12" style="margin-top: 80px;">
                <div align="center">
                    <h5 style="font-size: 25px;">Login</h5>
                    <noscript><p style="color: red; padding: 0px 0px 10px 0px; text-align: center; margin: 0;">Doxbin requires JavaScript to function correctly.</noscript>
                    <div id="error-msg" style="color: red; padding: 0px 0px 10px 0px; text-align: center; margin: 0;"></div>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3 text-center">
                <p style="color: green;"></p>
                <div class="login-div">
                <?php
                
                if(!empty($errors)){
                    foreach ($errors as $error) {
                        echo "<div id='error-msg' style='color: red; padding: 10px 0px 0px 0px; text-align: center; margin: 0;''>&nbsp;".htmlspecialchars($error)."</div>";
                    }
                    
                }
            ?>
            <?php
                if(!empty($messages)){
                   
                    foreach ($messages as $message) {
                        echo "<div id='' style='color: green; padding: 10px 0px 0px 0px; text-align: center; margin: 0;''>&nbsp;".htmlspecialchars($message)."</div>";
                    }
                    
                }
            ?>
                <form action="login.php" method="POST" id="login-form">
                <input type="hidden" name="_token" value="<?php echo $_SESSION['token'] ?>">
                <label for="username">Username</label><br>
                <input type="text" name="username" placeholder="Username" aria-label="username" required="" autofocus><br>
                <label for="username">Password</label><br>
                <input type="password" name="password" placeholder="Password" aria-label="password" required="" autofocus><br>
                <br>
                
                <input type="submit" value="Login">
                </form>
                </div>
            </div>
		</div>
    </div>
    <script src="https://doxbin.com/legacy/jquery.min.js"></script>
    <script src="https://doxbin.com/legacy/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
</body>
</html>