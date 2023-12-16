@extends('template.html')
@section('content')
    <div class="container-fluid">
      <section>
        <div class="row" style="margin-top: 10%">
          <div class="col">
            <img src="{{ asset('assetFoto/e9981c021dde69c5ce408e4f6934e1de-removebg-preview.png') }}" alt="" srcset="">
          </div>
          
          <div class="col-4" style="margin-right: 10%;margin-top: ">
          <form class="" action="{{ url('create') }}" method="post">
            @csrf
            <h4>Sign-up <i class="fa-solid fa-user-plus"></i></h4>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="number" name="nis" id="" placeholder="NIP/NIS">
                  </div>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="text" name="name" id="" placeholder="Username">
                  </div>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="email" name="email" id="" placeholder="Email">
                  </div>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="text" name="address" id="" placeholder="Alamat">
                  </div>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="text" name="angkatan" id="" placeholder="Angkatan">
                  </div>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="text" name="noHp" id="" placeholder="Telp">
                  </div>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="text" name="password" id="" placeholder="Password">
                  </div>
                  <div class="row-2 mt-3">
                      <input class="form-control" type="text" name="role" id="" value="alumni" placeholder="" readonly hidden>
                  </div>
                  <div class="row-2 mt-3">
                     <input class="btn btn-success"  style="width: 100%; height: 130%;"  type="submit" value="Register">
                  </div>
                  <div class="row-2 mt-3 text-center">
                    <p class="fw-bold">Or Sign-in With</p>
                    <i class="fa-brands fa-google fa-xl"></i>                
                    <i class="fa-brands fa-facebook fa-xl"></i>                
                    <i class="fa-brands fa-linkedin fa-xl"></i>     
                    </div>
                </form>
              </div>
        </div>
      
      </section>
        
        </div>
@endsection
