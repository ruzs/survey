<h1 class="text-center" style="margin-top:200px;">使用者註冊</h1>
<div class="input-group my-3 justify-content-center">
  <span class="input-group-text" id="basic-addon1">帳號*</span>
  <input type="text" class="form-control-lg" style="border: solid 1px #ced4da;" placeholder="Account" aria-label="Username" aria-describedby="basic-addon1" name="acc" id="acc">
</div>

<div class="input-group my-3 justify-content-center">
  <span class="input-group-text" id="basic-addon2">密碼*</span>
  <input type="password" class="form-control-lg" style="border: solid 1px #ced4da;" placeholder="Password" aria-label="Username" aria-describedby="basic-addon2" name="pw" id="pw">
</div>

<div class="input-group my-3 justify-content-center">
  <span class="input-group-text" id="basic-addon3">確認密碼*</span>
  <input type="password" class="form-control-lg" style="border: solid 1px #ced4da;" placeholder="Password" aria-label="Username" aria-describedby="basic-addon3" name="pw2" id="pw2">
</div>

<div class="input-group my-3 justify-content-center">
  <span class="input-group-text" id="basic-addon5">名稱*</span>
  <input type="text" class="form-control-lg" style="border: solid 1px #ced4da;" placeholder="Name" aria-label="Username" aria-describedby="basic-addon5" name="name" id="name">
</div>

<div class="input-group my-3 justify-content-center">
  <span class="input-group-text" id="basic-addon4">信箱*</span>
  <input type="email" class="form-control-lg" style="border: solid 1px #ced4da;" placeholder="E-Mail" aria-label="Username" aria-describedby="basic-addon4" name="email" id="email">
</div>

<div class="input-group my-3 justify-content-center">
  <span class="input-group-text" id="basic-addon6">序號</span>
  <input type="text" class="form-control-lg" style="border: solid 1px #ced4da;" placeholder="Token(可不填)" aria-label="Username" aria-describedby="basic-addon6" name="token" id="token">
</div>

<div class="input-group justify-content-center">
  <label class="mx-3" for=""><button type='submit' class='btn btn-primary btn-lg' value="註冊" onclick="reg()">註冊</button></label>
  <label class="mx-3" for=""><button type='reset' class='btn btn-primary  btn-lg' value="重置" onclick="reset()">重置</button></label>
</div>
<script>
  function reg() {
    let user = {
      acc: $("#acc").val(),
      pw: $("#pw").val(),
      pw2: $("#pw2").val(),
      name: $("#name").val(),
      email: $("#email").val(),
    }
    if (user.acc === '' || user.pw === '' || user.pw2 === '' || user.email === '') {
      //有空白
      alert('不可空白')
    } else {
      //沒空白
      if (user.pw == user.pw2) {
        //相同
        $.post("./api/chk_acc.php", user, (result) => {
          if (parseInt(result) === 1) {
            //重覆
            alert("帳號重覆");
          } else {
            //不重覆
            $.post("./api/reg_user.php", user, (result) => {
              alert("註冊完成，歡迎加入");
              reset();
              location.href = 'index.php?do=main';
            })
          }
        })
      } else {
        //不相同
        alert("密碼不同")
      }
    }
  }

  function reset() {
    $("#acc,#pw,#pw2,#email,#name,#token").val('')
  }
</script>