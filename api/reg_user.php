<?php
include_once "base.php";
unset($_POST['pw2']);
echo $User->save($_POST);
$_SESSION['login']=$_POST['acc'];
?>