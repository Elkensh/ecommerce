@extends('layouts.site')

@section('content')

<nav data-depth="1" class="breadcrumb-bg">
    <div class="container no-index">
      <div class="breadcrumb">

      <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{route('site')}}">
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
            <h1 class="page-title">
    please enter the code we send to your mobile
  </h1>
          </div>




        <section id="content" class="page-content">


        <section class="login-form">





    <form id="login-form" action="{{route('site.verify')}}" method="post">
        @csrf
      <section>

    <input type="hidden" name="back" value="my-account">




                <div class="form-group row no-gutters">
      <label class="col-md-2 form-control-label mb-xs-5 required">
                Verification Code :
            </label>
      <div class="col-md-6">
            <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="" required autocomplete="code" autofocus>

            @error('code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

      </div>



      <div class="col-md-4 form-control-comment right">
            </div>
    </div>

      </section>


        <footer class="form-footer clearfix">
          <div class="row no-gutters">
            <div class="col-md-10 offset-md-2">
              <input type="hidden" name="submitLogin" value="1">

                <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                Confirm
                </button>

            </div>
          </div>
        </footer>


    </form>


        </section>




        </section>



        <footer class="page-footer">

            <!-- Footer content -->

        </footer>


    </div>


                </div>
            </div>
        </div>






        @endsection


