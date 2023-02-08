<?php
include_once "base.php";
if(isset($_FILES['img']['tmp_name'])){
  echo "檔案上傳成功";
  echo $_FILES['img']['tmp_name'];
  //暫存的檔案位置 img= input的name
  echo "<br>";
  echo $_FILES['img']['name'];
  // $_FILES['img']['name']=$_POST['name'].;
  //檔案名稱
  echo "<br>";
  echo $_FILES['img']['type'];
  //檔案類型(副檔名)
  echo "<br>";
  echo $_FILES['img']['size'];
  //檔案大小
  echo "<br>";
  echo "檔案會搬到"."../upload/".$_FILES['img']['name'];
  move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
  $file=[
    'dname'=>$_POST['name'],
    'type'=>$_FILES['img']['type'],
    'name'=>$_FILES['img']['name'],
    'size'=>$_FILES['img']['size'],
  ];
  $Upl->save($file);

  to("../back.php?do=upload&status=success");
}else{
  echo "檔案上傳失敗";
  echo $_FILES['img']['error'];
  to("../back.php?do=upload&status=error");
}
?>