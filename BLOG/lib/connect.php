<?php
session_start();
function encrypt_url($string) {
  $key = "NARMRS_BLOG_19920813"; //key to encrypt and decrypts.
  $result = '';
  $test = "";
   for($i=0; $i<strlen($string); $i++) {
     $char = substr($string, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)+ord($keychar));

     $test[$char]= ord($char)+ord($keychar);
     $result.=$char;
   }

   return urlencode(base64_encode($result));
}


function decrypt_url($string) {
    $key = "NARMRS_BLOG_19920813"; //key to encrypt and decrypts.
    $result = '';
    $string = base64_decode(urldecode($string));
   for($i=0; $i<strlen($string); $i++) {
     $char = substr($string, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)-ord($keychar));
     $result.=$char;
   }
   return $result;
}

include "../config.php";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

function isLoggedin ($db)
{
    if (isset($_SESSION['admin_id'])) {
    
        $query = mysqli_query($db, "SELECT * FROM AdminMaster WHERE admin_id=".mysqli_real_escape_string($db, $_SESSION['admin_id'])."") or die(mysql_error());
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
      
        if ($_SESSION['login_hash'] == hash('sha1', $row['username'] . $row['admin_id'])) {
            return true;
        } else {
            session_destroy();
            header("location: ../");
        }
    }

    else {
      session_destroy();
      header("location: ../");
    }
}

date_default_timezone_set('Asia/Kolkata');

?>
