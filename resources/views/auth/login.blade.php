<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Đại Lý Căn Hộ - Admin Area Login</title>
	<link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

  <link href="{{ asset('assets/libs/bower/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/bower/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/backend/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/backend/css/app.css') }}" rel="stylesheet">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Asap:400,500,600,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<body class="simple-page">
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="index.html">
				<span><i class="fa fa-gg"></i></span>
				<span>Đại Lý Căn Hộ</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Đăng nhập tài khoản quản lý</h4>
	<form action="{{ route('login') }}" method="POST">
    @csrf
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<input id="email" type="email" name="email" class="form-control" placeholder="Địa chỉ email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<input id="sign-in-password" name="password" type="password" class="form-control" placeholder="Mật khẩu">
		</div>

		<div class="form-group m-b-xl">
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="keep_me_logged_in" name="remember" {{ old('remember') ? 'checked' : '' }}/>
				<label for="keep_me_logged_in">Giữ phiên đăng nhập</label>
			</div>
		</div>
		<input type="submit" class="btn btn-primary" value="ĐĂNG NHẬP">
	</form>
</div><!-- #login-form -->

<div class="simple-page-footer">
	<p><a href="{{ route('password.request') }}">QUÊN MẬT KHẨU</a></p>
</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>

</html>
