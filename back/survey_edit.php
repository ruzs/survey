<?php
if (isset($_GET['id'])) {
  $subject = $Subject->find($_GET['id']);
  $options = $Option->all(['subject_id' => $_GET['id']]);
} else {
  to("../back.php?do=survey&error=沒有指定編輯的調查id");
}
?>
<div class="bg-secondary" style="height:1000px;">
  <h3 class="text-center text-light " style="margin-top:100px; padding-top:100px">
    編輯投票
    <button onclick='addOptionn()' class="btn btn-success btn-sm py-0" style="font-size:1.5rem">
      +
    </button>
  </h3>
  <form action="./api/survey_edit.php" method="post" class="col-10 mx-auto d-flex flex-wrap justify-content-center">
    <div class="input-group my-3 justify-content-center">
      <span class="input-group-text" id="basic-addon2">主題</span>
      <input type="text" class="form-control-lg col-10" style="border: solid 1px #ced4da;" placeholder="主題" aria-label="Username" aria-describedby="basic-addon2" name="subject" id="subject" value="<?= $subject['subject']; ?>">
      <input type="hidden" name="subject_id" value="<?= $subject['id'] ?>">
    </div>
    <!--選項區-->
    <div id="options" class="col-6">
    <?php
    foreach ($options as $idx => $option) {
    ?>
      <div class="option input-group my-3 justify-content-center">
        <span class="input-group-text" id="basic-addon2">項目<?= $idx + 1 ?></span>
        <input type="text" class="form-control-lg col-8" style="border: solid 1px #ced4da;" placeholder="選項" aria-label="Username" aria-describedby="basic-addon2" name="opt[]" value="<?= $option['opt'] ?>">
        <input type="hidden" name="opt_id[]" value="<?= $option['id']; ?>">
        <a href="./api/survey_option_del.php?id=<?= $option['id']; ?>" class="btn btn-danger btn-sm p-2">—</a>
      </div>
    <?php
    }
    ?>
    </div>
    <div class="text-center col-12 mt-3">
      <input class="btn btn-primary mx-1" type="submit" value="修改">
      <input class="btn btn-warning mx-1" type="reset" value="重置">
      <a href="?do=survey" class="btn btn-success mx-1">返回</a>
    </div>
  </form>
</div>
<script>
  function addOptionn() {
    let options = document.getElementById('options');
    let num = document.getElementsByClassName('option').length + 1
    let opt = document.createElement("div");
    let span = document.createElement("span");
    let input = document.createElement('input');
    let numNode = document.createTextNode("選項" + num);
    opt.setAttribute("class", "option input-group my-3 justify-content-center")
    span.setAttribute("class", "input-group-text");
    input.setAttribute("class", "form-control-lg col-8")
    input.setAttribute("name", "optn[]")
    input.setAttribute("style", "border: solid 1px #ced4da;")
    input.setAttribute("placeholder", "選項")
    input.setAttribute("type", "text")
    span.appendChild(numNode)
    opt.appendChild(span);
    opt.appendChild(input);
    options.appendChild(opt);
  }
</script>