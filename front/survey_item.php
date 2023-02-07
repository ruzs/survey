<?php
if (isset($_GET['id'])) {
  $survey = $Subject->find($_GET['id']);
  $options = $Option->all(['subject_id' => $_GET['id']]);
  $user= $User->find(['acc' => $_SESSION['login']]);
  
} else {
  $error = "請回到問卷首頁選擇正確的題目來進行";
}
?>
<h3 class="text-center font-weight-bold" style="margin-top:100px; padding-top:50px"><?= $survey['subject']; ?></h3>
<form action="./api/survey_vote.php" method="post">
  <div class="col-8 mx-auto mt-4">
    <?php
    if (isset($error)) {
      echo "<span style='color:red'>" . $error . "</span>";
    } else {
      foreach ($options as $option) {
    ?>
        <!--列表項目-->
        <div class="input-group my-sm-2 justify-content-center">
          <div class="input-group-text">
            <input class="form-check-input mt-0" type="radio" name ="option" value="<?=$option['id'];?>" aria-label="Radio button for following text input" 
            <?php
            if(isset($user['sub_id_'.$_GET['id']])){
              if($user['sub_id_'.$_GET['id']]==$option['id']){echo"checked";}else{echo"b";};
            }
            ?>>
            <input type="hidden" name="all_opt<?=$option['id'];?>" value="<?=$option['id'];?>">
          </div>
          <span class="form-control-lg" style="border: solid 1px #ced4da;" aria-label="Text input with radio button"><?= $option['opt']; ?></span>
        </div>
    <?php
      }
    }
    ?>
  </div>
  <input type="hidden" name="sur_id" value="<?= $survey['id']; ?>">
  <?php
  if (isset($_GET['error'])) {
    echo "<div class='text-danger text-center'>";
    echo "請選擇一項";
    echo "</div>";
  }
  ?>
  <div class="text-center mt-4">
    <input type="submit" class="btn btn-primary mx-1" value="投票">
    <a href="index.php?do=survey" class="btn btn-warning mx-1">返回</a>
  </div>
</form>