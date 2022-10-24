
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pharmacy Management System </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
      <div class="login_wrapper">
        <div class="row">
          <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
              <div class="x_title">
                <center><img src="{{asset('storage/users/ww.png')}}" alt="..." width="200"></center>
                <div class="clearfix"></div>
              </div>
			  @if (session('login_error'))
<x-alerts.danger :error="session('login_error')" />
@endif
              <div class="x_content">
              <form action="{{route('login')}}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post">
	@csrf
                
                
              <div class="item form-group">
                <div class="col-md-12 col-sm-12  form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" placeholder="Username" name="email">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>
              </div>

              <div class="item form-group">
                <div class="col-md-12 col-sm-12  form-group has-feedback">
                  <input type="password" class="form-control has-feedback-left" placeholder="*************" name="password">
                  <span  class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                </div>

              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-12 col-sm-12">
                  <center>
                    <button  Type="submit" class="btn" style="background-color: rgb(22, 104, 122);color: rgb(192, 202, 211);">Login</button>
                  </center>
                </div>
              </div>

              </form>
              </div>
            </div>
          </div>
        </div>
        </div>
  </body>
</html>