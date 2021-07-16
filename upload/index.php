<!DOCTYPE html>
<?php 

include "../connect/db.php";
function xss($data){
    htmlspecialchars(htmlentities($data));
}
session_start();
?>
<?php 
if(isset($_SESSION['token'])){
    if (empty($_SESSION['token'])){
        die(header("location: ../"));
    }
} else{
    die();
}
?>
<html lang="en" style="" class=" js no-touch svg inlinesvg svgclippaths no-ie8compat"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>Doxbin  - Create new paste</title>

    <link rel="stylesheet" href="https://doxbin.org/legacy/app.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    <link href="https://doxbin.org/legacy/toastr/toastr.min.css" rel="stylesheet">

    <script src="https://doxbin.org/legacy/custom.modernizr.js"></script><script data-dapp-detection="">!function(){let e=!1;function n(){if(!e){const n=document.createElement("meta");n.name="dapp-detected",document.head.appendChild(n),e=!0}}if(window.hasOwnProperty("ethereum")){if(window.__disableDappDetectionInsertion=!0,void 0===window.ethereum)return;n()}else{var t=window.ethereum;Object.defineProperty(window,"ethereum",{configurable:!0,enumerable:!1,set:function(e){window.__disableDappDetectionInsertion||n(),t=e},get:function(){if(!window.__disableDappDetectionInsertion){const e=arguments.callee;e&&e.caller&&e.caller.toString&&-1!==e.caller.toString().indexOf("getOwnPropertyNames")||n()}return t}})}}();</script>

    <meta name="dapp-detected"></head>
<body class="bin" style="">
        <div class="wrapper">
        <div class="table">
                <a href="#" class="show-sidebar show"><i class="fa fa-arrow-right"></i></a>
                <?php 

?>
    <form action="post.php" id="paste-form" method="POST" class="editor-form">
        <input type="hidden" name="_token" value="<?php echo $_SESSION['token']; ?>">
        <div class="sidebar" style="text-align: center;padding-top: 0;">
            <a class="sidebar-logo" href="../index.php">
<pre>  ____            _     _       
 |  _ \  _____  _| |__ (_)_ __  
 | | | |/ _ \ \/ / '_ \| | '_ \ 
 | |_| | (_) &gt;  &lt;| |_) | | | | |
 |____/ \___/_/\_\_.__/|_|_| |_|
</pre>
</a>


            <div class="options">  
            <p style="color:red;" id="paste-error"><?php if(isset($_SESSION['error'])){ if(!empty($_SESSION['error'])) { foreach(array($_SESSION['error']) as $ee) { echo $_SESSION['error']; $_SESSION['error'] = ""; } } } ?></p>              
                
                
            <?php
            if (!isset($_SESSION['login'])){
                echo '<p style="text-align: center;"><a style="color: #2a9fd6;" target="_blank" href="../register.php">Create an account</a> to manage your pastes</p>';  
            } 
            ?>
                                
<p style="color:red;text-align: center;font-size:15px;"><b>READ TOS BEFORE POSTING.</b><br> Any post that violates our TOS will be removed.</p>
                                <h3>Title:</h3>
                <input type="text" name="pasteTitle" id="paste-title" maxlength="70" value="">

            </div>
                        <div class="options">
                <ul>
                    <li><input type="submit" id="create-paste" value="Create" data-bptrigger="1" class="button"></li>
                    <li><input type="reset" value="Clear" class="button"></li>
                    <li><input type="button" value="Back" class="button" onclick="window.location = '../'"></li>
                </ul>
            </div>
            <p>Please note that all posted information is publicly available and must follow our <a href="https://doxbin.org/tos" style="text-decoration: underline;">TOS.</a></p>
        </div>
 <!--- IF LOGGED IN --->
        <div class="editor-container">
            <textarea name="pasteContent" id="paste-content" class="editor mousetrap" wrap="off"></textarea>
        </div>
    </form>
    <script src="https://doxbin.org/legacy/jquery.min.js"></script>    
    <script type="text/javascript">
        $(document).ready(function(){ 
            $('#paste-form').on('submit', function(e){
                window.BotProtect.register({
                    publicKey: 'IW6Ln3zNuCWJK03FQshvS7WZBK620EjN',
                    callback: function(token) {
                        $.post('post.php', {
                            _token: $('input[name=_token]').val(),
                            pasteTitle: $('#paste-title').val(),
                            pasteContent: $('#paste-content').val(),
                            
                        }, function(resp){
                            if(resp.status == "err"){
                                $('#paste-error').text(resp.msg);
                            }else{
                                window.location = "../";
                            }
                        }).fail(function(){
                            $('#paste-error').text('Error');
                        });
                    }
                });
                e.preventDefault();
            });
        });
    </script>
        </div>
    </div>
    
    <script src="https://doxbin.org/legacy/jquery.min.js"></script>
    <script src="https://doxbin.org/legacy/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="https://doxbin.org/legacy/mousetrap.min.js"></script>
    <script src="https://doxbin.org/legacy/tabby.js"></script>
    <script src="https://doxbin.org/legacy/zclip.min.js"></script>
    <script src="https://doxbin.org/legacy/toastr/toastr.min.js"></script>
    <script src="https://doxbin.org/legacy/bin.js"></script>
    <script src="https://doxbin.org/legacy/google-code-prettify/prettify.js"></script>


<iframe srcdoc="blank page" style="display: none;"></iframe></body></html>