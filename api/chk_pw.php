<?php include_once 'base.php';
$chk=$User->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
$user = $User->find(['acc' => $_POST['acc']]);
if($chk>0){
  echo $chk;
  $_SESSION['login']=$_POST['acc'];
}else{
  echo $chk;
}
?>