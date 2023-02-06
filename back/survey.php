<div class="bg-secondary justify-content-sm-around align-items-space-between" style="height:1000px;">
  <div class="row col-sm-12 justify-content-sm-around align-items-space-between text-center" style="margin-top:100px; padding-top:100px">
  <?php
    include_once "./api/base.php";
    $surveys = $Subject->all();
    foreach ($surveys as $survey) {
    ?>
    <div class="col-sm-3" style=" height: 25rem;">
      <div class="card mx-auto mb-5 h-75" style="width: 18rem;">
        <div class="content p-3">
          <h3 style="color: #fff;"><?= $survey['subject']; ?></h3>
          <div>
            <?php
              $activeBg=($survey['active']==1)?"btn-primary":"btn-secondary";
              $activeText=($survey['active']==1)?"開啟":"關閉";
            ?>
            <a class='m-sm-2' href='./api/survey_active.php?id=<?=$survey['id'];?>'><button type='button' class='btn <?=$activeBg?> my-2 mx-auto btn-lg' style='display:block;'><?=$activeText?></button></a>
            <div class="d-flex justify-content-sm-around m-sm-2">
              <a  href='?do=survey_edit&id=<?=$survey['id'];?>'><button type='button' class='btn btn-success' style='display:block;'>編輯</button></a>
              <a  href='./api/survey_del.php?id=<?=$survey['id'];?>'><button type='button' class='btn btn-info' style="display:block;">刪除</button></a>
            </div>
          </div>
          <p class="m-sm-4 text-white">參與數 <?=$survey["vote"]?></p>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>

</div>