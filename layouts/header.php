<?php
$bgc = (isset($_SESSION['login'])) ? "bg-dark" : "bg-white";
?>
<header class="container-fluid shadow <?= $bgc ?> position-fixed top-0" style="z-index:10;">
  <nav class="d-flex justify-content-between py-3">
    <div class='img-block overflow-hidden'>
      <a class='mx-sm-2' href='index.php'>
        <img src='https://i.imgur.com/x5PnH9h.gif' class='my-sm-2' alt='投票主題' height="55px">
      </a>
    </div>
    <?php
    if (isset($_SESSION['login'])) {
      $user = $User->find(['acc' => $_SESSION['login']]);
      if ($user["level"] >= 2) {
    ?>
    <div>
      <a class='m-sm-2' href='back.php'><button type='button' class='btn btn-primary my-3 mx-auto'>投票管理</button></a>
      <a class='m-sm-2' href='back.php?do=survey_add'><button type='button' class='btn btn-success my-3 mx-auto'>新增投票</button></a>
      <a class='m-sm-2' href='back.php?do=upload'><button type='button' class='btn btn-warning my-3 mx-auto'>檔案上傳</button></a>
    </div>
    <?php
      }
    }
    ?>
    <div>
      <?php
      if (isset($_SESSION['login'])) {
        echo "<a class='m-sm-2' href='index.php'><button type='button' class='btn btn-primary my-3 mx-auto'>回網站首頁</button></a>";
        echo "<a class='m-sm-2' href='./api/logout.php'><button type='button' class='btn btn-danger my-3 mx-auto'>使用者登出</button></a>";
      } else {
        echo "<a class='m-sm-2' href='?do=reg_user'><button type='button' class='btn btn-primary my-3 mx-auto'>使用者註冊</button></a>";
        echo "<a class='m-sm-2' href='?do=login'><button type='button' class='btn btn-success my-3 mx-auto'>使用者登入</button></a>";
      }
      ?>
    </div>
  </nav>
</header>