<?php
if (!isset($_SESSION)){

    session_start();
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Hall of Autism">

	

	<meta property="og:locale" content="en_US">

	<meta property="og:type" content="website">

	<meta property="og:title" content="Doxbin">

	<meta property="og:description" content="Hall of Autism">

    <title>Hall of Autism - Doxbin</title>

    <link rel="stylesheet" href="https://doxbin.org/legacy/index.css">

    <link rel="stylesheet" href="https://doxbin.org/legacy/css/main.css?r=44">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">



<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://doxbin.org/legacy/dropdown.css" rel="stylesheet">

<link href="https://doxbin.org/files/doxbin.css" rel="stylesheet">

<script src="https://doxbin.org/legacy/jquery.min.js"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://doxbin.org/legacy/logout.js"></script>  

	<style>

		html{

			overflow-x: hidden;

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

    .admin-text{

        color: red;

        font-weight: bold;

    }

	.doxbin-text{

		text-align:center;

		background-color: inherit;

		line-height:15px;

		border: none;

		color: white;

		padding-bottom:0;

		margin-bottom:0;

	}

	.hoa-title{

		margin: 5px 0 0 0;

		letter-spacing: 2px;

	}

	.hoa-container{

		border: solid 1px rgb(40, 40, 40);

		background-color: rgb(14, 14, 14);

		width: 32%;

		border-radius: 2px;

		float: left;

		margin: 10px 5px 10px 5px;

		position: relative;

		padding: 15px;

		-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);

		-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);

		box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);

		height: 460px;

	}

	.hoa-container:hover{

		border: solid 1px rgb(44, 44, 44);

		background-color: rgb(18, 18, 18);

	}

	.hoa-container .hoa-image{

		text-align: center;

		max-height: 215px;

		border-bottom: solid 1px rgb(40, 40, 40);

	}

	.hoa-container .hoa-image img{

		width: 100%;

		height: 200px;

		max-width: 200px;

		max-height: 200px;

		margin-bottom: 15px;

	}

	.hoa-container .hoa-name{

		padding-top: 10px;

		text-align: center;

		color: white;

		font-size: 20px;

		font-weight: bold;

	}

	.hoa-container .hoa-description{

		margin-top: 5px;

		text-align: center;

		color: rgb(200,200,200);

		word-wrap: break-word;

		overflow-y: auto;

		height: 160px;

	}

	@media  only screen and (max-width: 991px) {

		.hoa-container{

			width: 48%;

		}

	}

	@media  only screen and (max-width: 575px) {

		.hoa-container{

			width: 100%;

		}

	}

	@media  only screen and (max-width: 271px) {

		.doxbin-text{

			font-size: 9px;

			line-height: 10px;

		}

		.hoa-title{

			font-size: 16px;

			letter-spacing: 2px;

		}

	}

	::-webkit-scrollbar { /*scroll bar*/

		width: 7px;

	}

	

	/* Track */

	::-webkit-scrollbar-track {

		background: #cacaca; 

	}

	

	/* Handle */

	::-webkit-scrollbar-thumb {

		background: rgb(110, 110, 110); 

	}

	

	/* Handle on hover */

	::-webkit-scrollbar-thumb:hover {

		background: rgb(68, 68, 68); 

	}

	

	.rainbow {  

	   /* Font options */

	  text-shadow: 2px 2px 4px #000000;

	  

	   /* Chrome, Safari, Opera */

	  -webkit-animation: rainbow 5s infinite; 

	  

	  /* Internet Explorer */

	  -ms-animation: rainbow 5s infinite;

	  

	  /* Standar Syntax */

	  animation: rainbow 5s infinite; 

	}



	/* Chrome, Safari, Opera */

	@-webkit-keyframes rainbow{

	  	0%{color: red;}	

		17%{color: orange;}

		33%{color: yellow;}

		50%{color: green;}

		67%{color: blue;}

		84%{color: purple;}

	 	100%{color: red;}

	}



	/* Internet Explorer */

	@-ms-keyframes rainbow{

	  	0%{color: red;}	

		17%{color: orange;}

		33%{color: yellow;}

		50%{color: green;}

		67%{color: blue;}

		84%{color: purple;}

	 	100%{color: red;}

	}



	/* Standar Syntax */

	@keyframes  rainbow{

	  	0%{color: red;}	

		17%{color: orange;}

		33%{color: yellow;}

		50%{color: green;}

		67%{color: blue;}

		84%{color: purple;}

	 	100%{color: red;}

	}

	</style>



	<script>

	var colour="random";

		var sparkles=100;



		var x=ox=400;

		var y=oy=300;

		var swide=800;

		var shigh=600;

		var sleft=sdown=0;

		var tiny=new Array();

		var star=new Array();

		var starv=new Array();

		var starx=new Array();

		var stary=new Array();

		var tinyx=new Array();

		var tinyy=new Array();

		var tinyv=new Array();



		window.onload=function() { if (document.getElementById) {

		  var i, rats, rlef, rdow;

		  for (var i=0; i<sparkles; i++) {

		    var rats=createDiv(3, 3);

		    rats.style.visibility="hidden";

		    rats.style.zIndex="999";

		    document.body.appendChild(tiny[i]=rats);

		    starv[i]=0;

		    tinyv[i]=0;

		    var rats=createDiv(5, 5);

		    rats.style.backgroundColor="transparent";

		    rats.style.visibility="hidden";

		    rats.style.zIndex="999";

		    var rlef=createDiv(1, 5);

		    var rdow=createDiv(5, 1);

		    rats.appendChild(rlef);

		    rats.appendChild(rdow);

		    rlef.style.top="2px";

		    rlef.style.left="0px";

		    rdow.style.top="0px";

		    rdow.style.left="2px";

		    document.body.appendChild(star[i]=rats);

		  }

		  set_width();

		  sparkle();

		}}



		function sparkle() {

		  var c;

		  if (Math.abs(x-ox)>1 || Math.abs(y-oy)>1) {

		    ox=x;

		    oy=y;

		    for (c=0; c<sparkles; c++) if (!starv[c]) {

		      star[c].style.left=(starx[c]=x)+"px";

		      star[c].style.top=(stary[c]=y+1)+"px";

		      star[c].style.clip="rect(0px, 5px, 5px, 0px)";

		      star[c].childNodes[0].style.backgroundColor=star[c].childNodes[1].style.backgroundColor=(colour=="random")?newColour():colour;

		      star[c].style.visibility="visible";

		      starv[c]=50;

		      break;

		    }

		  }

		  for (c=0; c<sparkles; c++) {

		    if (starv[c]) update_star(c);

		    if (tinyv[c]) update_tiny(c);

		  }

		  setTimeout("sparkle()", 40);

		}



		function update_star(i) {

		  if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";

		  if (starv[i]) {

		    stary[i]+=1+Math.random()*3;

		    starx[i]+=(i%5-2)/5;

		    if (stary[i]<shigh+sdown) {

		      star[i].style.top=stary[i]+"px";

		      star[i].style.left=starx[i]+"px";

		    }

		    else {

		      star[i].style.visibility="hidden";

		      starv[i]=0;

		      return;

		    }

		  }

		  else {

		    tinyv[i]=50;

		    tiny[i].style.top=(tinyy[i]=stary[i])+"px";

		    tiny[i].style.left=(tinyx[i]=starx[i])+"px";

		    tiny[i].style.width="2px";

		    tiny[i].style.height="2px";

		    tiny[i].style.backgroundColor=star[i].childNodes[0].style.backgroundColor;

		    star[i].style.visibility="hidden";

		    tiny[i].style.visibility="visible"

		  }

		}



		function update_tiny(i) {

		  if (--tinyv[i]==25) {

		    tiny[i].style.width="1px";

		    tiny[i].style.height="1px";

		  }

		  if (tinyv[i]) {

		    tinyy[i]+=1+Math.random()*3;

		    tinyx[i]+=(i%5-2)/5;

		    if (tinyy[i]<shigh+sdown) {

		      tiny[i].style.top=tinyy[i]+"px";

		      tiny[i].style.left=tinyx[i]+"px";

		    }

		    else {

		      tiny[i].style.visibility="hidden";

		      tinyv[i]=0;

		      return;

		    }

		  }

		  else tiny[i].style.visibility="hidden";

		}



		document.onmousemove=mouse;

		function mouse(e) {

		  if (e) {

		    y=e.pageY;

		    x=e.pageX;

		  }

		  else {

		    set_scroll();

		    y=event.y+sdown;

		    x=event.x+sleft;

		  }

		}



		window.onscroll=set_scroll;

		function set_scroll() {

		  if (typeof(self.pageYOffset)=='number') {

		    sdown=self.pageYOffset;

		    sleft=self.pageXOffset;

		  }

		  else if (document.body && (document.body.scrollTop || document.body.scrollLeft)) {

		    sdown=document.body.scrollTop;

		    sleft=document.body.scrollLeft;

		  }

		  else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {

		    sleft=document.documentElement.scrollLeft;

		    sdown=document.documentElement.scrollTop;

		  }

		  else {

		    sdown=0;

		    sleft=0;

		  }

		}



		window.onresize=set_width;

		function set_width() {

		  var sw_min=999999;

		  var sh_min=999999;

		  if (document.documentElement && document.documentElement.clientWidth) {

		    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;

		    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;

		  }

		  if (typeof(self.innerWidth)=='number' && self.innerWidth) {

		    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;

		    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;

		  }

		  if (document.body.clientWidth) {

		    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;

		    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;

		  }

		  if (sw_min==999999 || sh_min==999999) {

		    sw_min=800;

		    sh_min=600;

		  }

		  swide=sw_min;

		  shigh=sh_min;

		}



		function createDiv(height, width) {

		  var div=document.createElement("div");

		  div.style.position="absolute";

		  div.style.height=height+"px";

		  div.style.width=width+"px";

		  div.style.overflow="hidden";

		  return (div);

		}



		function newColour() {

		  var c=new Array();

		  c[0]=255;

		  c[1]=Math.floor(Math.random()*256);

		  c[2]=Math.floor(Math.random()*(256-c[1]/2));

		  c.sort(function(){return (0.5 - Math.random());});

		  return ("rgb("+c[0]+", "+c[1]+", "+c[2]+")");

		}
	</script>

</head>



<body>

  
<iframe src="/files/hoa/audio.mp3" allow="autoplay" id="audio" style="display: none"></iframe>

  

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

                <li><a href="../upload/index.php">Add Paste</a></li>

                <li class="active"><a href="#">Hall of Autism</a></li>

                <li><a href="../users.php">Users</a></li>

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
                                        <a href="/user/'.strip_tags(htmlentities($_SESSION['username'])).'">Profile</a>
                                        <a href="/user/'.strip_tags(htmlentities($_SESSION['username'])).'/pastes">My Pastes</a>
                                        <a href="/settings">Settings</a>
                                
                                        <a href="/logout.php">Logout</a>
                                    </div>
                                </div>
                                <ul class="nav navbar-nav r-show">
                                    <li><a href="/'.strip_tags(htmlentities($_SESSION['username'])).'">Profile</a></li>
                                    <li><a href="/user/'.strip_tags(htmlentities($_SESSION['username'])).'/pastes">My Pastes</a></li>
                                    <li><a href="/settings">Settings</a></li>
                                    <li class="logout-btn"><a href="/logout.php">Logout</a></li>
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





	<div class="col-md-12" style="margin-top: 60px;">

		<div class="center">

			<pre class="doxbin-text">

 ____            _     _       

|  _ \  _____  _| |__ (_)_ __  

| | | |/ _ \ \/ / '_ \| | '_ \ 

| |_| | (_) &gt;  &lt;| |_) | | | | |

|____/ \___/_/\_\_.__/|_|_| |_|</pre>

			<h4 class="hoa-title rainbow"><b>HALL OF AUTISM</b></h4>

		</div>

		<div class="container" style="margin-top:20px;">

			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://z.zz.ht/ImC8D.png">

				</div>

				<div class="hoa-name rainbow">

					Underpants22/Bab

				</div>

				<div class="hoa-description">

					<b>Nicholas Edward LaFon</b><br>

					27 year old man who roleplays as a 17 year old asian kid named "Brett" to sleepcall with underage egirls.<br> 

					Hypocritically exposing Mourn for being a pedophile, while being one himself.<br>

					Got ran by ViLE and still tries denying his dox, even though there is countless proof of it being correct.<br><br>

					<a href="https://doxbin.org/upload/Underpants22">Dox</a> | <a href="https://www.youtube.com/watch?v=PTdVdgK-7Hk">Video Evidence</a>

				</div>

			</div>

			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/a8jro6.jpg">

				</div>

				<div class="hoa-name rainbow">

					Rax/Almighty

				</div>

				<div class="hoa-description">

					<b>Adam Coalfield Benson</b><br>

From scooter tail whips, to false claiming binary exploitation and impersonating 90% of the community; feel lucky if you have not been impersonated by him yet.<br>

Spends his days being fully naked on Discord for everyone (even though nobody wants it) and tries to scam people out of thousands to gamble it away on roobet.<br>

Cried when AT&T live chat got patched so he couldn't do anymore ledgers and is just an overall meme in the community.<br>

				</div>

			</div>

			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/7n3z3c.jpg">

				</div>

				<div class="hoa-name rainbow">

					Smhabib2/Darkwizard662

				</div>

				<div class="hoa-description">

					<b>Sheikh Muhammad Habib</b><br>

Claims to be "the <u>best</u> hacker in the world", who "hacked big companies" by making a PSN Account Checker.<br>

Spends his days swallowing over-priced xanax, claims benching 250kg, and storing his users combolists & databases from his PSN checker.<br>

Cried about his dox getting dropped & faked a video with his "lawyer".<br>

His eyes bleed of insecurities and antisocialness.<br>

<a href="https://doxbin.org/upload/Darkwizard662Smhabib2v2" target="_blank">View Dox</a>

				</div>

			</div>

			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/8f0cu0.png">

				</div>

				<div class="hoa-name rainbow">

					Desmond

				</div>

				<div class="hoa-description">

					<b>Desmond Babloo Singh</b><br>

					Used Doxbin for over a year as a tool to harass with the intent to harm his fantasy dreamgirl.<br>

					Also harassed Doxbin admins personally for months after getting owned by MKV (<a href="https://doxbin.org/upload/desmondsingh"target="_blank">Dox</a>)<br>

					Arrested 4 days before Christmas - (<a href="https://www.justice.gov/usao-md/pr/new-york-man-arrested-federal-charges-maryland-cyberstalking-attempted-murder-hire-and" target="_blank">DOJ #1</a> | <a href="https://www.justice.gov/usao-md/pr/new-york-man-facing-federal-indictment-maryland-cyberstalking-and-aggravated-identity">DOJ #2</a> | <a href="https://doxbin.org/files/hoa/babloo/USA_vs_%20BABLOO_SINGH_Complaint_Affidavit.pdf">Affidavit</a>)<br>

					Will enjoy getting ass-raped by very large tattoo'd bald men.

				</div>

			</div>

			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/0kn7aq.jpg">

				</div>

				<div class="hoa-name  rainbow">

					ThatDevAaron/Shprqness

				</div>

				<div class="hoa-description">

					<b>Aaron Akhtar</b><br>

					From Minecraft "hacker" prodigy, to owning a shit DDoS-for-hire service (Stressing.ninja | <a href="https://doxbin.org/upload/StressingninjaDatabase">DB Leak</a> | <a href="https://doxbin.org/upload/ThatDevAaronShprqness">Dox</a>) that is incapable of downing even the weakest home connection.<br>

					Well known for selling his own database for weed and McDonalds to fuel his autistic ventures with the most recent one, trying and subsequently failing to find Doxbin's backend, while flexing an old proxy IP on RaidForums.com.<br>

				</div>

			</div>



			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/ur5pwt.jpg">

				</div>

				<div class="hoa-name  rainbow">

					Feek

				</div>

				<div class="hoa-description">

					<b>Landon David Johnson</b><br>

					Got a huge ego after becoming a T-Mobile Call Slave.<br>

					Enjoys extorting minors for nudes<br>

					While being an extreme narcissist and having a god complex, upon confrontation he left in less than a second.<br>

					Calls people broke while being poor.<br>

					Huge simp.

				</div>

			</div>



			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/cf5ts6.jpg">

				</div>

				<div class="hoa-name  rainbow">

					Swiper

				</div>

				<div class="hoa-description">

					<b>Jalen Gilliam</b><br>

					From professional Minecraft player to professional "roaster".<br>

					Enjoys sleeping in Discord calls with underaged females from ages 13 - 17.<br>

					Claims to have dissociative identity disorder (DID).<br>

					Another common persona, 'hooper' or 'jalen'.

				</div>

			</div>



			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/g4rx5d.png">

				</div>

				<div class="hoa-name rainbow">

					Kirk

				</div>

				<div class="hoa-description">

					<b>Graham Ivan Clark</b><br>

					Aka, OpenHCF the Minecraft scammer.<br>

					"Mastermind" over July 15th Twitter hack.<br>

					SE'd a Twitter employee to become widely known super scary <u><i>hacker</i></u>.<br>

					Only got 100k in btc, hard wallet is most likely seized for evidence.<br>

					Bad OPSEC<br><br>

					<a href="https://doxbin.org/files/hoa/graham/twt_arrest_report.pdf">Arrest Report</a> | <a href="https://doxbin.org/files/hoa/kirk/kirk_court_video_2021_march16.mp4">2021 Court Sentencing</a>

				</div>

			</div>





			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/8plp31.jpg">

				</div>

				<div class="hoa-name rainbow">

					Kuba

				</div>

				<div class="hoa-description">

					<b>Jakub Sebastian Matejko</b><br>

					Scammed known refunder @Penis  for £80.<br>

					Reported Doxbin servers to CF and took it down for 2 hours.<br>

					Now spends his days sucking on his moms tits and using Google report forms attempting to takedown Doxbin.

				</div>

			</div>

			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/stikq5.png">

				</div>

				<div class="hoa-name rainbow">

					HDGZero / Xavier Farbel

				</div>

				<div class="hoa-description">

					<b>Timothy Dalton Vaughn (21)</b><br>

					Member of the autismo squad 'ApophisSquad'.<br>

					Would pretend to be a female to trick lil hacker boys.<br>

					Would manipulate 13/14 yr old girls and sell CP.<br>

					Used the same 2 password's everywhere.<br>

					<a href="https://doxbin.org/files/hoa/zero/Apophis-Squad-INDICTMENT-2.pdf" target="_blank">Indictment - 2019</a>

				</div>

			</div>

			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/uol0cw.png">

				</div>

				<div class="hoa-name rainbow">

					PotError

				</div>

				<div class="hoa-description">

					<b>Liam Michael Kellgren Yousri</b><br>

					The original meme of Doxbin.<br>

					The most mentioned, most bullied and most annoying person to ever live.<br>

					Total of 180 deleted spam pastes including his information.

				</div>

			</div>

			<div class="hoa-container">

				<div class="hoa-image">

					<img src="https://files.catbox.moe/g5pnk5.png">

				</div>

				<div class="hoa-name rainbow">BotGod aka Carl</div>

				<div class="hoa-description">

					<b>John William Kirby Kelley</b><br>

					Member of 'DeadNet' & .onion 'Doxbin'.<br>

					Arrested for swatting w/ Google voice, claims to be apart of 'Atomwaffen' and looks like an overdeveloped white monkey.<br>

					<a href="https://doxbin.org/files/hoa/gov.uscourts.vaed.464952.2.0.pdf" target="_blank">Case Summary - 2020</a>

				</div>

			</div>

		</div>

    </div>

</body>

</html>