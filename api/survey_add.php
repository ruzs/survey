<?php
include_once "base.php";
$subject = [
  'subject' => $_POST['subject'],
  'type' => 1,
  'vote' => 0,
  'active' => 0
];
$Subject->save($subject);
$subject_id = $Subject->max('id');
if (isset($_POST['opt'])) {
  foreach ($_POST['opt'] as $option) {
    if ($option != '') {
      $tmp = [
        'opt' => $option,
        'subject_id' => $subject_id,
        'vote' => 0
      ];
      $Option->save($tmp);
    }
  }
}
to("../back.php?do=survey");
?>