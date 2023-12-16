@extends('template.html')
@section('content')
    <div class="container-fluid">
      <section>
        <div class="row" style="margin-top: 10%">
          <div class="col">
            <img src="{{ asset('assetFoto/e9981c021dde69c5ce408e4f6934e1de-removebg-preview.png') }}" alt="" srcset="">
          </div>
          
          <div class="col-4" style="margin-right: 10%;margin-top: 8%">
          <form class="" action="/auth" method="post">
            @csrf
            <h4>Sign-In <i class="fa-solid fa-right-to-bracket"></i></h4>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="email" name="email" id="" placeholder="Email">
                  </div>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="password" name="password" id="" placeholder="Password">
                  </div>
                  <div class="row-2 mt-3">
                      <input class="btn btn-success"  style="width: 100%; height: 130%;"  type="submit" value="Login">
                  </div>
                  <div class="row-2 mt-3 text-center">
                    <p class="fw-bold">Or Sign-in With</p>
                    <i class="fa-brands fa-google fa-xl"></i>                
                    <i class="fa-brands fa-facebook fa-xl"></i>                
                    <i class="fa-brands fa-linkedin fa-xl"></i>     
                  <p class="mt-2" style="font-size: 0.8rem">don't have an account yet ? <i> <a href="{{ url('register') }}">Register.</a></i></p>
                    </div>
                </form>
              </div>
        </div>
      
      </section>
        
        </div>
@endsection
