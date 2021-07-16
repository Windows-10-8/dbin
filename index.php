<?php 
include "connect/db.php";

session_start();

function xss($data){
    htmlspecialchars(htmlentities($data));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Doxbin is a document sharing and publishing website for text-based information such as dox, code-snippets and other stuff.">
	    <title>Doxbin</title>
    <link rel="stylesheet" href="https://doxbin.org/legacy/index.css">
    <link rel="stylesheet" href="https://doxbin.org/legacy/css/main.css?r=44">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://doxbin.org/legacy/dropdown.css" rel="stylesheet">
<link href="https://doxbin.org/files/doxbin.css" rel="stylesheet">
<script src="https://doxbin.org/legacy/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://doxbin.org/legacy/logout.js"></script>    	
    <script>

        var order = 'none';
        var type = 'none';
        
    </script>
    <style>
        .table-hover>tbody>tr.rich-post{
            background-color: #3e3704;
        }
        .table-hover>tbody>tr.rich-post:hover{
            background-color: #312c04;
        }
        .table-hover>tbody>tr.clique-post{
            background-color: #09092f;
        }
        .table-hover>tbody>tr.clique-post:hover{
            background-color: #080827;
        }
        .table-hover>tbody>tr.council-post{
            background-color: rgb(17, 49, 70);
        }
        .table-hover>tbody>tr.council-post:hover{
            background-color: rgb(11, 36, 51);
        }
    
    </style>
</head>

<body>
<?php 
    $stmt = $dbh->prepare("SELECT * FROM past LIMIT 100");
    $stmt->execute();
    $fff = $stmt->fetchAll();
    $countt = $stmt->rowCount();
    $tok = md5(rand(0, 12));
    $_SESSION['token'] = $tok; 

?>
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://github.com/DarkRabbit-0/Doxbin">Doxbin Remake</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/Doxbin-2.0/upload/index.php">Add Paste</a></li>
                <li><a href="/Doxbin-2.0/users.php">Users</a></li>
            </ul>
                <div class="sidebar-right">
                <?php
                    if (isset($_SESSION['username'])){
                        if (isset($_SESSION['login'])){
                            if ($_SESSION['login'] == TRUE){
                                echo'</ul>
                                <div class="dropdown r-hide">
                                    <p class="dropbtn">'.strip_tags($_SESSION['username']).'</p>
                                                            <div class="dropdown-content">
                                        <a href="https://doxbin.org/user/charge">Profile</a>
                                        <a href="https://doxbin.org/user/charge/pastes">My Pastes</a>
                                        <a href="https://doxbin.org/settings">Settings</a>
                                
                                        <a href="logout.php">Logout</a>
                                    </div>
                                </div>
                                <ul class="nav navbar-nav r-show">
                                    <li><a href="https://doxbin.org/user/charge">Profile</a></li>
                                    <li><a href="https://doxbin.org/user/charge/pastes">My Pastes</a></li>
                                    <li><a href="https://doxbin.org/settings">Settings</a></li>
                                    <li class="logout-btn"><a href="logout.php">Logout</a></li>
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
                                            </div>';
                    }   ?>
                
                                    
                       
                    
                            </div>
        </div>
    </div>
    
  
             <?php // WONT WORK UNTIL LOGIN IS MADE
           //  $_SESSION['username'] = "";

            // if (str_contains($e['username'], 'Anonymous')){
            //                 echo'<div class="sidebar-right">
            //                         <ul class="nav navbar-nav">
            //             <li ><a href="login.php">Login</a></li>
            //             <li ><a href="register.php">Register</a></li>
            //         </ul>
            //                 </div>';
           //  }   
            // else
            // echo'</ul>
            // <div class="dropdown r-hide">
            //     <p class="dropbtn">'.strip_tags($user['username']).'</p>
             //                            <div class="dropdown-content">
             //        <a href="https://doxbin.org/user/charge">Profile</a>
              //       <a href="https://doxbin.org/user/charge/pastes">My Pastes</a>
              //       <a href="https://doxbin.org/settings">Settings</a>
              //       <a class="logout-btn" href="#">Logout</a>
              //   </div>
            // </div>
            // <ul class="nav navbar-nav r-show">
             //    <li><a href="https://doxbin.org/user/charge">Profile</a></li>
             //    <li><a href="https://doxbin.org/user/charge/pastes">My Pastes</a></li>
              //   <li><a href="https://doxbin.org/settings">Settings</a></li>
              //   <li class="logout-btn"><a href="#">Logout</a></li>
            // </ul>
              //       </div>'
            ?>
         
        </div>
    </div>
</nav>
    <div class="col-md-12">
        <div class="col-md-12" style="margin-top: 60px;float:none;">
            <div align="center">
                <pre style="font: 2px/1px monospace; background-color: #060606; overflow-x: hidden; overflow-y: hidden; border: none; color: white;">
                                             .                                                                                          .                                            
                                            .#                                                                                          #.                                           
                                           #@@                                                                                          @@#                                          
                                          @@@@                                                                                          @@@@                                         
                                         @@@@                                                                                            @@@@                                        
                                       .@@@@@                                                                                            @@@@@.                                      
                                      ,@@@@@                                                                                              @@@@@,                                     
                                     .@@@@@'                                                                                              '@@@@@.                                    
                                   .@@@ @@@                                                                                                @@@ @@@,                                  
                                  .@@@ ,@@@                                                                                                @@@, @@@,                                 
                                 .@@@  @@@'                                                                                                '@@@  @@@.                                
                                ,@@@   @@@                                                                                                  @@@   @@@,                               
                               ,@@@'  ,@@@                                                                                                  @@@,  @@@@,                              
                              ,@@@@   @@@'                                                                                                  @@@@   @@@@,                             
                             ,@@@@    @@@                                                                                                   @@@@    @@@@.                            
                            ,@@@@    :@@@                                                                                                   @@@;     @@@@.                           
                           ,@@@@     @@@@                                                                                                   @@@@     +@@@@                           
                           @@@@`    ,@@@:                                                                                                   :@@@,     @@@@'                          
                          ,@@@@     @@@@                                                                                                     @@@@     .@@@@                          
                         .@@@@      @@@@                                                                                                     @@@@      @@@@#                         
                         @@@@+      @@@@                                                                                                     @@@@`      @@@@`                        
                        :@@@@       @@@@                                                                                                     @@@@;      @@@@@                        
                        @@@@'      `@@@@                                                                                                     @@@@#       @@@@`                       
                       :@@@@       .@@@@                                                                                                     +@@@@       #@@@@                       
                       @@@@'       ;@@@@                                                                                                     ;@@@@        @@@@`                      
                      :@@@@        @@@@@                                                                                                     ,@@@@        @@@@@                      
                      @@@@+        @@@@@                                                                                                      @@@@         @@@@                      
                     .@@@@         @@@@#                                                                                                      @@@@`        @@@@#                     
                     @@@@#         @@@@'                                                                                                      @@@@'        `@@@@                     
                     @@@@         .@@@@;                                                                                                      @@@@@         @@@@;                    
                    +@@@@         '@@@@,                                                                                                      @@@@@         ;@@@@                    
                    @@@@:         #@@@@.                                                                                                      @@@@@          @@@@`                   
                   `@@@@          @@@@@.                                                                                                      @@@@@          @@@@#                   
                   #@@@@          @@@@@.                                                                                                      @@@@@          .@@@@                   
                   @@@@.          @@@@@.                                                                                                      @@@@@           @@@@.                  
                  .@@@@           @@@@@,                                                                                                      @@@@@           @@@@@                  
                  @@@@@           @@@@@;                                                                                                      @@@@@`          .@@@@                  
                  @@@@.           @@@@@'                                                                                                      @@@@@`           @@@@`                 
                  @@@@            @@@@@@                                                                                                      @@@@@            @@@@+                 
                 '@@@@            @@@@@@                                                                                                     `@@@@@            '@@@@                 
                 @@@@#            @@@@@@                                                                                                     :@@@@@             @@@@                 
                 @@@@.            @@@@@@                                                                                                     '@@@@@             @@@@`                
                 @@@@             @@@@@@                                                                                                     @@@@@@             @@@@+                
                ,@@@@             #@@@@@                                       `;##@@@@@@@@@@@@@@@@#'.                                       @@@@@@             #@@@@                
                +@@@@             :@@@@@                                   :#@@@@@@@@@@@@@@@@@@@@@@@@@@@#;                                   @@@@#@             .@@@@                
                @@@@'             `#@@@@:                               +@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@.                               @@@@;@              @@@@                
                @@@@,              @@@@@#                            +@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@`                           `@@@@;#              @@@@                
                @@@@               @;@@@@                         .@@@@@@@@@@@@;`                    ,@@@@@@@@@@@@'                         ;@@@@::              @@@@.               
                @@@@               @ @@@@                       ;@@@@@@@@@@,                             `@@@@@@@@@@#                       @@@@#;.              @@@@'               
               `@@@@               # @@@@.                    ;@@@@@@@@@`                                    +@@@@@@@@#                     @@@@`:               @@@@@               
               ,@@@@               # @@@@#                  ,@@@@@@@@:                                         `@@@@@@@@#                  `@@@@ :               +@@@@               
               :@@@@               : :@@@@                `@@@@@@@#`                                              +@@@@@@@:                #@@@@ #               :@@@@               
               +@@@@               `  @@@@`              +@@@@@@#                                                   +@@@@@@@`              @@@@: +               ,@@@@               
               @@@@@                  @@@@@            `@@@@@@#`                                                      #@@@@@@;            ,@@@@  ,               .@@@@               
               @@@@@                  .@@@@           '@@@@@@:                                                          #@@@@@#           @@@@@                  `@@@@               
               @@@@@                   @@@@#         #@@@@@+   .`                                                    .   ;@@@@@@`        .@@@@`                  `@@@@               
               @@@@@                   :@@@@`      `@@@@@@,  ;@@@                                                   @@@#`  #@@@@@,       @@@@@                   `@@@@               
`              @@@@@                    @@@@@     `@@@@@#  ;@@##@+                                                  @@+@@#  '@@@@@;     +@@@@                    `@@@@              ;
``             @@@@@                    `@@@@#   .@@@@@+ `@+:   @@                                                 .@'  ,+#: ,@@@@@+   ,@@@@+                    `@@@@              +
.#             @@@@@                     +@@@@+ .@@@@@;         @@                                                 #@          @@@@@+ ,@@@@@                     .@@@@             `@
.@             '@@@@                      @@@@@@@@@@@,          ,@                                                 @@           @@@@@@@@@@@                      ,@@@@             #@
,@.            :@@@@                       @@@@@@@@@.            @                                                 @:            @@@@@@@@@.                      ;@@@@             @@
:@@            .@@@@                        @@@@@@@@+;'+@@@;     @                                                 @     ,#@@+';'@@@@@@@@.                       #@@@@            ,@@
:@@             @@@@                         #@@@@@@@@@@@@@@@    #                                                 #    #@@@@@@@@@@@@@@@,                        @@@@#            @@@
,@@'            @@@@                          '@@@@@@@@@@@@@@#   #                                                 ;   `@@@@@@@@@@@@@@#`                         @@@@'            @@@
,@@@            @@@@                           `+@@@@@@@'@@@@@   :                                                 `   .@@@@'#@@@@@@#,                           @@@@`           #@@@
.@@@,           @@@@:                                  .+@@@@@   `                                                     +@@@@@,   `                               @@@@            @@@@
.@@@@           @@@@#                               `:#@@++@@@                                                         :@@@;@@@;`                               `@@@@           '@@@#
 @@@@`          ;@@@@                                     @@@@                                                         `@@@                                     ;@@@@           @@@@+
 @@@@@           @@@@                                     @@@'                                                          @@@                                     @@@@#          ;@@@@:
 @@@@@.          @@@@`                                    @@@`                                                          @@@,                                    @@@@.          @@@@@,
 @@+@@@          @@@@+                                   `@@@                                                           @@@@                                    @@@@          '@@'@@`
 @@@#@@:         '@@@@                                   +@@@                                                           #@@@                                   +@@@@          @@@ @@ 
 @@@ @@@          @@@@                                   @@@@                                                           `@@@                  `                @@@@+         #@@,,@@ 
 @@@ ;@@+         @@@@'                :                 @@@,                                                            @@@+                ,                 @@@@         `@@@ '@@ 
 #@@  @@@`        '@@@@                 '               #@@@                                                             @@@@               ;                 #@@@@         @@@` @@@ 
 :@@  `@@@         @@@@`                 @,             @@@@                                                             +@@@`             #                  @@@@;        +@@#  @@@ 
 `@@.  +@@+        @@@@@                  ##           .@@@'                                                              @@@@           ;@                  :@@@@        `@@@   @@@ 
  @@@   @@@.       `@@@@`                  .@@         @@@@                                                               @@@@         +@+                   @@@@#        @@@`  .@@+ 
  @@@    @@@        @@@@@                    #@@+`    #@@@@                                                               :@@@@`    :@@@                    '@@@@        @@@'   @@@: 
  @@@#   :@@@       `@@@@:   `                 '@@@@@@@@@@.                                                                @@@@@@@@@@#                      @@@@#       +@@@   .@@@  
  @@@@    #@@#       #@@@@                        .'##@@@@                                                                 +@@@@##:                    `   @@@@@       ,@@@    @@@@  
  @@@;@    @@@+       @@@@@   `                      @@@@:                                                                  @@@@                      ;   '@@@@:       @@@    ,@@@@  
  ,@@;@     @@@,      ,@@@@@   '                    :@@@@                                                                   +@@@@                    '   .@@@@@       @@@,    @.@@@  
   @@@:@     @@@`      +@@@@@   '`                  @@@@,                                                                    @@@@;                  +   ;@@@@@       @@@'    ;@ @@#  
   @@@ @,    .@@@`      @@@@@@`  #;                @@@@@                                                                     ;@@@@`               `@   #@@@@@       @@@+     @`:@@.  
   @@@ ,@     :@@@       @@@@@@,  +@,             @@@@@                                                                       @@@@@`            `@@  `@@@@@@`      #@@@     #@ #@@   
   @@@  @#     '@@@       @@@@@@@` ,@@+.       `:@@@@@,                                                                        @@@@@+`       `;@@+  '@@@@@@`      #@@@     .@  @@@   
   :@@.  @,     +@@@       +@@@@@@'  ;@@@@@@@@@@@@@@@'                                                                          @@@@@@@@@@@@@@@+  ,@@@@@@@       #@@@      @+  @@@   
    @@#  +@      +@@@       :@@@@@@@#. :#@@@@@@@@@@@'                                                                           `@@@@@@@@@@@#' .;@@@@@@@+       #@@@      #@   @@@   
    @@@   @@      +@@@`      @@@@@@@@@@@@@@@@@@@@@@;                                                                              @@@@@@@@@@@@@@@@@@@@@@       #@@@      '@`  ;@@`   
    @@@   `@#      '@@@`     @@@@@@@@@@@@@@@@@@@@@                                                                                 +@@@@@@@@@@@@@@@@@@@@.     #@@@      .@'   @@@    
    '@@    ;@;      '@@@.   :@@@@ :#@@@@@@@@@@@#.      `                                                                      `      '@@@@@@@@@@@@' #@@@@    #@@@      `@@    @@@    
    `@@+    #@,      ;@@@,  @@@@#    `:''++''.       `.                                                                        :       `:''++''.     @@@@   @@@#       @@     @@@    
     @@@     @@`      :@@@: @@@@                    ;,                                                                          +                    @@@@;`@@@#       #@`    ,@@,    
     @@@     @@@`      ,@@@@@@@@                   ,                                                                             :                   '@@@@@@@'       #@@.    @@@     
     +@@ `   @#@@       `@@@@@@+                                                                                                                      @@@@@@;       #@#@`  ` @@@     
     `@@'    @:,@@        #@@@@                                                                                                                       @@@@@.       #@# @`  ` @@@     
      @@@ :  @` :@@       `@@@@           ,,                                     `                                                       .:           #@@@@       #@@  @, : :@@,     
      @@@  +;@   ;@@`     +@@@@             +#.                                                    `                                   +@`            .@@@@      #@@   @@:. @@@      
      '@@` `#,    ;@@.    @@@@@              :@.                                  .               ,                                   @#               @@@@     @@@     #:  @@@      
       @@#         :@@;   @@@@:              .@'                                   +             .                                    @#               @@@@   `@@@          @@#      
       @@@         @@@@#  @@@@;              @@                                    .;            @                                    @@`              @@@@  :@@@@;        +@@`      
       @@@        @@.'@@@`@@@@@             ,@:                                     @`          @                                      @@             .@@@@ #@@#,#@        @@@       
       :@@,       @@  `@@@#@@@@             @#                                      .@         +@                                      .@`            @@@@@@@@,  ;@        @@@       
        @@@       +@    #@@@@@@@           ;@                                        @`        @,                                       '@           ;@@@@@@@`   ;@       .@@+       
        @@@       `@     ,@@@@@@'          @                                         @         @`                                        #.          @@@@@@+     ##       @@@        
        +@@        @       '@@@@@.        ;`                                         @         @                                          @         @@@@@@`      @`       @@@        
        `@@+       +        ;@@@@@        ;                                          @         :                                           `       #@@@@@        @        @@@        
         @@@        ,        :@@@@+      ,                                           @                                                     .       @@@@@         +       '@@.        
         @@@        #         ;@@@@                                                  .                                                            @@@@@         `        @@@         
         .@@'       ,          @@@@.                                                                                                              @@@@          ;        @@@         
          @@@                  ,@@@@                                                                                                              @@@@          .     ` #@@,         
          #@@.       .          @@@@                                                                                                             ,@@@'                  @@@          
           @@@ #.               @@@@                                                                                                             :@@@:         `     @ @@@+          
           '@@@.@@              @@@@                                               ;                                                             '@@@:             '@`@@@@           
            '@@@,:@             @@@@   .@@,                                        #             `                                        `+@'   @@@@'            ## @@@@            
             ;@@@` #           .@@@@     :@@@@:`                                   @             .                                    ,@@@@+     @@@@@           #` @@@@             
              :@@@` '          +@@@ :      ,@@@@@#`                                @             '                                `;@@@@@'       ,@@@@          +  @@@@              
               ;@@@. ,         @@@@ +        `#@@@@@#`                             @             @                             `;@@@@@@:        ` @@@@         ;  @@@@               
                :@@@. `        @@@@             '@@@@@@+`                          @             @.                          :@@@@@@#           , `@@@`       .  @@@#                
                 :@@@,         @@@.              @@+@@@@@@;`                       @             @'                       ,@@@@@@#@@               @@@+      `  @@@#                 
                  ,@@@:       '@@@               :@ @@+@@@@@@,                     @             @@                    .#@@@@@#@@ @@               @@@@     ` `@@@#                  
                   .@@@;      @@@@                @ .@+ .#@@@@@#.                 `@             @@                 `'@@@@@#; `@@ @'               ,@@@      `@@@#                   
                    .@@@+     @@@:                @; @@`   :#@@@@@:               ,@`            @@               .@@@@@@'    @@` @                 @@@:    .@@@+                    
                     `@@@#   ,@@@                  @ ,@@      '@@@@@#.            :@`            @@             ;@@@@@+.     +@# :;                 @@@@   :@@@'                     
                       @@@@  #@@@                  ;  @@#       ,#@@@@@,          '@.            @@          `#@@@@@;       :@@  #                  #@@@  '@@@;                      
                        @@@@`@@@#                   ;  @@#         '@@@@@:        #@:            @@        .#@@@@#.        :@@. .                   `@@@`#@@@.                       
                         #@@@@@@.                    `  @@#          :#@@@@;      @@@            @@      ,@@@@@'          +@@:                       @@@@@@@`                        
                          ;@@@@@                         @@@:          .@@@@@'    @@@            @@    :@@@@@#          .#@@,                        @@@@@@                          
                           ,@@@@                          +@@@;`     ,+@@@@@@@@+  @@@           `@@  :@@@@@@@@#:`     :#@@@`                         @@@@+                           
                            @@@@                           .@@@@@@@@@@@@@;#@@@@@@'@@@           .@@;@@@@@@@;@@@@@@@@@@@@@:                           @@@@                            
                            @@@@                             .'@@@@@@#;`:@@;  @@@@@@@           ,@@@@@@. .@@+ :#@@@@@@#,                             @@@@                            
                            @@@@                             `        ,+:`   ,` ;@@@@           :@@@#` :.   ,';                                      @@@@                            
                            @@@@                              ;@@@;:.                                           `::@@@'.                             @@@@                            
                            #@@@,                                                                                                                    @@@@                            
                            .@@@@                                                                                                                   ;@@@@                            
                             @@@@:                                                                                                                  @@@@,                            
                             #@@@@                                                                  .                                              @@@@@                             
                              @@@@@                                             #'                  +                                             +@@@@,                             
                              .@@@@@                                           #`#                 + @                                           '@@@@@                              
                               +@@@@@                                         ;  #                 @  ,.                                        ;@@@@@                               
                                #@@@@@                       `,:+++,``           @`                @            `,++++,.                       ;@@@@@                                
                                 #@@@@#               `;#@@@@+.                  @;                @                  `;@@@@##.               :@@@@@                                 
                                  #@@@@+     `.,:'#@@@@@@,`                      @@               :@                       .+@@@@@#';:.`     `@@@@@                                  
                                   #@@@@:      .@:,@@@#                          @@               @@                          :@@@'`#+       @@@@@                                   
                                    @@@@@        @:  +@@@                        @@:              @@                        ;@@@   @:       @@@@@`                                   
                                     @@@@@        @#  `@@@.                      @@@             .#@                       @@@+  .@.       ;@@@@:                                    
                                     .@@@@.        @#  ;@@@+                     @@'             @ @`                    `@@@@  .@,        @@@@@                                     
                                      @@@@@         @;  +@@@#                    @; `            , @'                   `@@@@   @;        #@@@@                                      
                                       @@@@+        `@   @@@@+                  `@. ;           `  @@                  `@@@@   @+        `@@@@'                                      
                                       @@@@@.        ;#   @@@@,                 @@              `  @@                  @@@@:  `@         @@@@@                                       
                                        @@@@@         @   :@#@@`                @@   `             @@                 @@#@@   @         #@@@@#                                       
                                        @@@@@'         +   @@+@@                @@                 ,@+               #@@@@   `,         @@@@@                                        
                                        ;@@@@@         ,    @@@@#              #@,                  @@              ,@@:@'   #         @@@@@@                                        
                                         @@@@@+         :   +@.@@'             @@                   @@,            `@@:@@             `@@@@@+                                        
                                         @@@@ @              @@`@@.           +@'                    @@            @@++@,   :         @`@@@@                                         
                                         '@@@;..             '@.;@@`          @@                     @@`          @@@ @@              + @@@@                                         
                                          @@@@ +              @@ +@@          @@@                   #@@`         #@@ '@.             . `@@@@                                         
                                          @@@@                +@. #@@         .@@@                 +@@#         #@@  @@              , @@@@`                                         
                                          @@@@                 @@  #@@`        '@@#               :@@#         #@@` :@:                @@@@                                          
                                          +@@@                 #@`  #@@,        #@@'             `@@@        `@@@`  @@                 @@@@                                          
                                          `@@@.                 @#   ;@@#        @@@`            @@@`       :@@#   .@#                 @@@@                                          
                                           @@@:                 @@    ,@@@:       @@@           #@@;      .@@@;    @@                  @@@,                                          
                                           @@@@                 ;@;     +@@@;     ;@@#         .@@@     ,#@@@`     @@                  @@@                                           
                                           @@@@                  @@      +@@@@#:   @@@`        @@@   `'@@@@+      '@:                 .@@@                                           
                                           '@@@                  @@;      .,'@@@@@'+@@@       ;@@@;#@@@@#...      @@                  +@@@                                           
                                           `@@@#`                :@@`     `   ,+@@@@@@@.      @@@@@@@#:   :      @@@                 '@@@@                                           
                                            @@@@@#                @@@            `'#@@@@     ;@@@@;:            +@@;               '@@@@@`                                           
                                            `@@@@@@'              @@@@            `+ ;@@`    @@@ .:            ;@@@              ,@@@@@@:                                            
                                              +@@@@@@`            '@@@#    #`         @@@   .@@.         #    ,@'@@             #@@@@@@`                                             
                                               .@@@@@@'            @@ @+   @@         ;@@   @@@         #@   .@,@@+           .@@@@@@:                                               
                                                 ;@@@@@#           @@` @'  @@@         @@.  @@`        +@@  `@, @@           '@@@@@@                                                 
                                                  `@@@@@@          #@@  @' @.@@    @,  '@@ ;@@   @    ;@,@ `@. .@@          #@@@@@,                                                  
                                                    +@@@@@          @@   #'@:`@+   @@   @@ @@,  @#;  `@# @ @`  @@#         @@@@@@`                                                   
                                                     ,@@@@@`        @@:   ;@@ ;@.  @`@  #@@@@  .+,@  @#  @#    @@         @@@@@@                                                     
                                                      `@@@@@        #@@    .@  +@ `@ @`  @@@;  @ `@ @@  ++    ;@@        @@@@@+                                                      
                                                       `@@@@@        @@         #@ '  @  @@@  ';  @:@         @@'       +@@@@'                                                       
                                                        `@@@@@       @@@         ##;  +, @'@  @   #@         `@@       :@@@@+                                                        
                                                         .@@@@;      ,@@          #:   @ @ @ ',   @          @@@       @@@@@                                                         
                                                          +@@@@       @@#          .   ;`@ ;`@              .@@       @@@@@                                                          
                                                           @@@@@      :@@`              #'  #               @@@      `@@@@                                                           
                                                            @@@@   .   @@@                  '              #@@   ;   @@@@#                                                           
                                                            @@@@#   `   @@@  `                            '@@'   #  `@@@@                                                            
                                                             @@@@   @   :@@@+;                         `''@@@   ;`  @@@@+                                                            
                                                             @@@@.  @`   '@@@.                         +@@@@    @   @@@@                                                             
                                                             .@@@@  @@    ;@@@@`    `            ,    +@@@#    .@  `@@@@                                                             
                                                              @@@@  `@     `@@@@@:;'#   `       ,.':'@@@@;     @@  '@@@:                                                             
                                                              @@@@   @@      ;@@@@@+,'`.''``'; ,:'@@@@@+      :@   @@@@                                                              
                                                              @@@@   ,@#       .+@@@@@@@@@@@@@@@@@@@#;       ,@#   @@@@                                                              
                                                              @@@@#   ;@@:`        ,'++++:`.'++++,`        ,@@#   ;@@@@                                                              
                                                              '@@@@@`   ;#@@@':,,..``            `...,:;@@@@+`   #@@@@@                                                              
                                                               '@@@@@`          `,'''++++;,:;+++''':.           #@@@@@                                                               
                                                                ,@@@@@`                                        #@@@@#                                                                
                                                                 `@@@@@`                                      #@@@@'                                                                 
                                                                  `@@@@@                                     #@@@@'                                                                  
                                                                   `@@@@@                                   #@@@@'                                                                   
                                                                    `@@@@@                .+##             ;@@@@+                                                                    
                                                                     ,@@@@#             ,;`    `          .@@@@#                                                                     
                                                                      ;@@@@;                              @@@@@                                                                      
                                                                       #@@@@`                            @@@@@                                                                       
                                                                        @@@@@                           #@@@@`                                                                       
                                                                         @@@@#                         .@@@@;                                                                        
                                                                         ,@@@@`                        @@@@@                                                                         
                                                                          #@@@@                       +@@@@                                                                          
                                                                           @@@@;                      @@@@:                                                                          
                                                                           ;@@@@                     #@@@@                                                                           
                                                                            @@@@,                    @@@@.                                                                           
                                                                            '@@@@,                  @@@@@                                                                            
                                                                             @@@@@@#`            '#@@@@@;                                                                            
                                                                             ,@@@@@@@@@@#####@@@@@@@@@@@                                                                             
                                                                              `@@@@@@@@@@@@@@@@@@@@@@@;                                                                              
                                                                                `@@@@@@@@@@@@@@@@@@@:                                                                                
                                                                                   `;@@@@@@@@@@@#.                                                                                   
</pre>
<?php 
    $stmt = $dbh->prepare("SELECT * FROM past LIMIT 100");
    $stmt->execute();
    $fff = $stmt->fetchAll();
    $countt = $stmt->rowCount();
    $tok = md5(rand(0, 12));
    $_SESSION['token'] = $tok; 

?>

<h5 class="announcement a-1" style="color:#00ACEE;"><u><a style="color:inherit;" href="https://github.com/DarkRabbit-0/Doxbin">Doxbin</a></u></h5>
                <noscript><p style="color: red; padding: 0px 0px 10px 0px; text-align: center; margin: 0;">Searching requires JavaScript to function correctly.<br>Alternatively, you can type <u>search/{query}</u> in the address bar.</p></noscript>

                <div id="error-msg" style="color: red; padding: 0px 0px 10px 0px; text-align: center; margin: 0;"></div>
				<label for="search-form">Search for a paste</label>
				
				<form id="search-form" method="POST" action="search/index.php">
                    <input type="hidden" name="_token" value="<?php echo $tok; ?>">
					<input name="search-query" type="text" placeholder="Search for...">
					<input type="submit" value="Search">
				</form>
				<br>
                <?php if(!empty($_SESSION['error'])){
                    echo $_SESSION['error'];
                    $_SESSION['error'] = ""; 
                } 
                
                ?>
<p>Showing 100 (of <?php echo intval($countt); ?> total) pastes</p>
<div class="center">
</div>
</div>
</div>
        <div class="col-md-7" style="float:none;margin:auto;padding:0;">
            <table class="table table-striped table-hover">
                <tbody>
                                    
                <script>console.log('1v');</script>

</tbody>
</table>
            <!-- normal pastes -->
            <table class="table table-striped table-hover" style="margin-top: 0px;">
                <thead>
                    <tr>
                        <th colspan="3">Title</th>
                        <th class="clickable text-center" id="commentsorder" style="width: 105px;">Comments </th>
                        <th class="text-center">Views</th>
                        <th colspan="2" class="text-center">Created by</th>
                        <th class="clickable text-center r-hide" id="dateorder" style="width: 120px">Added </th>
						                    </tr>
                </thead>
                <tbody>
                    


                <?php
                
                foreach($fff as $e){
                    $test = trim($e['username'], $e['num']);
                    $_SESSION['us'] = $test;

                    if (str_contains($e['username'], 'Anonymous')) {
                        $_SESSION['us'] = "Anonymous";
                    }
                    $time = strtotime($e['add']);
                    if ($time) {
                        $new_date = date('m-d-y', $time);
                    }
                    $doxname = preg_replace('/[_]+/', ' ', strip_tags($e['title']));
                    echo '
                    <tr class="doxentry  " id="'.intval($e['id']).'">
                    <td colspan="3" style="overflow: hidden; text-overflow: ellipsis;"><a title="'.strip_tags(htmlentities($e['title'])).'" href="upload/view.php?id='.strip_tags($e['id']).'">'.$doxname.'</a></td>
                    <td style="width: 105px;" class="text-center">'.intval($e['com']).'</td>
                    <td class="text-center">'.intval($e['view']).'</td>
                    
                    <td colspan="2" style="padding-bottom: 0; max-width: 140px;" class="text-center">
                    <a class="dox-username" title="'.xss($e['username']).'" style="color: #2a9fd6" href="/user/'.xss($e['username']).'">'.htmlentities($_SESSION['us']).'</a> 
                    </td>
                    <td style="width: 120px" class="text-center r-hide">'.$new_date.'</td>
                    </tr> 
                    
                
                    ';
                }
                // charge is big brain at time
                ?>
                
</tbody>
</table>
</div>
</div>
	<div class="center">
        
        <p>Showing 100 (of <?php echo intval($countt); ?> total) pastes</p>
		<br>
		<a href="#">Back to top</a>
		<br><br>
	</div>
</body>
</html>
    