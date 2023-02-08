<div class="bg-secondary" style="height:1100px;">
  <h1 class="text-center fw-bold text-white" style="margin-top:100px;padding-top:100px;">上傳管理中心</h1>
  <form class="col-7 mx-auto d-flex flex-wrap justify-content-center" action="./api/upload.php" method="post" enctype="multipart/form-data">
    <div class="input-group">
    <span class="input-group-text" id="basic-addon2">檔名</span>
      <input type="text" class="form-control col-5" style="border: solid 1px #ced4da;" placeholder="檔名" aria-label="Username" aria-describedby="basic-addon2" name="name" id="name">
      <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="img">
      <input class="btn btn-warning text-success " type="submit" id="inputGroupFileAddon04"value="上傳">
    </div> 
  </form>
  <?php
  if(isset($_GET['status'])){
    switch($_GET['status']){
      case"success":
        echo "<p class='mx-auto d-flex flex-wrap justify-content-center col-2 text-center rounded-3 btn btn-success my-5 fw-bold fs-4'>檔案傳輸成功</p>";
      break;
      case"error":
        echo "<p class='mx-auto d-flex flex-wrap justify-content-center col-2 text-center rounded-3 btn btn-danger my-5 fw-bold fs-4'>檔案傳輸失敗</p>";
      break;
      default:
    }
  }
  ?>
</div>