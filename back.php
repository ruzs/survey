<?php include "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "./layouts/style.php"; ?>
  <title>投票網站</title>
</head>

<body>
  <?php include "./layouts/header.php"; ?>
  <?php
  $do = $_GET['do'] ?? 'survey';
  $file = "./back/" . $do . ".php";
  if (file_exists($file)) {
    include $file;
  } else {
    include "./back/survey.php";
  }
  ?>
  <?php include "./layouts/scripts.php"; ?>
</body>

</html>