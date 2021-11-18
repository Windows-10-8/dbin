<?php
if (!isset($_SESSION)){

    session_start();
}
function xss($data){
    htmlspecialchars(htmlentities($data));
}
if (isset($_SESSION['login'])){
    if($_SESSION["login"] != true){ //checks if user is logged in if they arent redirect to login reccomended for pages like settings (:
        echo 'User is not logged in';
        header("Location: ../login.php");
        exit;
    }

} else {
    echo 'User is not logged in';
    header("Location: ../login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">
    <title>Settings - Doxbin</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://doxbin.com/legacy/dropdown.css" rel="stylesheet">
<link href="https://doxbin.com/legacy/dropdown.css" rel="stylesheet">
<script src="https://doxbin.com/legacy/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://doxbin.com/legacy/logout.js"></script>    <style>
    .info-cont{
        font-size: 16px;
        color: #bfbfbf;
        margin: 0 auto;
        text-align: left;
    }
    .info-cont p{
        margin: 0;
    }
    .info-cont p b{
        margin-right: 6px;
    }
    .profile-cont{
        margin-bottom: 50px;
        margin-top: 60px;
        padding-top: 1px;
    }
    .gray{
        color: #bfbfbf;
        margin-top: 5px;
    }
    .admin-text{
        color: red;
        font-weight: bold;
    }
    .profile-img{
        width: 120px;
        height: 120px;
        background-color: gray;
        left: 0;
        right: 0;
        margin: 0 auto;
    }
    #profile-image{
        display: block;
        width: 120px;
        height: 120px;
        background-color: black;
        opacity: 0;
        transition: opacity .1s ease-in-out;
        -moz-transition: opacity .1s ease-in-out;
        -webkit-transition: opacity .1s ease-in-out;
        left: 0;
        right: 0;
        position: absolute;
        cursor: pointer;
        margin: 0px auto 0px auto;
    }
    #profile-image:hover{
        opacity: 0.7;
    }
    #profile-image p{
        padding-top: 45px;
        text-align: center;
        font-size: 18px;
        color: white;
    }
    input, textarea{
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
		font-size: 100%;
        margin-bottom: 30px;
	}
	input::placeholder, textarea::placeholder{
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
	
	input[type=submit]:hover{
		color: white;
		background: #3d3d3d;
		text-decoration: none;
	}
    .username-change{
        width: 100%;
    }
    .username-change a{
        position: absolute;
        padding-top: 8px;
        right: 25px;
        display: block;
        font-size: 15px;
    }
    input:disabled, textarea:disabled{
        color: #757575;
    }
    textarea{
        max-height: 58px;
        max-width: 100%;
        resize: none;
    }
    input[type="file"] {
        opacity: 0;
        cursor: pointer;
    }
    #file-upload{
        height: 0px;
        padding: 0;
    }

    .help-tip{
    position: absolute;
    right: 23px;
    margin-top: 6px;
    text-align: center;
    background-color: #666666;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    cursor: default;
    z-index: 1;
}

.help-tip:before{
    content:'?';
    font-weight: bold;
    color:#fff;
}

.help-tip:hover p{
    display:block;
    transform-origin: 100% 0%;

    -webkit-animation: fadeIn 0.3s ease-in-out;
    animation: fadeIn 0.3s ease-in-out;

}

.help-tip p{
    display: none;
    text-align: left;
    background-color: #1E2021;
    padding: 16px;
    width: 300px;
    position: absolute;
    border-radius: 3px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
    right: -4px;
    color: white;
    font-size: 13px;
    line-height: 1.4;
}

.help-tip p:before{
    position: absolute;
    content: '';
    width:0;
    height: 0;
    border:6px solid transparent;
    border-bottom-color:#1E2021;
    right:10px;
    top:-12px;
}

.help-tip p:after{
    width:100%;
    height:40px;
    content:'';
    position: absolute;
    top:-40px;
    left:0;
}

@-webkit-keyframes fadeIn {
    0% { 
        opacity:0; 
        transform: scale(0.6);
    }

    100% {
        opacity:100%;
        transform: scale(1);
    }
}

@keyframes  fadeIn {
    0% { opacity:0; }
    100% { opacity:100%; }
}

.b-button-red{
    background-color: #211212;
    font-weight: bold;
    padding: 5px 8px;
    border-radius: 2px;
    text-transform: uppercase;
    font-size: 15px;
    color: white
}

.b-button-green{
    background-color: #122112;
    font-weight: bold;
    padding: 5px 8px;
    border-radius: 2px;
    text-transform: uppercase;
    font-size: 15px;
    color: white
}

.b-button-red:hover{
    background-color: #281919;
}

.b-button-green:hover{
    background-color: #192819;
}

button:focus{
    outline: none;
}

.b-border-red{
    border: solid 1px red;
}
.b-border-green{
    border: solid 1px green;
}

.colors{
    position: relative;
    background-color: #282828;
    box-shadow: inset 0px 0px 3px 0px rgba(0,0,0,0.75);
    text-align: center;
    padding: 10px 10px 4px;
}

.color-block{
    display: inline-block;
    height: 30px;
    width: 30px;
    cursor: pointer;
    margin: 0 3px;
}


.color-active{
    border: solid 2px white;
}

.colors-locked{
    position: absolute;
    top: 0;
    left: 0;
    padding-top: 14px;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
}
    </style>
    <link rel="stylesheet" href="https://doxbin.com/legacy/index.css">
</head>

<body class="bin" style="height: 100%; margin: 0 auto;">

    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Doxbin RE-MAKE</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="/upload/index.php">Add Paste</a></li>
                <li><a href="/hoa">Hall of Autism</a></li>
                <li><a href="/users.php">Users</a></li>
            </ul>
                <div class="sidebar-right">
                <?php
                    if (isset($_SESSION['username'])){
                        if (isset($_SESSION['login'])){
                            if ($_SESSION['login'] == TRUE){
                                echo'</ul>
                                <div class="dropdown r-hide">
                                    <p class="dropbtn">'.strip_tags(htmlentities($_SESSION['username'])).'</p>
                                                            <div class="dropdown-content">
                                        <a href="../user/'.strip_tags(htmlentities($_SESSION['username'])).'">Profile</a>
                                        <a href="../user/'.strip_tags(htmlentities($_SESSION['username'])).'/pastes">My Pastes</a>
                                        <a href="#">Settings</a>
                                
                                        <a href="../logout.php">Logout</a>
                                    </div>
                                </div>
                                <ul class="nav navbar-nav r-show">
                                    <li><a href="../user/'.strip_tags(htmlentities($_SESSION['username'])).'">Profile</a></li>
                                    <li><a href="../user/'.strip_tags(htmlentities($_SESSION['username'])).'/pastes">My Pastes</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li class="logout-btn"><a href="../logout.php">Logout</a></li>
                                </ul>
                                        </div>';
    
                            }
                        } else {
                            
                                echo'<div class="sidebar-right">
                                                            <ul class="nav navbar-nav">
                                                <li ><a href="login.php">Login</a></li>
                                                <li ><a href="register.php">Register</a></li>
                                            </ul>
                                                    </div>';
                        }
                        
                        
                    }else {
                        echo'<div class="sidebar-right">
                                                    <ul class="nav navbar-nav">
                                        <li ><a href="login.php">Login</a></li>
                                        <li ><a href="register.php">Register</a></li>
                                                                            </ul>
                                                                                                                </ul>
                                    </ul>
                                            </div>';
                    }   ?>
                
                                    
                       
                    
                            </div>
        </div>
    </div>
    </nav>


<script src="https://doxbin.com/legacy/notifs.js"></script>
<div id="notif">
    <div id="notif-modal-bg" class="notif-background">
    </div>
    <div class="notif-container" style="top: 25vh; position: fixed; margin-top: 0;">
    <p style="font-size: 20px; font-weight: bold; margin-top: 0px;">Notifications</p>
        No unseen notifications.
        <a style="left: 0; position: absolute; margin-left: 15px;" class="btn view-all" href="/notifications">View All</a>
    <a style="right: 0; position: absolute; margin-right: 15px;" class="btn cancel" id="notif-modal-close" href="#">Close</a>
    </div>
</div>
    <div class="container" style="background-color: #111111; text-align: center; min-height: 100%; -webkit-box-shadow: 0px 0px 7px 0px rgba(31,31,31,1);-moz-box-shadow: 0px 0px 7px 0px rgba(31,31,31,1);box-shadow: 0px 0px 7px 0px rgba(31,31,31,1);">





                                <div class="profile-cont">
                                <h5 class="gray" style="font-size: 24px; "></h5>
            <div class="col-md-5 info-cont" style="float: none;">


            <div class="username-change">
                <p><b>Username</b></p>
                                <div class="help-tip"><p>Users with ranks can change their username - <a href="/upgrade">Upgrade</a></p></div>
                                <input id="setting-username" type="text" value='<?php echo htmlentities(strip_tags($_SESSION['username'])); ?>' style="margin-bottom: 20px;" disabled>
            </div>
            <div class="username-change">
                <p><b>Bio</b></p>
                
                <textarea id="setting-bio" style="margin-bottom: 20px; height: 70px" disabled>This feature is currently not working.</textarea>
            </div>
            <div class="username-change">
                <p><b>Email</b></p>
                
                <input id="setting-email" type="text" value="<?php echo htmlentities(strip_tags($_SESSION['email']))?>" style="margin-bottom: 20px;" disabled>
            </div>

            
            
            
        </div>
        </div>

        <script>
    var file = "none";
    var colorSelected = false;
    $(document).ready(function(){
        $('.color-block').on('click', function(e){
            if(colorSelected != false){
                $('#' + colorSelected).removeClass('color-active');
            }
			if(colorSelected != $(this).attr('id')){
				$(this).addClass('color-active');
				colorSelected = $(this).attr('id');
            	$('.dropbtn').css('color', "#" + $(this).attr('id'));
			}else{
				colorSelected = false;
            	$('.dropbtn').css('color', '');
            }
            
            $.post('/settings/change-color', {
                _token: $('input[name=_token]').val(),
                color: (colorSelected == false ? 'none' : colorSelected)
            });
        });
        $('#enable-2fa-btn').on('click', function(e){
            window.location = '/verify/new';
        });

        $('#disable-2fa-btn').on('click', function(e){
            $.post('/account/disable-2fa', {
                _token: $('input[name=_token]').val()
            }, function(resp){
                location.reload();
            });
        });

        var namechanges = 0;

        $('#change-username').on('click', function(e){
            if($('#change-username').text() == "Change"){
                $('#setting-username').prop('disabled', false).focus();
                $('#change-username').text('Save');
            }else{
                $('#change-username').text('...');
                $.post('/settings', {
                    _token: $('input[name=_token]').val(),
                    type: 'username',
                    username: $('#setting-username').val()
                }, function(resp){
                    if(resp.status == "done"){
                        $('#setting-username').prop('disabled', true);
                        $('#change-username').text('Edit');
                        $('#namechanges').text(namechanges - 1);
                        namechanges--;
                    }else{
                        alert("Error - invalid username?");
                        $('#change-username').text('Save');
                    }
                });
            }
            e.preventDefault();
        });

        $('#change-bio').on('click', function(e){
            if($('#change-bio').text() == "Edit"){
                $('#setting-bio').prop('disabled', false).focus();
                $('#change-bio').text('Save');
            }else{
                $('#change-bio').text('...');
                $.post('/settings', {
                    _token: $('input[name=_token]').val(),
                    type: 'change-bio',
                    value: $('#setting-bio').val()
                }, function(resp){
                    if(resp.status == "done"){
                        $('#setting-bio').prop('disabled', true);
                        $('#change-bio').text('Edit');
                    }else{
                        alert(resp.msg);
                        $('#change-bio').text('Save');
                    }
                });
            }
            e.preventDefault();
        });
        $('#change-email').on('click', function(e){
            if($('#change-email').text() == "Change"){
                $('#setting-email').prop('disabled', false).focus();
                $('#change-email').text('Save');
            }else{
                $('#change-email').text('...');
                $.post('/settings', {
                    _token: $('input[name=_token]').val(),
                    type: 'email',
                    value: $('#setting-email').val()
                }, function(resp){
                    if(resp.status == "done"){
                        $('#setting-email').prop('disabled', true);
                        $('#change-email').text('Change');
                    }else{
                        alert(resp.msg);
                        $('#change-email').text('Save');
                    }
                });
            }
            e.preventDefault();
        });
        $('#change-password').on('click', function(e){
            if($('#change-password').text() == "Change"){
                $('#setting-password').prop('disabled', false).focus();
                $('#confpass-div').show();
                $('#two-factor').show();
                $('#password-text').text('Current Password');
                $('#change-password').hide();
                $('#save-password').show();
                e.preventDefault();
            }
        });
        $('#save-password').on('click', function(e){
            if($('#save-password').text() == "Save" || $('#save-password').text() == "Change Password"){
                $('#save-password').text('...');
                $('#change-password').hide();
                $.post('/settings', {
                    _token: $('input[name=_token]').val(),
                    type: 'password',
                    oldpass: $('#setting-password').val(),
                    newpass: $('#setting-confpass').val(),
                    code: $('#setting-2fa-code').val()
                }, function(resp){
                    if(resp.status == "done"){
                        $('#setting-password').prop('disabled', true).focus().val("");
                        $('#setting-confpass').val("");
                        $('#setting-2fa-code').val("");
                        $('#change-password').text('Change').show();
                        $('#save-password').hide();
                        $('#confpass-div').hide();
                        $('#two-factor').hide();
                        $('#password-text').text('Password');
                    }else{
                        $('#password-error').text(resp.msg);
                    }
                    $('#save-password').text('Save');
                });
            }
            e.preventDefault();
        });
        $('#profile-pic-edit').on('click', function(e){
            if($('#profile-pic-edit').text() == "Save"){
                $('#profile-pic-edit').text('Saving...');
                $.ajax({
                    url: '/settings',
                    type: 'POST',
                    data: new FormData($('#pfp-form')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    xhr: function () {
                        var myXhr = $.ajaxSettings.xhr();
                        return myXhr;
                    },
                    success: function(resp){
                        if(resp.status != 'err'){
                            $('#profile-pic-edit').text('Remove');
                        }else{
                            $('#profile-pic-edit').text('Save');
                            $('#image-err-msg').text(resp.msg);
                        }
                    },
                    error: function(e) {
                        console.log(e);
                    }
                        
                });
            }else{
                $.post('/settings', {
                    _token: $('input[name=_token]').val(),
                    type: 'remove-image',
                }, function(resp){
                    if(resp.status == "done"){
                        $('.profile-img-src').removeAttr('src');
                        $('#profile-pic-edit').text('');
                    }
                });
            }
            e.preventDefault();
        })


        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('.profile-img-src').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                $('#profile-pic-edit').show().text('Save');
            }
        }

        $("#file-upload").change(function(){
            readURL(this);
            file = this.files[0];
        });
    });
    </script>
</body>
</html>