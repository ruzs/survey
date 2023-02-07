<?php
include_once "base.php";
if (isset($_POST['option'])) {
  $option_id=$_POST['option'];
  $optionAll=$Option->all(['subject_id'=>$_POST['sur_id']]);
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

  }
  $user['sub_id_'.$id]=$option['id'];
  $User->save($user);
  $vot=0;
  $optv=0;
  $aa=0;
  foreach ($users as $key =>$userss) {
    if($userss['sub_id_'.$id]!=$option_id){
      $optv++;
    }
    dd($userss);
    if($userss['sub_id_'.$id]>0){
      $vot++;
      if($userss['sub_id_'.$id]==$option_id){
        $optv++;
      }
      $aabb[$key]=$userss['sub_id_'.$id];
      // if($userss['sub_id_'.$id]){
      //   $soptv++;
      // }
      
        

      }
    }
    foreach($optionAll as $key =>$optionAl){
      // if()
      $optionAl['optac']=$key+1;
      // dd($optionAl);
      }
    // dd($optionAll);
    // $Option->save($option);
    dd($option);
    dd($_POST);
    // dd($aabb);
  $subject['vote']=$vot;
  $option['vote']=$optv;
  $Subject->save($subject);
  $Option->save($option);

  
  // to("../index.php?do=survey_result&id=$id");
}else{
  $suv=$_POST['sur_id'];
  to("../index.php?do=survey_item&id={$suv}&error=choose");
}
