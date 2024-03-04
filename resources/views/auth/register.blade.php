
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')

</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html">TUHOC</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Đăng kí tài khoản mới</p>

      <form action="{{route('register')}}" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Tên của bạn">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
                    <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Tôi đồng ý với <a href="#">điều khoản sử dụng</a>
              </label>
            </div>
        </div>
        <div class="col-4" style="margin: auto">
            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
        </div>
      </form>

      <div class="alrealdy" style=" margin: auto">
      <a href="login" class="text-center">Tôi đã có tài khoản rồi</a>
      </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@include('admin.footer')

</body>
</html>
