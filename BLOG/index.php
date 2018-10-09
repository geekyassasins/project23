<!DOCTYPE html>
<html>
<head>
<?php
    $SERVER="http://onlineshopee.co.in/links/";
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Narmware Managment System | Login </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo $SERVER;?>bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $SERVER;?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $SERVER;?>plugins/iCheck/square/blue.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" >
  <center>

  <div class="text-center" style="width:90% !important; margin-top:5%; margin-bottm:0 !important;color:black;">
    <h2><b>Welcome to Login</b><br></h2>
  </div>
  </center>  
<div class="login-box" style="margin-top:0 !important">
  <!-- /.login-logo -->

  <div class="login-box-body">
    <p class="login-box-msg">Admin Login</p>
<style>
.square{
    background-color:red;
    color:white;font-weight:bold;
}
.squareright{
    background-color:green;
    color:white;font-weight:bold;

}
</style>
    <form action="#" method="post">
        <div class="alert text-center square hide" id="msguser">Username should not blank</div>
        <div class="alert text-center square hide" id="msgpass">Password should not blank</div>
        <div class="alert text-center square hide" id="msgboth">username & Password should not blank</div>
        <div class="alert text-center square hide" id="msgerror">Info! Invalid Credentials</div>
        <div class="alert text-center squareright hide" id="msgcorrect">Info! Valid Credentials </div>

      <div class="form-group has-feedback">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <a href="registration.php"> Sign up</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="submit" onclick="return checklogin()" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo $SERVER;?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $SERVER;?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo $SERVER;?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

function checklogin(){
    flag=1;
      if (!$('#msguser').hasClass("hide")) {
          $('#msguser').addClass("hide");
      };
      if (!$('#msgpass').hasClass("hide")) {
          $('#msgpass').addClass("hide");
      };
      if (!$('#msgerror').hasClass("hide")) {
          $('#msgerror').addClass("hide");
      };
      if (!$('#msgcorrect').hasClass("hide")) {
          $('#msgcorrect').addClass("hide");
      };
      if (!$('#msgboth').hasClass("hide")) {
          $('#msgboth').addClass("hide");
      };

    
    document.getElementById('submit').disabled = true; 
    var username=$.trim(document.getElementById('username').value);
    var password=$.trim(document.getElementById('password').value);

    if(username=="" && password=="")
    {
        flag=0;
        $('#msgboth').removeClass("hide");
    }

    if(username=="" && password!="")
    {
        flag=0;
        $('#msguser').removeClass("hide");
    }
    if(password=="" && username!="")
    {
        flag=0;
        $('#msgpass').removeClass("hide");
    }

    if(flag==1)
    {
        $.post('Validation/login-check.php',{username:username,password:password},
        function(res) {
            //alert(res);
            var string=$.trim(res);

            if(string=="TRUE")
            {
                $('#msgcorrect').removeClass("hide");
                window.location="pages/";
            }
            else
            {
                //alert();
                $('#msgerror').removeClass("hide");
            }    

        }
        );
    }

    document.getElementById('submit').disabled = false;
    return false;

}
</script>
</body>
</html>

