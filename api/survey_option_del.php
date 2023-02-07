<?php 
include_once "base.php";
$Option->del($_GET['id']);
$subject_id=$Option->find($_GET['id'])['subject_id'];
to("../back.php?do=survey_edit&id=$subject_id");
?>