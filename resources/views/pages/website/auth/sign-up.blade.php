@extends('layouts.website.default')

<style>
        .left-polygon-blue,.right-polygon-orange{
        display: none
    }
    .inner-wrapper{
        position: relative;
    }
    @media screen and (min-width:768px){
    .left-polygon-blue{
        position: absolute;
        top:55% !important;
        left: -2% !important;
        width:8%;
        /* z-index: -1; */
        display: block;
    }
    .right-polygon-orange{
        position: absolute;
        top:64%;
        right: 0px;
        width: 8%;
        /* z-index: -1; */
        display: block;
    }

    }
    .reg-box {
        background: linear-gradient(73.58deg, #04376D 1.64%, #2762A1 88.81%) !important;
        border-radius: 16px;
    }
    .reg-box p{
        color: white !important;
    }
    .reg-box p a{
        background: transparent !important;
    }
    .mbsc-ios.mbsc-textfield-box{
        border-radius:5px !important;
    }
    @media screen and (min-width:991px){
        .mbsc-ios.mbsc-select-icon-stacked{
        top: 20px !important;
    }
    }
 
    @media screen and (max-width:991px){
    .form-field .mbsc-ios.mbsc-textfield-box{
        height:55px;   
    }
    }
    @media screen and (max-width:576px){
   
    .form-field .mbsc-ios.mbsc-textfield-box{
        height:50px;
       
    }
    }
    .right-inner {
        position: relative;
    
    }
    .right-inner  img{
          position: absolute;
          right: 0px;
          padding: 12px 12px;
          width: 50px;
          z-index: 999;
          top: 5px;
        }
    .info-section-two {
        position: relative;
    }

    .right-polygon-two {
        position: absolute;
        top: 8px;
        right: 16px;
    }

    .lefts-polygon-two {
        display: none
    }

    @media screen and (min-width:768px) {
        .lefts-polygon-two {
            position: absolute;
            bottom: 0% !important;
            left: 0% !important;
            width: 13%;
            z-index: -1;
            display: block;
        }


    }

 

    @media screen and (max-width:576px) {
        .amount-section {
            width: 100% !important;
        }
        .right-inner  img{
          position: absolute;
          right: 0px;
          padding: 12px 12px;
          width: 40px;
          z-index: 999;
          top: 5px;
        }
    }
    .iti {
    position: relative;
    display: inline-block;
    width: 100%;
}
.iti__country-list{
 border-radius: 20px !important;
 border: none;
 overflow-y: hidden !important;
}

</style>
@section('content')
    @include('includes.website.navbar')
    <div class="container-fluid  px-0 outer-wrapper">
        <div class="inner-wrapper inner-wrapper-main">
            <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
            <div class="detail-box-outer pt-5  px-3">
                <div class="detail-box amount-box">
                    <div class="main-form-section-content pb-4">
                        <h1>Your <span>Details</span></h1>
                    </div>
                    <div class="network-list mb-1 d-flex align-items-center pb-3">
                        <div class="network-icon">
                            <img class="network-icon-image" src="{{ asset('assets/website-images/afg-flag.svg') }}"
                                alt="image">
                        </div>
                        <div class="network-text d-flex">
                            <h1>93 70 00 00 000</h1>
    
                        </div>
                        <div class="network-button pl-2 pl-lg-5">
                            <button><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}"
                                    alt="image"></button>
                        </div>
    
                    </div>
                    <div class="network-list mb-1 d-flex align-items-center pb-3">
                        <div class="network-icon">
                            <img class="network-icon-image" src="{{ asset('assets/website-images/awcc.svg') }}" alt="image">
                        </div>
                        <div class="network-text d-flex">
                            <h1>AWCC</h1>
    
                        </div>
                    </div>
                    <div class="network-list mb-1 d-flex align-items-center pb-3">
                        <div class="network-icon">
                            <img class="network-icon-image" src="{{ asset('assets/website-images/profile-icon.svg') }}"
                                alt="image">
                        </div>
                        <div class="network-text d-flex">
                            <h1>Amin Top-Up</h1>
    
                        </div>
                    </div>
                    <div class="network-list mb-1 d-flex align-items-center pb-3">
                        <div class="network-icon">
                            <img class="network-icon-image" src="{{ asset('assets/website-images/msg-icon.svg') }}"
                                alt="image">
                        </div>
                        <div class="network-text d-flex amin-gmail">
                            <h1>amintopup@gmail.com</h1>
    
                        </div>
                    </div>
    
    
                </div>
                 <div class="detail-box-bottom text-right">
                    <h1>250 <span>AFN</span></h1>
                 </div>
            </div>
       
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
            
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
    </div>
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
              <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />    
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 39 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
              </filter>
          </defs>
      </svg>
    <div class="info-section-two container-fluid px-0">
        <div class="amount-section container">
            <div class="row">
                <div class="col-md-12">
                    <div class="amount-heading col-12 col-md-6 px-0">
                        <h1>Join Amin Top-Up <span>to continue</span></h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="reg-box my-3 my-lg-5">
                        <form class="pt-5">
                            <div class="form-group form-field right-inner">
                                <img src="{{ asset('assets/website-images/message-icon.svg') }}" alt="icon">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email">
                            </div>
                            <div class="form-group form-field right-inner">
                                <img src="{{ asset('assets/website-images/eye.svg') }}"  onclick="viewPsd()"  alt="icon" style="cursor: pointer">
                              <input type="password" class="form-control" id="loginpassword" name="password" placeholder="enter your password">
                            </div>
                            <div class="form-group form-field">   
                            <input type="number" class="form-control" placeholder="" id="telephone">
                            </div>
                            <div class="form-group form-field">   
                                <label class="mx-0">
                                    Countries
                                    <input mbsc-input id="demo-country-picker" data-dropdown="true" data-input-style="box" data-label-style="stacked" placeholder="Please select..." />
                                </label>
                                </div>
                            <a href="" type="submit" class="btn my-3 my-lg-4">Sign IN</a>
                          </form>
                        <p class="py-3">Already have an account?<a href=""><span>Log In</span></a> 
                        </p>
                    </div>
                </div>
            </div>
            <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
            <img class="right-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
        </div>
    </div>
    @include('includes.website.footer-navbar')
@endsection

@section('insertjavascript')
<script src="{{ asset('assets/js/intlTelInput.min.js') }}"></script>
<script src="{{ asset('assets/js/intlTelInput-jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/mobiscroll.jquery.min.js') }}"></script>
<script>
    mobiscroll.setOptions({
    theme: 'ios',
    themeVariant: 'light'
});

$(function () {
    var inst = $('#demo-country-picker').mobiscroll().select({
        display: 'anchored',
        filter: true,
        itemHeight: 40,
        renderItem: function (item) {
            return '<div class="md-country-picker-item">' +
                '<img class="md-country-picker-flag" src="https://img.mobiscroll.com/demos/flags/' + item.data.value + '.png" />' +
                item.display + '</div>';
        }
    }).mobiscroll('getInst');

    $.getJSON('https://trial.mobiscroll.com/content/countries.json', function (resp) {
        var countries = [];
        for (var i = 0; i < resp.length; ++i) {
            var country = resp[i];
            countries.push({ text: country.text, value: country.value });
        }
        inst.setOptions({ data: countries });
    });
});
</script>
<script>
 var input = document.querySelector("#telephone");
window.intlTelInput(input,({
  utilsScript: "{{ asset('assets/js/utils.js') }}",

}));
</script>
<script>
    function viewPsd() {
      var inputField = document.getElementById("loginpassword");
      if (inputField.type === "password") {
        inputField.type = "text";
      } else {
        inputField.type = "password";
      }
    }
    </script>
@endsection
