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