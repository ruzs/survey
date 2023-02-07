<?php
$subject = $Subject->find($_GET['id']);
$options = $Option->all(['subject_id' => $_GET['id']]);
?>
<h1 class="text-center fw-bold" style="margin-top:100px; padding-top:50px">投票結果</h1>
<h3 class="text-primary text-center"><?= $subject['subject']; ?></h3>
<ul class="list-group mx-auto col-5">
  <?php
  foreach ($options as $option) {
    $division = ($subject['vote'] == 0) ? 1 : $subject['vote'];
    $width = round(($option['vote'] / $division) * 100, 2);
  ?>
    <li class="d-flex list-group-item list-group-item-light list-group-item-action  justify-content-sm-center">
      <div class="mx-5"><?= $option['opt']; ?></div>
      <div class="col-6 d-flex align-items-center">
        <div class="bg-primary rounded" style="width:<?= $width; ?>%">&nbsp;</div>
        <div class="col-1"><?= $option['vote']; ?>票</div>
      </div>
    </li>
  <?php
  }
  ?>
</ul>
<div class="text-center mt-4">
  <a href="index.php?do=survey" class="btn btn-warning mx-1">返回</a>
</div>