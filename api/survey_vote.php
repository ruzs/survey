<?php
include_once "base.php";
if (isset($_POST['option'])) {
  $option_id=$_POST['option'];
  $option=$Option->find($option_id);
  $subject=$Subject->find($option['subject_id']);
  $id=$subject['id'];
  $user= $User->find(['acc' => $_SESSION['login']]);
  $users=$User->all();
  if(!isset($user['sub_id_'.$id])){
    $sql="ALTER TABLE `survey_users` ADD `sub_id_$id` INT(10) NOT NULL DEFAULT '0' AFTER `sh`;";
    $dsn="mysql:host=localhost;charset=utf8;dbname=survey";
    $pdo=new PDO($dsn,'root','');
    $res=$pdo->exec($sql);
    $user['sub_id_'.$id]=$option['id'];
    $User->save($user);
  }else{
    $user['sub_id_'.$id]=$option['id'];
    $User->save($user);
  }
  dd($subject);
  dd($option);
  $vot=0;
  $optv=0;
  foreach ($users as $key =>$userss) {
    if($userss['sub_id_'.$id]>0){
      $vot++;
      if($userss['sub_id_'.$id]==$option_id){
        $optv++;
      }
    }
  }
  $option['vote']=$optv;
  $subject['vote']=$vot;
  $Subject->save($subject);
  $Option->save($option);

  
  // to("../index.php?do=survey_result&id={$subject['id']}");
  to("../index.php");
}else{
  $suv=$_POST['sur_id'];
  to("../index.php?do=survey_item&id={$suv}&error=choose");
}
