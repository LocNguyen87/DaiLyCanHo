<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Infinity - Bootstrap Admin Template</title>
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<div class="simple-page-form animated flipInY" id="reset-password-form">
	     <h4 class="form-title m-b-xl text-center">Quên mật khẩu ?</h4>
       @if (session('status'))
           <div class="alert alert-success">
               {{ session('status') }}
           </div>
       @endif
      	<form action="{{ route('password.email') }}" method="POST">
          @csrf
      		<div class="form-group">
      			<input id="reset-password-email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email đã đăng ký" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
      		</div>
      		<input type="submit" class="btn btn-primary" value="ĐẶT LẠI MẬT KHẨU">
      	</form>
    </div><!-- #reset-password-form -->

	</div><!-- .simple-page-wrap -->
</body>
</html>
