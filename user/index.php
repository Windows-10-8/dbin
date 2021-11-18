<?php 
include "../connect/db.php";
// start of view user

?>


<!DOCTYPE html>
<html lang="en" style="min-height: 100%;">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Profile of skiverentiel">
	
	<meta property="og:locale" content="en_US">
	<meta property="og:url" content="https://doxbin.com/user/skiverentiel">
	<meta property="og:type" content="website">
	<meta property="og:title" content="skiverentiel's Profile - Doxbin">
	<meta property="og:description" content="Profile of skiverentiel">
    <link href="https://doxbin.com///netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://doxbin.com/legacy/dropdown.css" rel="stylesheet">
<link href="https://doxbin.com/files/doxbin.css" rel="stylesheet">
<script src="https://doxbin.com/legacy/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://doxbin.com/legacy/logout.js"></script>	
    <title>skiverentiel's Profile - Doxbin</title>
    <style>
    .info-cont{
        margin: 4px 0 15px 0;
        font-size: 13px;
    }
    .info-cont p{
        margin: 0;
        line-height: 16px;
    }
    .info-cont p b{
        margin-right: 6px;
    }
    .admin-text{
        color: red;
        font-weight: bold;
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
        float: left;
        width: 120px;
        height: 120px;
        background-color: gray;
        margin-right: 10px;
        -webkit-box-shadow: inset 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: inset 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: inset 0px 0px 5px 0px rgba(0,0,0,0.75);
        border-radius: 2px;
    }
    .button{
        line-height: 1.2;
        color: white;
        background: #b21c1c;
        border: 0;
        border-radius: 2px;
        display: inline-block;
        -webkit-font-smoothing: antialiased;
        outline: none;
        padding: 5px 5px 3px 5px;
        vertical-align: top;
        margin-top: 8px;
    }
    .button:hover{
        text-decoration: none;
        color: white;
		background: #8c1c1c;
    }
    .follow-button{
        display: inline-block;
        padding: 5px 8px;
        border: solid 1px #00ff00;
        background-color: #272727;
        color: white;
        border-radius: 2px;
        text-transform: uppercase;
        font-size: 15px;
        font-weight: bold;
        
        margin-top: 42px;
        float: right;
    }

    .follow-button:hover{
        text-decoration: none;
        color: white;
        background-color: #1D1D1D;
    }

    .follow-button:focus{
        color: white;
        text-decoration: none;
    }

    .admin-dropdown-btn{
        color: white;
        font-size: 25px;
        right: 0;
        position: absolute;
    }
    div.rcta{
        height: 100%;
        float:right;
    }
    div.uinfo{
        height: 100%;
        margin-bottom:20px;
    }
    .uinfo .uinfo-row{
        text-align: right;
        color: #bfbfbf;
        padding: 4px;
        font-size: 13px;
        border-bottom: 1px solid #282828;
    }
    .uinfo .uinfo-h{
        text-align: left;
        font-weight: bold;
        float:left;
    }
    .uinfo .uinfo-i{
        
    }
    div.pastes{
        margin-left: 0px;
        padding: 0 15px;
        border-right: 1px solid #282828;
    }
    
    div.profile-padding{
        padding: 0 15px;
        position:relative;
    }

    .edituser{
        margin-top: 0px;
        right:15px;
        position:absolute;
    }

    @media  only screen and (max-width: 992px){
        div.rcta{
            border-left: none;
            padding-top: 10px;
            padding: 0;
            float: none;
        }
        div.uinfo{
            border-right: none;
            padding-top: 10px;
            padding: 0;
        }
        div.pastes{
            padding: 0;
            border: none;
        }
        .edituser{
            right: 0;
        }
        div.profile-padding{
            padding: 0;
        }
    }
    </style>
    <link rel="stylesheet" href="https://doxbin.com/legacy/index.css">
    
</head>

<body class="bin" style="min-height: 100vh;">
<input type="hidden" name="_token" value="vxLWEjWydVCHc2sy8pPgUVCdiHFXES6TXcPAYpKg">
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
                        <li ><a href="/login">Login</a></li>
                        <li ><a href="/register">Register</a></li>
                    </ul>
                            </div>
        </div>
    </div>
</nav>
    <div class="container" style="background-color: #111111; min-height: 100vh;border: 1px #282828;border-style: none solid;padding-bottom: 20px;">
        <div class="profile-cont" style="position:relative;">
            <div class="profile-padding">
                <div class="profile-img">
                                    </div>
            <h5 class="gray" style="font-size: 24px; margin: 0px 20px 0px 2px; padding-top: 0px; display: inline-block;color: #bfbfbf;">skiverentiel
            </h5>
            
                    </div>
        <div class="info-cont">
            
            <p style="font-size: 15px; min-height: 87px;">
                            </p>
            
        </div>
        <hr style="margin: 15px 0;">
            <div>
                        <div class="col-md-9 pastes" style="height: 100%;">
                <h5 class="gray" style="font-size: 16px;"><b>skiverentiel's Pastes <a href="/user/skiverentiel/pastes">(View All)</a></b></h5>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="text-center">Comments</th>
                            <th class="text-center">Views</th>
                            <th class="text-center">Added</th>
                            <th class="text-center">RAW</th>
                                                    </tr>
                    </thead>
                    <?php 
                    if (isset($_GET['user'])){
                        strip_tags($view = filter_input(INPUT_GET, 'user', FILTER_SANITIZE_SPECIAL_CHARS));

                        $yas = $dbh->prepare("SELECT * FROM past WHERE username LIKE ? ");
                        $yas->execute(array('%'.strip_tags($view).'%'));
                        $oop = $yas->fetchAll();
                    } else {
                        echo '<script>window.location = "../" </script>';
                        die();
                    }
                    ?>
                    <tbody>
                        <?php 
                        foreach ($oop as $l)
                            echo '

                            <tr class="doxentry" id="">
                            <td>
                                                                <a href="https://doxbin.com/upload/view.php?id='.$l['id'].'" target="_blank">'.$l['title'].'</a>
                            </td>
                            <td class="text-center">'.$l['com'].'</td>
                            <td class="text-center">'.$l['view'].'</td>
                            <td class="text-center">'.$l['add'].'</td>
                            <td class="text-center"><a href="https://doxbin.com/upload/uploads/'.$l['title'].'.txt" target="_blank">RAW</a></td>
                                                    </tr>   
                            
                            
                            
                            ';

                        
                        ?>
                                                      
                                                                                                        </tbody>
                </table>
            </div>
            
            <div class="col-md-3 uinfo">
                
                <h5 class="gray" style="font-size: 16px;"><b>Information</b></h5>
                <div class="uinfo-row">
                <?php
                if (isset($_GET['user'])){
                    strip_tags($view = filter_input(INPUT_GET, 'user', FILTER_SANITIZE_SPECIAL_CHARS));
                    $stmt = $dbh->prepare("SELECT * FROM users WHERE username=:username");
                    $stmt->execute(['username' => $view]);
                    $fff = $stmt->fetchAll();
                   

                    $yas = $dbh->prepare("SELECT * FROM past WHERE username LIKE ? ");
                    $yas->execute(array('%'.strip_tags($view).'%'));
                    $oop = $yas->fetchAll();
                    $paste = $yas->rowCount();

                    if ($fff){
                        foreach($fff as $e){
                            echo '<div class="uinfo-h">User ID</div><div class="uinfo-i">'.$e['id'].'</div>
                            </div>
                            <div class="uinfo-row">
                                <div class="uinfo-h">Joined</div><div class="uinfo-i">'.$e['add'].'</div>
                            </div>
                            
                                <div class="uinfo-row">
                                <div class="uinfo-h">Pastes</div><div class="uinfo-i">'.$paste.'</div>
                            </div>
                            
                            
                            
                            
                            ';
                            
                            
                        }
                        
                    } else {
                        echo '<script>window.location = "../" </script>';
                        die();
                    }
                
                    
                    
                }
                
                ?>
                    
                
                
                
            </div>

            <div class="col-md-3 rcta">
                <h5 class="gray" style="font-size: 16px;"><b>Recent Activity</b></h5>
                            <p class="gray">No recent activity</p>
                        </div>
        </div>
    </div>
    	</body>
</html>
