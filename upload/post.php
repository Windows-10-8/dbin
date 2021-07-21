<?php 

// * post api made by nano * \\
// *        ilysm           * \\

if (!isset($_SESSION)){

    session_start();
}

include "../connect/db.php";
function xss($data){
    htmlentities(strip_tags($data));
}
if (isset($_SESSION['username'])){

} else {
    $_SESSION['username'] = "";
}



// totally the BEST token check EVER made :wink: 
if (isset($_POST['_token'])){
    if(isset($_SESSION['token'])){
        if (empty($_POST['_token'])){
            $_SESSION['error'] = "Token Error";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
        if (!$_POST['_token'] == $_SESSION['token']){
            $_SESSION['error'] = "Token Error";
            echo '<script>window.location = "index.php";</script>';
            die();
        
        }
    } else{
        echo '<script>window.location = "index.php";</script>';
        die();
    }

} else {
    $_SESSION['error'] = "Token Error";
    echo '<script>window.location = "index.php";</script>';
    die();
}

if (isset($_POST['pasteTitle'])) {
    
    if (isset($_POST['pasteContent'])){
        // uwu pregmatch bypass me pwease 
        if(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $_POST['pasteTitle'])){
            $_SESSION['error'] = "special characters not allowed!";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
        if(stripos($_POST['pasteTitle'], '<') !== false) { 
            $_SESSION['error'] = "special characters not allowed!";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
        if(stripos($_POST['pasteTitle'], '>') !== false) { 
            $_SESSION['error'] = "special characters not allowed!";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
        if(stripos($_POST['pasteTitle'], 'alert') !== false) { 
            $_SESSION['error'] = "title not allowed!";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
        if(stripos($_POST['pasteTitle'], "'") !== false) { 
            $_SESSION['error'] = "special characters not allowed!";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
        
    
        // check paste string count 
        if(strlen($_POST['pasteTitle'])>50) {
            $_SESSION['error'] = "Title is too long!";
            echo '<script>window.location = "index.php";</script>';
            die();
         }
         


         if(!strlen($_POST['pasteTitle']) > 3) {
            $_SESSION['error'] = "Title is not long enough!";
            echo '<script>window.location = "index.php";</script>';
            die();
         }
         if(!strlen($_POST['pasteTitle']) > 14) {
            $_SESSION['error'] = "Paste is not long enough!";
            echo '<script>window.location = "index.php";</script>';
            die();
         }
        // check if empty TODO make function that checks nulls and 0 
        if (strlen($_POST['pasteContent'] == 0)){
            if (strlen($_POST['pasteTitle'] == 0)){
                $_SESSION['error'] = "title is emtpy!";
                echo '<script>window.location = "index.php";</script>';
                die();
            }
            $_SESSION['error'] = "Paste is emtpy!";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
    
        if (empty($_POST['pasteContent'])){
            $_SESSION['error'] = "Paste is emtpy!";
            echo '<script>window.location = "index.php";</script>';
            die();
        
        }
        if (empty($_POST['pasteTitle'])){
            $_SESSION['error'] = "Paste is emtpy!";
            echo '<script>window.location = "index.php";</script>';
            die();
        
        }
        // LMFAO imma use a function for cleaning xss into data tables < : : : : :: im big brain totally 
        $tit = xss($_POST['pasteTitle']);
        $tit2 = filter_input(INPUT_POST, 'pasteTitle', FILTER_SANITIZE_SPECIAL_CHARS);
        if(!$_SESSION['username']){
            $_SESSION['username'] = "Anonymous";
        }

        // com is set to 0 since i'm to lazy to add the field LOL
        
            
            $doxname = preg_replace("/[^A-Za-z0-9_]+/","_", $tit2);
            // yas 
            $doxname = trim($doxname, '_');
            $doxname = trim($doxname, '60');
            $doxname = trim($doxname, '62');
            $doxname = trim($doxname, '39');
            $doxname = trim($doxname, '%27');
            $doxname = trim($doxname, '%3C');
            
            $doxname = trim($doxname, '%3B');
            
            $doxname = preg_replace('/[_]+/', '_', $doxname);

            if(file_exists("uploads/".$doxname.".txt")) {
                $_SESSION['error'] = "A paste with that title already exists.";
                echo '<script>window.location = "index.php";</script>';
               die();
            }

            // remove ascii
            //$esy = preg_replace('/[^(\x0A\x0D\x20-\x7F)]+/', '?', $_POST['pasteContent']);
            $esy = preg_replace('/</', '?', strip_tags($_POST['pasteContent']));
            
            

            $fileName = fopen("uploads/".$doxname.".txt","w"); // done :3

            fwrite($fileName,$esy);
            fclose($fileName);
            chmod("uploads/".$doxname.".txt", 0644);
            $id = $dbh->lastInsertID(); // to prevent com kids having a big ego with there shitty uq IDs
            $sql = "INSERT INTO past (id, username, title, com, num) VALUES (:id, :username, :title, :com, :num)"; 
            $num = "-".md5(rand(0,9999))."-".md5(rand());
            $result = $dbh->prepare($sql);
                $values = array(':username'     => $_SESSION['username'].$num,
                                ':title'        => strip_tags($doxname),
                                ':com'     => $id,
                                ':id'           => $id,
                                ':num'      => $num
                                );
                $res = $result->execute($values);
            
           
                if ($res){
                    // set value
                    echo '<script>window.location = "../";</script>';
                }
    }else {
        // .. balls in yo jaws 
        echo "u are not supposed to be here > . <";
        echo "<script>window.location = 'index.php'</script>";
        die();
    }
    

} else {
    // .. balls in yo jaws 
    echo "u are not supposed to be here > . <";
    echo "<script>window.location = 'index.php'</script>";
    die();
}
?>
