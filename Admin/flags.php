<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doxbin (Admin) - Flags</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://doxbin.com/legacy/dropdown.css" rel="stylesheet">
<link href="https://doxbin.com/files/doxbin.css" rel="stylesheet">
<script src="https://doxbin.com/legacy/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://doxbin.com/legacy/logout.js"></script>    <meta name="robots" content="noindex">
    <script src="https://doxbin.com/legacy/jscolor.js"></script>
    <link rel="stylesheet" href="https://doxbin.com/legacy/index.css">
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://doxbin.com/files/admin.css?r=33">
    <style>
    
        .nav-space{
            height: 50px;
            width: 100%;
        }
        
        div.page-content{
            display: block;
            margin-left: 250px;
            transition: margin-left .4s;
            padding: 21px;
        }
        body{
            position:relative;
        }
        .dropdown-li > a{
            padding-left: 13px;
        }
        .dropdown-li > a > i{
            font-size: 18px;
            padding-right: 7px;
        }
        .dropdown-li > a > span{
            font-size: 14px;
        }
        div.admin-sidebar > ul{
            padding-left: 0;
        }
        *{
            box-sizing: border-box;
        }
        @media  only screen and (max-width: 992px){
        }
        textarea{
            background-color: #282828;
            border: none;
            border-radius: 2px;
            color: white;
        }
        .blacklist-container td{
            padding: 3px;
        }
        .blacklist-container tr:hover{
            background-color: #323232;
        }
        .blacklist-container tr{
            background-color: #444444;
        }
        a.button{
            display: inline-block;
            padding: 5px 8px;
            background-color: #272727;
            color: white;
            border-radius: 2px;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: bold;
            margin: 0;
            width: auto;
        }
        a.button:focus{
            text-decoration: none;
        }
        a.button:hover{
            background-color: #232323;
            text-decoration:none;
        }
        a.button.button-red{
            border: solid 1px #ff0000;
        }
        a.button.button-green{
            border: solid 1px #00ff00;
        }
        a.button.button-green{
            border: solid 1px #0000ff;
        }
        .add-to-blacklist > div > a.button{
            display: inline-block;
            padding: 5px 8px;
            border: solid 1px #00ff00;
            background-color: #272727;
            color: white;
            border-radius: 2px;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: bold;
            margin: 0;
            width: 50%;
        }
        .add-to-blacklist > div > a.button:hover{
            text-decoration: none;
            color: white;
            background-color: #1D1D1D;
        }
        .add-to-blacklist{
            width: 50%;
        }
        @media  only screen and (max-width: 600px){
            .add-to-blacklist > div > a.button{
                width: 100%;
            }
            .add-to-blacklist{
                width: 100%;
            }
        }
        input[type=text], select, option{
            line-height: 1.2;
            color: white;
            background: #282828;
            border: 0;
            border-radius: 2px;
            display: inline-block;
            -webkit-font-smoothing: antialiased;
            outline: none;
            padding: 7px 5px;
            width: 200px;
        }

        input[type=text]::placeholder{
            color: rgb(167, 167, 167);
        }
        input, select, option{
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
        .add{
            background-color: green;
        }
        .add:hover{
            background-color: #1b6e10;
        }

        a.confirm{
            background-color: green;
            font-size: 15px;
            font-weight: bold;
            padding: 7px 10px;
        }
        a.confirm:hover{
            background-color: #1b6e10;
        }
        .word-container{
            background-color: #282828;
            width: 50%;
            border-radius: 7px;
            margin-top: 20px;
            box-shadow: 0 1px 3px #181a1f;
            padding: 0px 10px;
            position:relative;
            display: inline-block;
            -webkit-box-shadow: inset 0px 0px 3px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: inset 0px 0px 3px 0px rgba(0,0,0,0.75);
            box-shadow: inset 0px 0px 3px 0px rgba(0,0,0,0.75);
        }

        .word-container .word-row{
            padding: 10px 10px;
            border-bottom: solid 1px gray;
        }
        .word-container .word-row:last-of-type{
            border: none;
        }
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }
        .top-btn, .top-btn p{
            display: block;
            outline: none;
            background: #303030;
            letter-spacing: .5px;
            line-height: 1.5;
            border-right: 1px solid #26282e;
            padding: 12px 0;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            color: #a8a8a8;
            margin: 0;
        }

        .top-btn-disabled, .top-btn-disabled p{
            display: block;
            outline: none;
            background: #292929;
            letter-spacing: .5px;
            line-height: 1.5;
            border-right: 1px solid #26282e;
            padding: 12px 0;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            cursor: not-allowed;
            color: #5d5d5d;
            margin: 0;
        }
        .top-btn:hover, .top-btn p:hover{
            color: white !important;
            text-decoration: none;
        }
        .top-btn p:focus{
            color: #a8a8a8;
            text-decoration: none;
        }
        .active p{
            color: white;
        }
        .checkbox{
            height: 0;
            width: 0;
            visibility: hidden;
        }
        .checkbox-label {
            cursor: pointer;
            text-indent: -9999px;
            width: 60px;
            height: 30px;
            background: grey;
            display: block;
            border-radius: 100px;
            position: relative;
            transition: 0.3s;
        }
        .checkbox-label:after {
            content: '';
            position: absolute;
            top: 3px;
            left: 4px;
            width: 24px;
            height: 24px;
            background: #fff;
            border-radius: 90px;
            transition: 0.3s;
        }
        .checkbox:checked + label {
            background: #4cba30;
            transition: 0.3s;
        }
        .checkbox:checked + .checkbox-label:after {
            left: calc(100% - 5px);
            transform: translateX(-100%);
        }
        /* .checkbox-label:active:after {
            width: 30px;
        } */
        input{
            margin-bottom: 4px;
        }
        .word-container input[type=text]{
            background-color: rgb(31,31,31);
            border: solid 1px rgb(26,26,26);  
        }
        .word-row input.role-weight{
            color: white;
            background: #282828;
            border: none;
            display: inline-block;
            -webkit-font-smoothing: antialiased;
            outline: none;
            padding: 2px;
            width: 30px;
            height: 100%;
            float: left;
            text-align: center;
            margin-right: 7px;
            border-right: solid 1px gray;
            border-radius: 0;
        }
        label.redirect-label{
            margin:0;
            display:inline-block;
            background-color:#272727;
            padding:6px 0 6px 6px;
            line-height: 1.2;
            border-radius: 2px 0 0 2px;
            font-weight:400;
        }
        input.redirect-input{
            padding: 6px 6px 6px 0;
            background-color: #272727;
            border-radius: 0 2px 2px 0;
        }

        .anx{
            font-size: 17px;
        }

        .anxs{
            font-size: 19px;
        }

        .b-wrd{
            display: inline;
            color: white;
            font-size: 15px;
        }
        @media  only screen and (max-width: 900px) {
        .word-container {
            width:100%;
        }
        }

        @media  screen and (max-width:500px){
            body{
                font-size: 10px;
            }
            .col-md-12{
                padding: 0;
                width: 100%;
            }
            .col-md-7{
                padding: 0;
                width: 100%;
            }
            .top-btn, .top-btn p{
                font-size: 10px;
            }
            .anx{
                font-size: 14px;
            }
            .anxs{
                font-size: 16px;
            }
            a.confirm{
                font-size: 13px;
            }
            .b-wrd{
                font-size: 12px;
            }
        }
        .flag-row td{
            padding: 5px;
        }
        .flag-words{
            float:right;
            width: 50%;
        }
        .council-info{
            float: left;
            width: 50%;
        }
        
        </style>
</head>
<body style="min-height: 100%;height:100%">
    <input type="hidden" name="_token" value="XAxePcI7l69WZooG17E64tfiBdTERchUCU8hns7D">
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../">Doxbin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="../">Home</a></li>
                <li><a href="../upload">Add Paste</a></li>
                <li ><a href="../users">Users</a></li>
                                                        <li class="active"><a id="adminnotifs" style="color: red;" href="https://doxbin.com/admin">Admin<p id="admin_notif" class="notif_count" style="display:none;left:50px;"></p></a></li>
                                                </ul>
            <div class="sidebar-right">
                                    <ul class="nav navbar-nav r-hide">
                        <li style="width: 60px; height: 50px;" id="notif-btn"><a href="/notifications" style="padding-top: 12px;"><i class="material-icons">notifications_none</i></a></li>
                    </ul>
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
    <div class="nav-space"></div>
    <div class="page">
                    <div class="admin-sidebar">
    <h5 style="text-align: center;"><b>ADMIN</b></h5>
    <ul>
    <li><a href="../admin/edits.php"><i class="material-icons">edit</i><span>Edits</span></a></li>
        <li class="selected"><a href="../admin/flags.php"><i class="material-icons">flag</i><span>Flags</span></a></li>
        <li ><a href="../admin/logs.php"><i class="material-icons">search</i><span>Logs</span></a></li>
        <li ><a href="../admin/blacklists.php"><i class="material-icons">clear</i><span>Blacklists</span></a></li>
            </ul>
</div>                <div class="page-content" >
                            <div class="council-info">
                    <h5>Flags</h5>
                    <b>Info (last 7 days)</b><br>

                              <table style="width: auto;">
                                      <tr class="flag-row">
                                      <td>
                                    <a href="/user/Ty" style="color: red; font-weight: bold;">example</a>
                                </td>
                                <td>
                                    0 flags
                                </td>
                                        
                        </table>
                </div>
                
                    <br>
                                
                                Currently no flags.
                                                </div>          
    </div>
    <script src="https://doxbin.com/legacy/admin.js"></script>
    <script>
        $(document).ready(function(e){
            
            var logsDropdown = false;
            $('#logs-button').on('click', function(e){
                if(!logsDropdown){
                    $('.logs-dropdown').show();
                    logsDropdown = true;
                }else{
                    $('.logs-dropdown').hide();
                    logsDropdown = false;
                }
                e.preventDefault();
            });
        });
    </script>
</body>
</html>