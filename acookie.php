<?php
$name = "user";
$value = "AlKa";
setcookie($name, $value, time()+(10), "/");
?>

<html>
<body>

<?php
if(!isset($_COOKIE[$name])) {
    echo "Cookie '".$name."' is not set!";
} else {
    echo "Welcome " . $value;
    }
	
?>
</body>
</html>