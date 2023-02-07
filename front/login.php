<h1 class="text-center" style="margin-top:200px;">使用者登入</h1>
<div class="input-group my-3 justify-content-center">
  <span class="input-group-text" id="basic-addon1">帳號</span>
  <input type="text" class="form-control-lg" style="border: solid 1px #ced4da;" placeholder="Account" aria-label="Username" aria-describedby="basic-addon1" name="acc" id="acc">
</div>

<div class="input-group my-3 justify-content-center">
  <span class="input-group-text" id="basic-addon2">密碼</span>
  <input type="password" class="form-control-lg" style="border: solid 1px #ced4da;" placeholder="Password" aria-label="Username" aria-describedby="basic-addon2" name="pw" id="pw">
</div>

<div class="input-group justify-content-center">
  <label class="mx-3" for=""><button type='submit' class='btn btn-primary btn-lg' value="註冊" onclick="login()">登入</button></label>
  <label class="mx-3" for=""><button type='reset' class='btn btn-primary  btn-lg' value="重置" onclick="reset()">重置</button></label>
</div>
<div class="input-group justify-content-center mt-3">
  <a href="?do=forgot" class="mx-3">忘記密碼</a>
  <a href="?do=reg_user" class="mx-3">尚未註冊</a>
</div>
<script>
  function login() {
    let user = {
      acc: $("#acc").val(),
      pw: $("#pw").val()
    }
    $.post("./api/chk_acc.php", user, (result) => {
      console.log(result);
      if (parseInt(result) === 1) {
        //有此帳號
        $.post("./api/chk_pw.php", user, (result) => {
          console.log(result);
          if (parseInt(result) === 1) {
            // 帳密正確
            location.href = 'index.php?do=main';
          } else {
            // 密碼錯誤
            alert("密碼錯誤");
            reset()
          }
        })
      } else {
        //無此帳號
        alert("查無此帳號");
        reset()
      }
    })
    console.log(user);
  }

  function reset() {
    $("#acc,#pw,#pw2,#email,#name,#token").val('')
  }
</script>