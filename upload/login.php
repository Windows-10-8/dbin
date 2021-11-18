
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">
	
    <title>Login - Doxbin</title>
    <link rel="stylesheet" href="legacy/index.css">
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
<input type="hidden" name="_token" value="1lVuYDLYgFLcGtKt8ZySxg4eUAAr45xIf0mmWYm6">
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://doxbin.com/">Doxbin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="https://doxbin.com">Home</a></li>
                <li><a href="https://doxbin.com/upload">Add Paste</a></li>
                <li ><a href="https://doxbin.com/users">Users</a></li>
                <li ><a href="https://doxbin.com/upgrade">Upgrade<p class="notif_count" style="display: none;margin-top: 4px; left:65px;height: 8px;top:8px;"></p></a></li>
                <li ><a href="https://doxbin.com/hoa">Hall of Autism</a></li>
                <li ><a href="https://doxbin.com/tos">TOS</a></li>
                            </ul>
            <div class="sidebar-right">
                                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/login">Login</a></li>
                        <li ><a href="/register">Register</a></li>
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
                <form action="" method="POST" id="login-form">
                <input type="hidden" name="_token" value="1lVuYDLYgFLcGtKt8ZySxg4eUAAr45xIf0mmWYm6">
                <label for="username">Username</label><br>
                <input name="username" id="username" type="text" placeholder="Username" autofocus><br>
                <label for="username">Password</label><br>
                <input id="password" type="password" placeholder="Password"><br>
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

    <script type="text/javascript">
		function post(token) {
            $.post('/login', {
                username: $('#username').val(),
                password: $('#password').val(),
                _token: $('input[name=_token]').val(),
                bpToken: token
            }, function(resp){
                if(resp.status == "err"){
                    $('#error-msg').text(resp.msg);
                }else{
                    window.location = '/';
                }
            });
        }

        function sumbit() {
            window.BotProtect.register({
                publicKey: 'IW6Ln3zNuCWJK03FQshvS7WZBK620EjN',
                callback: function(token) {
                    if(token === 'request already in progress'){
                        setTimeout(() => {
                            sumbit();
                        }, 500);
                    } else {
                        post(token);
                    }
                }
            });
        }

        $('#login-form').on('submit', function(e){
            console.log('BotProtect token request.');
            e.preventDefault();
            
            sumbit();
        });
    </script>
    <script type="text/javascript" src="https://v2.bytefend.com/libs.js" defer></script>
    <script type="text/javascript" src="https://v2.bytefend.com/api.js" defer></script>
</body>
</html>