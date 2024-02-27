<!DOCTYPE html>

<html>
<head>


	<title>Admin Login Page </title>

	<style type="text/css">

			.authlogin-side-wrapper{
				width: 100%;
				height: 100%;
				background-image: url({{ asset('upload/login.png')  }});
			}
	</style>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">



	<link rel="stylesheet" href="{{ asset('../../../assets/vendors/core/core.css') }}">





	<link rel="stylesheet" href="{{ asset('../../../assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('../../../assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">



	<link rel="stylesheet" href="{{ asset('../../../assets/css/demo2/style.css') }}">


  <link rel="shortcut icon" href="{{ asset('../../../assets/images/favicon.png') }}" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="authlogin-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">

                    <h5 class="text-muted fw-normal mb-4">Log in to your account.</h5>


     <form class="forms-sample" method="post" action="{{ route('login') }}">
       @csrf

                      <div class="mb-3">
  <label for="login" class="form-label">Email/Name/Phone </label>
                        <input type="text" name="login" class="form-control" id="login" placeholder="Email">
                      </div>

                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="current-password" placeholder="Password">
                      </div>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="authCheck">
                        <label class="form-check-label" for="authCheck">
                          Remember me
                        </label>
                      </div>
                      <div>

                 <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                         	Login

                        </button>
                      </div>
                      <a href="" class="d-block mt-3 text-muted"> Sign up</a>
                    </form>


                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<script src="{{ asset('../../../assets/vendors/core/core.js') }}"></script>





	<script src="{{ asset('../../../assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('../../../assets/js/template.js') }}"></script>





</body>
</html>
