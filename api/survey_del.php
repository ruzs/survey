<?php
include_once "base.php";
$id=$_GET['id'];
$Subject->del($id);
$Option->del(['subject_id'=>$id]);
to("../back.php?do=survey");
?>