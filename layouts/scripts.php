<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            $.post("./api/reg_user.php",user,(result)=>{
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

  function forgot() {
    $("#email").val();
    $.get('./api/forgot.php',{email:$("#email").val()},(result)=>{
      $("#result").html(result);
    })
  }
  function addOption() {
    let options = document.getElementById('options');
    let num = document.getElementsByClassName('option').length + 1
    let opt = document.createElement("div");
    let span = document.createElement("span");
    let input = document.createElement('input');
    let numNode = document.createTextNode("選項" + num);
    opt.setAttribute("class", "option input-group my-3 justify-content-center")
    span.setAttribute("class", "input-group-text");
    input.setAttribute("class", "form-control-lg col-8")
    input.setAttribute("name", "opt[]")
    input.setAttribute("style", "border: solid 1px #ced4da;")
    input.setAttribute("placeholder", "選項")
    input.setAttribute("type", "text")
    span.appendChild(numNode)
    opt.appendChild(span);
    opt.appendChild(input);
    options.appendChild(opt);
  }

  function addOptionn() {
    let options = document.getElementById('options<?=$x?>');
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