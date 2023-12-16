@extends('template.html')
@section('content')
    <div class="container-fluid">
      <section>
        <div class="row" style="margin-top: 10%">
          <div class="col">
            <img src="{{ asset('assetFoto/e9981c021dde69c5ce408e4f6934e1de-removebg-preview.png') }}" alt="" srcset="">
          </div>
          
          <div class="col-4" style="margin-right: 10%;margin-top: 5%">
          <form class="" action="" method="post">
            <h4 class="text-center">Tambahkan Profile Anda</h4>
                  
                  <div class="row-2 mt-3 d-flex justify-content-center">
                    <input class="form-text" type="file" name="foto" id="">
                    <div class="round">
                      {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Megawati_Sukarnoputri_official_portrait.jpg" height="100px" width=auto/> --}}
                    </div>
                  </div>
                  <div class="row-2 mt-5  d-flex justify-content-center">
                      <input class="btn btn-success me-3"  style="width: 50%; height: 130%;"  type="submit" value="Save">
                    </div>
                    
                  </form>
                  <a href="">Skip</a>
              </div>
        </div>
      
      </section>
        
        </div>
@endsection
