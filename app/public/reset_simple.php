<?php
$cookie_name = "android_webview_communicate_cookie";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    $original_value = $_COOKIE[$cookie_name];
    $new_cookie_value = "this-is-set-by-Web";
    setcookie($cookie_name, $new_cookie_value, time()+3600);
    $changed_value = $_COOKIE[$cookie_name];
    echo "Cookie from App was: <b>" . $original_value . "</b><br>";
    echo "Reset cookie to value <b>" . $new_cookie_value . "</b><br>";
}    
?>
