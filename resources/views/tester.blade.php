
@extends('layouts.site')

@section('content')



<nav data-depth="1" class="breadcrumb-bg">
    <div class="container no-index">
      <div class="breadcrumb">

      <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{route('home.page')}}">
              <span itemprop="name">Home</span>
            </a>
            <meta itemprop="position" content="1">
          </li>
            </ol>

      </div>
    </div>
  </nav>



      <div class="container no-index">
          <div class="row">
                <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


    <div id="main">


          <div class="page-header">
            <h1 class="page-title hidden-xs-up">
    Log in to your account
  </h1>
          </div>




        <section id="content" class="page-content">


        <section class="login-form">





    <form id="login-form" action="http://demo.bestprestashoptheme.com/savemart/en/login?back=my-account" method="post">

      <section>



    <input type="hidden" name="back" value="my-account">




                <div class="form-group row no-gutters">
      <label class="col-md-2 form-control-label mb-xs-5 required">
                Email :
            </label>
      <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

      </div>



      <div class="col-md-4 form-control-comment right">
            </div>
    </div>




                <div class="form-group row no-gutters">
      <label class="col-md-2 form-control-label mb-xs-5 required">
                Password :
            </label>
      <div class="col-md-6">

          <div class="input-group js-parent-focus">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                Show
              </button>
            </span>
          </div>


      </div>

      <div class="col-md-4 form-control-comment right">
            </div>
    </div>




        <div class="row no-gutters">
          <div class="col-md-10 offset-md-2">
            <div class="forgot-password">
              <a href="http://demo.bestprestashoptheme.com/savemart/en/password-recovery" rel="nofollow">
                Forgot your password?
              </a>
            </div>
          </div>
        </div>
      </section>


        <footer class="form-footer clearfix">
          <div class="row no-gutters">
            <div class="col-md-10 offset-md-2">
              <input type="hidden" name="submitLogin" value="1">

                <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                  Sign in
                </button>

            </div>
          </div>
        </footer>


    </form>


        </section>



        <div class="row no-gutters">
          <div class="col-md-10 offset-md-2">
            <div class="no-account">
              <a href="http://demo.bestprestashoptheme.com/savemart/en/login?create_account=1" data-link-action="display-register-form">
                No account? Create one here
              </a>
            </div>
          </div>
        </div>


        </section>



        <footer class="page-footer">

            <!-- Footer content -->

        </footer>


    </div>


                </div>
            </div>
        </div>






        @endsection


