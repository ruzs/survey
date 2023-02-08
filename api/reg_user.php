<?php
include_once "base.php";
unset($_POST['pw2']);
switch($_POST['level']){
  case"friend":
    $_POST['level']=2;
    break;
    default:
    $_POST['level']=1;
}
$User->save($_POST);
$_SESSION['login']=$_POST['acc'];
?>