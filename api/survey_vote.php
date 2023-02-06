<?php
include_once "base.php";
if (isset($_POST['option'])) {
  $option_id=$_POST['option'];
  $option= $Option->find($option_id);
  $subject= $Subject->find($option['subject_id']);
  $subject['vote']++;
  $option['vote']++;
  $id=$subject['id'];
  $Subject->save($subject);
  echo "<hr>";
  $Option->save($option);
  echo "<hr>";
  $sql="ALTER TABLE `survey_users` ADD `sub_id_$id` INT(10) NOT NULL DEFAULT '0' AFTER `sh`;";
  echo $sql;
  $dsn="mysql:host=localhost;charset=utf8;dbname=survey";
  $pdo=new PDO($dsn,'root','');
  $res=$pdo->exec($sql);

  
  $user= $User->find(['acc' => $_SESSION['login']]);
  echo "<hr>";
  dd($user);
  echo "<hr>";
  $user['sub_id_'.$id]=$option['id'];
  $User->save($user);
  dd($user);
  // $sql1="a";
  // $this->pdo->exec($sql);
  // to("../back.php?do=survey_result&id={$subject['id']}");
}else{
  // $suv=$_POST['sur_id'];
  // to("../index.php?do=survey_item&id={$suv}&error=choose");
}
?>