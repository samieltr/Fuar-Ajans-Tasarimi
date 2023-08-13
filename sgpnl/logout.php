<?php
session_start();
session_unset();
session_destroy();
setcookie("cerez", md5("aa" . $txtKadi . "bb"), time() - 1);

header("location:login.php");

?>