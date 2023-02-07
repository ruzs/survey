<?php
include_once "base.php";
$subject=['id'=>$_POST['subject_id'],
          'subject'=>$_POST['subject']];
$Subject->save($subject);

foreach ($_POST['opt_id'] as $idx => $id) {
  $option=[
          'id'=>$id,
          'opt'=>$_POST['opt'][$idx]
          ];
  $Option->save($option);
}
if (isset($_POST['optn'])) {
  foreach ($_POST['optn'] as $option) {
    if ($option != '') {
      $tmp = [
        'opt' => $option,
        'subject_id' => $_POST['subject_id'],
        'vote' => 0
      ];
      $Option->save($tmp);
    }
  }
}
to("../back.php?do=survey");
