<?php
include_once "base.php";
if (isset($_POST['option'])) {
  $option_id = $_POST['option'];
  $option = $Option->find($option_id);
  $subject_id = $_POST['sur_id'];
  $subject = $Subject->find($subject_id);
  $user = $User->find(['acc' => $_SESSION['login']]);
  $log = $Log->find(['subject_id' => $subject['id']]);
  $option_del = $Option->find(['id' => $log['option_id']]);
  $Log->del(['user_id' => $user['id'], 'subject_id' => $subject_id]);

  $option_del['vote'] = $Log->count(['option_id' => $log['option_id']]);
  $Option->save($option_del);

  $log = [
    'user_id' => $user['id'],
    'subject_id' => $_POST['sur_id'],
    'option_id' => $_POST['option']
  ];
  dd($log);
  $Log->save($log);

  $subv = $Log->count(['subject_id' => $_POST['sur_id']]);
  $optv = $Log->count(['option_id' => $_POST['option']]);
  $subject['vote'] = $subv;
  $option['vote'] = $optv;
  $Option->save($option);
  $Subject->save($subject);

  to("../index.php?do=survey_result&id=$subject_id");
} else {
  $suv = $_POST['sur_id'];
  to("../index.php?do=survey_item&id={$suv}&error=choose");
}
?>