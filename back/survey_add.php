<div class="bg-secondary" style="height:1100px;">
  <h1 class="text-center text-light fw-bold" style="margin-top:100px; padding-top:100px">
    新增投票
    <button onclick='addOption()' class="btn btn-success btn-sm py-0" style="font-size:1.5rem">
      +
    </button>
  </h1>
  <form action="./api/survey_add.php" method="post" class="col-10 mx-auto d-flex flex-wrap justify-content-end">
    <div class="input-group my-3 justify-content-center">
      <span class="input-group-text" id="basic-addon2">主題</span>
      <input type="text" class="form-control-lg col-10" style="border: solid 1px #ced4da;" placeholder="主題" aria-label="Username" aria-describedby="basic-addon2" name="subject" id="subject">
    </div>
    <!--選項區-->
    <div id="options" class="option input-group my-3 justify-content-center">
      <span class="input-group-text" id="basic-addon2">項目1</span>
      <input type="text" class="form-control-lg col-8" style="border: solid 1px #ced4da;" placeholder="選項" aria-label="Username" aria-describedby="basic-addon2" name="opt]">
    </div>
    <div class="text-center col-12 mt-3">
      <input class="btn btn-primary mx-1" type="submit" value="確定新增">
      <input class="btn btn-warning mx-1" type="reset" value="重置">
      <a href="?do=survey" class="btn btn-success mx-1">返回</a>
    </div>
  </form>
</div>