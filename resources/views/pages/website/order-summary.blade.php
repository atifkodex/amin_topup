@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
  .info-section-two {
    position: relative;
  }


  .lefts-polygon-two,
  .left-polygon-blue,
  .right-polygon-orange,
  .rights-polygon-two {
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

    .rights-polygon-two {
      position: absolute;
      bottom: 0% !important;
      right: 16px;
      width: 11% !important;
      z-index: 1;
      display: block;
    }

    .left-polygon-blue {
      position: absolute;
      top: 8% !important;
      left: 0% !important;
      width: 8%;
      /* z-index: -1; */
      display: block;
    }

    .right-polygon-orange {
      position: absolute;
      top: 8px;
      right: 16px;
      width: 8%;
      /* z-index: -1; */
      display: block;
    }

  }
</style>
@section('content')
@include('includes.website.navbar')
<div class="container-fluid outer-wrapper">
  <div class="inner-wrapper">
    <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
    <div class="inner-wrapper-heading container">
      <h1>Order</h1>
      <h1>Summary</h1>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </div>

</div>
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
      <feComposite in="SourceGraphic" in2="goo" operator="atop" />
    </filter>
  </defs>
</svg>
<div class="info-section-two container-fluid px-0 my-3 my-md-2">
  <div class="amount-section container">
    <div class="row">
      <div class="col-12">
        <div class="reg-box my-3 my-lg-5">
          <div class="order-summary-content ">
            <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
              <div class="order-summary-list-left">
                <p>Number</p>
              </div>
              <div class="order-summary-list-right">
                <p>{{$number}}</p>
              </div>
            </div>
            <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
              <div class="order-summary-list-left">
                <p>Country</p>
              </div>
              <div class="order-summary-list-right">
                <p>Afghanistan</p>
              </div>
            </div>
            <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
              <div class="order-summary-list-left">
                <p>Network</p>
              </div>
              <div class="order-summary-list-right">
                <p class="network_d">{{$data->operator_name}}</p>
              </div>
            </div>
            <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
              <div class="order-summary-list-left">
                <p>Topup Amount</p>
              </div>
              <div class="order-summary-list-right ">
                <p class="topupAfn_d">200 AFN</p>
              </div>
            </div>
            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3">
              <div class="order-summary-list-left">
                <p class="pl-2">Recevier Gets (After Tax)</p>
              </div>
              <div class="order-summary-list-right">
                <p class="receiverGetAfn_d">200 ANF</p>
              </div>
            </div>
            <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
              <div class="order-summary-list-left">
                <p>Topup Amount:</p>
              </div>
              <div class="order-summary-list-right">
                <p class="topupToUsd_d">7.49 USD</p>
              </div>
            </div>
            <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
              <div class="order-summary-list-left">
                <p>Processing fee:</p>
              </div>
              <div class="order-summary-list-right">
                <p class="processingFee_d">3.52 USD</p>
              </div>
            </div>
            <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
              <div class="order-summary-list-left">
                <p>Total:</p>
              </div>
              <div class="order-summary-list-right">
                <p class="totalUsd_d">#12450</p>
              </div>
            </div>

            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3">
              <div class="order-summary-list-left">
                <p class="pl-2">Total Payable:</p>
              </div>
              <div class="order-summary-list-right">
                <p class="totalUsd_d usdTotal_d">11.01 USD</p>
              </div>
            </div>
          </div>
          <input type="hidden" class="productCode_d">
          <p class="py-3 summary-text">Amin Topup uses third party payment gateway for facilitating payments. We are not saving your payment information in our system </p>
          <a href="javascript:void(0)" class="btn my-3 my-lg-4 summary-btn pay" id="payByCardBtn_d">Pay by Credit Card</a>

        </div>
      </div>
    </div>
    <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
    <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
    <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
    <img class="rights-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
  </div>
</div>
@include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
<script>
  var denominationAmount = localStorage.getItem('denomination');
  var data = @json($data);
  var token = @json($token);
  $(data.details).each(function(index, element) {
    if (element.denomination == denominationAmount) {
      roundAmount = parseFloat(element.totalAmount.toFixed(2));
      $('.topupAfn_d').text(element.denomination + " AFN");
      $('.receiverGetAfn_d').text(element.receiver_get_AFN + " AFN");
      $('.topupToUsd_d').text("$" + element.topup_usd);
      $('.processingFee_d').text("$" + element.processing_fee);
      $('.totalUsd_d').text("$" + roundAmount);
      $('.productCode_d').val(element.product_code_topup);
    }
  });

  // Transaction API 
  $("#payByCardBtn_d").click(function() {
    let receiverName = localStorage.getItem('receiverName');
    let receiverEmail = localStorage.getItem('receiverEmail');
    let denomination = localStorage.getItem('denomination');
    let receiverNumber = @json($number);
    let country = 'Afghanistan';
    let network = $('.network_d').text();
    let usdAmount = $('.topupToUsd_d').text().replace(/\$/g, '');
    let processingFee = $('.processingFee_d').text().replace(/\$/g, '');
    let totalUsd = $('.usdTotal_d').text().replace(/\$/g, '');
    let code = $('.productCode_d').val();

    parameter = {
      receiver_name: receiverName,
      topup_amount: denomination,
      receiver_number: receiverNumber,
      country: country,
      receiver_network: network,
      topup_amount_usd: usdAmount,
      processing_fee: processingFee,
      total_amount_usd: totalUsd,
    }

    $.ajax({
      url: 'https://amintopup.com/api/create_transaction',
      type: 'POST',
      dataType: 'json', // added data type
      data: JSON.stringify(parameter),
      headers: {
        'Authorization': 'Bearer ' + token,
        'Content-Type': 'application/json'
      },
      success: function(response) {
        let tid = response.data.transaction_id;
        sessionStorage.setItem('tid', tid);
        sessionStorage.setItem('receiverNumber', receiverNumber);
        sessionStorage.setItem('totalUsd', totalUsd);
        sessionStorage.setItem('code', code);

        window.location.href = 'https://amintopup.com/payment';
      },
      error: function(jqXHR, exception) {
        alert("Something went wrong. Please try again later.");
      }
    });

  });
</script>
@endsection