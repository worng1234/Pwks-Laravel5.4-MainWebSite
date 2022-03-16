<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="../assets/img/icon2.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Prompt:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
        urls: ['../assets/css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/atlantis.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body class="login">
  <div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
      <div class="text-center">
        <img src="../assets/img/logo3.png" style="width: 40%; height: 40%; margin-bottom: 10px;" class="rounded">
      </div>
      <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}
      <div class="text-center"><b style="font-size: 23px; ">ยินดีต้อนรับเข้าสู่ระบบ</b><br><small> สำหรับผู้ดูแลระบบ</small></div>
      <div class="login-form">
        <div class="form-group">
          <label for="username" class="placeholder"><b>ชื่อผู้ใช้</b></label>
          <input id="username" name="username" type="text" class="form-control" placeholder="กรอกชื่อผู้ใช้" value="{{ old('username') }}" pattern="^[a-zA-z||0-9\s]+$" title="กรุณากรอกให้ถูกต้อง" required autofocus>
        </div>
        <div class="form-group">
          <label for="password" class="placeholder"><b>รหัสผ่าน</b></label>
          <div class="position-relative">
            <input id="password" name="password" type="password" class="form-control" placeholder="กรอกรหัสผ่าน" pattern="^[a-zA-z||0-9\s]+$" title="กรุณากรอกให้ถูกต้อง" required>
            <div class="show-password">
              <i class="icon-eye"></i>
            </div>
          </div>
        </div>
        <div class="row form-sub m-0">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="rememberme">
            <label class="custom-control-label" for="rememberme">Remember Me</label>
          </div>
        </div>
        <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                    Forgot Your Password?
                                </a>
        <div class="form-action mb-3">
          <button type="submit"class="btn btn-secondary btn-rounded col-md-5 mt-3 mt-sm-0 fw-bold" style="margin-right:auto;">เข้าสู่ระบบ</button>
          <a href="{{ url('/')}}" class="btn btn-danger btn-rounded col-md-5 mt-3 mt-sm-0 fw-bold" style="margin-left:auto;"><strong>ย้อนกลับ</strong></a>
        </div>
      </div>
    </div>
  </form>
  </div>
  <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/atlantis.min.js"></script>
</body>

</html>