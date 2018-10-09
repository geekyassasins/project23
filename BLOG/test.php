<?php
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

echo encrypt_url("admin@gmail.com")."<br>";
echo encrypt_url("admin@123")."<br>";
?>
