<?php include_once 'base.php';
echo $User->count(['acc'=>$_POST['acc']]);
?>