<?php
include_once "base.php";


$subject=$Subject->find(['id' => $_GET['id']]);
$subject['active']=($subject['active']+1)%2;
$Subject->save($subject);

header("location:../back.php?do=survey");

?>