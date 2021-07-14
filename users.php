<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">
	
    <title>Users - Doxbin</title>
    <link rel="stylesheet" href="https://doxbin.org/legacy/index.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://doxbin.org/legacy/dropdown.css" rel="stylesheet">
<link href="https://doxbin.org/files/doxbin.css" rel="stylesheet">
<script src="https://doxbin.org/legacy/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://doxbin.org/legacy/logout.js"></script>	<style>
	input[type=text]{
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
	input[type=submit]{
		line-height: 1.2;
		color: white;
		background: #282828;
		border: 0;
		border-radius: 2px;
		display: inline-block;
		-webkit-font-smoothing: antialiased;
		outline: none;
		padding: 7px 5px;
	}
	input{
		font-size: 100%;
	}
	
	.clear-search{
		line-height: 1.2;
		color: white;
		background: #282828;
		border: 0;
		border-radius: 2px;
		display: inline-block;
		-webkit-font-smoothing: antialiased;
		outline: none;
		padding: 7px 5px;
	}
	.clear-search:hover, input[type=submit]:hover, .clear-search:focus{
		color: white;
		background: #3d3d3d;
		text-decoration: none;
	}
    .admin-text{
        color: red;
        font-weight: bold;
    }
	</style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Doxbin Remake</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="index.php">Home</a></li>
                <li><a href="/Doxbin-2.0/upload/index.php">Add Paste</a></li>
                <li class="active"><a href="#">Users</a></li>
    
                                                </ul>
            <div class="sidebar-right">
                                    <ul class="nav navbar-nav r-hide">
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    </ul>
                            </div>
        </div>
    </div>
</nav>
<script src="https://doxbin.org/legacy/notifs.js"></script>
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
    <div class="col-md-12" style="margin-top: 10px;">
        <div class="col-md-12" style="margin-top: 80px;">
            <div align="center">
                <h4>Users</h4>
                <noscript><p style="color: red; padding: 0px 0px 10px 0px; text-align: center; margin: 0;">Searching requires JavaScript to function correctly.<br>Alternatively, you can type <u>https://doxbin.org/users/search/{query}</u> in the address bar.</p></noscript>
				<div id="error-msg" style="color: red; padding: 0px 0px 10px 0px; text-align: center; margin: 0;"></div>
				
				<label for="search-form">Search for a user</label>
				<form id="search-form">
					<input id="search-query" type="text" placeholder="Username...">
					<input type="submit" value="Search">
				</form>
				
				<br>
                <p>Showing 100 (of 3) users</p>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <h6>Admin</h6>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Username</th>
                        <th class="text-center">Pastes</th>
                        <th class="text-center">Comments</th>
                        <th class="text-center">Joined</th>
                                            </tr>
                </thead>
                <tbody>
                                            <tr class="doxentry">
                        <td style="width: 60px;" class="text-center">0</td>
                        <td style="width: 270px;"><a style="color: red; font-weight: bold;" href="/user" target="_blank">nano</a></td>
                        <td style="width: 90px;" class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center" title="Apr 4th, 2019">Today</td>
                                                </tr> 
                                            <tr class="doxentry">
                        <td style="width: 60px;" class="text-center">0</td>
                        <td style="width: 270px;"><a style="color: red; font-weight: bold;" href="/user" target="_blank">charge</a></td>
                        <td style="width: 90px;" class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center" title="Apr 4th, 2019">Today</td>
                                                </tr> 
                                    </tbody>
                                    <tr class="doxentry">
                        <td style="width: 60px;" class="text-center">0</td>
                        <td style="width: 270px;"><a style="color: red; font-weight: bold;" href="/user" target="_blank">strike</a></td>
                        <td style="width: 90px;" class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center" title="Apr 4th, 2019">Today</td>
                                    <tr class="doxentry">
                        <td style="width: 60px;" class="text-center">0</td>
                        <td style="width: 270px;"><a style="color: red; font-weight: bold;" href="/user" target="_blank">cheeky</a></td>
                        <td style="width: 90px;" class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center" title="Apr 4th, 2019">Today</td>
                                                </tr> 
                                    </tbody>
            </table>
        </div>
		
    </div>
	<div align="center">
        <p>Showing 100 (of 3) users</p>
		<br>
		<a href="#">Back to top</a>
		<br><br>
	</div>
    <script>
	$(document).ready(function(){
		$('#search-form').on('submit', function(e){
			var query = $('#search-query').val();
			
			if(query == ''){
				window.location = '/users';
			}else if(!/^[a-zA-Z0-9_]+$/.test(query)){
				$('#error-msg').text("Only alphanumeric characters and spaces can be searched.");
			}else{
				window.location = '/users/search/' + escape($('#search-query').val());
			}
			e.preventDefault();
		});
	});
	</script>
    </body>
</html>