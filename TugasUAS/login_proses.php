<?php
require_once "inc/config.php";

$login = new App\Login();
echo $_POST['user'];
if (isset($_POST['b_login'])) {
    $login->proses();
    header("location:index.php");
}
