<div class="text-center fw-bold " style="padding-top:150px; font-size:130px;">投票</div>
<div class="justify-content-sm-around align-items-space-between" style="height:1000px;">
  <div class="row col-sm-12 justify-content-sm-around align-items-space-between text-center" style="padding-top:50px">
    <?php
    include_once "./api/base.php";
    $surveys = $Subject->all(['active' => 1]);
    foreach ($surveys as $survey) {
    ?>
      <div class="col-sm-3" style=" height: 25rem;">
        <div class="card mx-auto mb-5 h-75" style="width: 18rem;">
          <div class="content p-3">
            <h3 style="color: #fff;"><?= $survey['subject']; ?></h3>
            <div class="mt-5">
              <?php
              if (isset($_SESSION['login'])) {
                echo "<a class='m-2 d-inline-block' href='index.php?do=survey_item&id=".$survey['id']."'><button type='button' class='btn btn-primary' style='display:block;'>投票</button></a>";
              }
              ?>
              <a class='m-3 d-inline-block' href='?do=survey_result&id=<?=$survey['id']?>'><button type='button' class='btn btn-warning btn-lg text-white' style="display:block;">結果</button></a>
            </div>
            <p  class="mt-5 text-white">參與數 <?= $survey["vote"] ?></p>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>