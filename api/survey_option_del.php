<?php 
include_once "base.php";
$subject_id=$Option->find($_GET['id'])['subject_id'];
$Option->del($_GET['id']);
header("location:../back.php?do=survey_edit&id=$subject_id");
?>