<div class="row justify-content-sm-around  text-center" style="margin-top:200px;">

  <?php
  include_once "./api/base.php";
  $surveys = $Subject->all(['active' => 1]);
  foreach ($surveys as $survey) {
  ?>
  <div class="col-sm-3" style=" height: 25rem;">
    <div class="card mx-auto mb-5 h-75" style="width: 18rem;">
      <div class="content  p-3">
        <h3 style="color: #fff;"><?= $survey['subject']; ?></h3>
        <div>
          <?php
          if (isset($_SESSION['login'])) {
            echo "<a class='m-sm-2' href='?do=survey'><button type='button' class='btn btn-primary my-2 mx-auto' style='display:block;'>投票</button></a>";
          }
          ?>
          <a class='m-sm-2' href='?do=login'><button type='button' class='btn btn-primary my-2 mx-auto btn-lg' style="display:block;">結果</button></a>
        </div>
        <p style="color: #fff;">參與數 <?=$survey["vote"]?></p>
      </div>
    </div>
  </div>
  <?php
  }
  ?>

</div>
