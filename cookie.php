<?PHP
    $cookie_name = "user";
    $cookie_value = "Hamad Bakeel Abdullah";
    // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $cookie_name2 = "user2";
    $cookie_value2 = "Hamad Bakeel Abdullah";
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?PHP
    if(!isset($_COOKIE[$cookie_name2])) {
    echo "Cookie named '" . $cookie_name2 . "' is not set!";
    } else {
    echo "Cookie '" . $cookie_name2 . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name2];
}
?>

</body>
</html>