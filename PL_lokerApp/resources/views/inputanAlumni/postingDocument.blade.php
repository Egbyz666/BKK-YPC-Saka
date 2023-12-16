@extends('template.html')
@section('content')
    @include('template.header')

    <style>
        .container-fluid {
            background-color: #C5CAE9
        }

        .heading {
            font-size: 40px;
            margin-top: 35px;
            margin-bottom: 30px;
            padding-left: 20px
        }

        .card {
            border-radius: 10px !important;
            margin-top: 60px;
            margin-bottom: 60px
        }

        .form-card {
            margin-left: 20px;
            margin-right: 20px
        }

        .form-card input,
        .form-card textarea {
            padding: 10px 15px 5px 15px;
            border: none;
            border: 1px solid lightgrey;
            border-radius: 6px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: arial;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        .form-card input:focus,
        .form-card textarea:focus {
            -moz-box-shadow: 0px 0px 0px 1.5px skyblue !important;
            -webkit-box-shadow: 0px 0px 0px 1.5px skyblue !important;
            box-shadow: 0px 0px 0px 1.5px skyblue !important;
            font-weight: bold;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        .input-group {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .input-group input {
            position: relative;
            height: 80px;
            margin-left: 1px;
            margin-right: 1px;
            border-radius: 6px;
            padding-top: 30px;
            padding-left: 25px
        }

        .input-group label {
            position: absolute;
            height: 24px;
            background: none;
            border-radius: 6px;
            line-height: 48px;
            font-size: 15px;
            color: gray;
            width: 100%;
            font-weight: 100;
            padding-left: 25px
        }

        input:focus+label {
            color: #304FFE
        }

        .btn-pay {
            background-color: #304FFE;
            height: 60px;
            color: #ffffff !important;
            font-weight: bold
        }

        .btn-pay:hover {
            background-color: #3F51B5
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }

        img {
            border-radius: 5px
        }

        .radio-group {
            position: relative;
            margin-bottom: 25px
        }

        .radio {
            display: inline-block;
            border-radius: 6px;
            box-sizing: border-box;
            border: 2px solid lightgrey;
            cursor: pointer;
            margin: 12px 25px 12px 0px
        }

        .radio:hover {
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2)
        }

        .radio.selected {
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 155, 0.4);
            border: 2px solid blue
        }

        .label-radio {
            font-weight: bold;
            color: #000000
        }
    </style>

    <div class="container-fluid" style="padding-top: 5%;background-color: #304FFE">
        <div class="row justify-content-center">
            <div class=" col-lg-6 col-md-8">
                <div class="card p-3">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h2 class="heading text-center">Upload Document</h2>
                        </div>
                    </div>
                    <form class="form-card" action="{{ route('postDocument') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="input-group" > <input type="text" name="nis" placeholder="" value="{{ Auth::User()-> nis }}" hidden>
                                    <label>Nis</label> </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group" > <input type="text" name="name" placeholder="" value="{{ Auth::User()-> name }}">
                                    <label>Nis</label> </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group"> <input type="text" name="namaDokumen">
                                            <label>Nama Document</label> </div>
                                        </div>
                                    <div class="col-6">
                                        <div class="input-group"> <input type="file" name="file">
                                            <label>Document</label> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12"> <input type="submit" value="Upload" class="btn btn-pay placeicon">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
      $(document).ready(function(){

//For Card Number formatted input
var cardNum = document.getElementById('cr_no');
cardNum.onkeyup = function (e) {
    if (this.value == this.lastValue) return;
    var caretPosition = this.selectionStart;
    var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
    var parts = [];
    
    for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
        parts.push(sanitizedValue.substring(i, i + 4));
    }
    
    for (var i = caretPosition - 1; i >= 0; i--) {
        var c = this.value[i];
        if (c < '0' || c > '9') {
            caretPosition--;
        }
    }
    caretPosition += Math.floor(caretPosition / 4);
    
    this.value = this.lastValue = parts.join('-');
    this.selectionStart = this.selectionEnd = caretPosition;
}

//For Date formatted input
var expDate = document.getElementById('exp');
expDate.onkeyup = function (e) {
    if (this.value == this.lastValue) return;
    var caretPosition = this.selectionStart;
    var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
    var parts = [];
    
    for (var i = 0, len = sanitizedValue.length; i < len; i += 2) {
        parts.push(sanitizedValue.substring(i, i + 2));
    }
    
    for (var i = caretPosition - 1; i >= 0; i--) {
        var c = this.value[i];
        if (c < '0' || c > '9') {
            caretPosition--;
        }
    }
    caretPosition += Math.floor(caretPosition / 2);
    
    this.value = this.lastValue = parts.join('/');
    this.selectionStart = this.selectionEnd = caretPosition;
}
	
	// Radio button
	$('.radio-group .radio').click(function(){
	    $(this).parent().parent().find('.radio').removeClass('selected');
	    $(this).addClass('selected');
	});
})
    </script>
    @include('template.footer')
@endsection
