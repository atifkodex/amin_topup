@extends('layouts.admin-default')
<style>
  /* .Flipped, .Flipped table{
            transform: rotateX(180deg);
        } */
</style>

@section('content')
@include('includes.admin-navbar')
<!-- ===================== Right Sidebar ===================== -->
<div class="right-sidebar">
  <div class="container-fluid">
    <div class="setting-heading pl-4">
      <h1>Settings</h1>
    </div>
    <div class="setting-section p-4">
      <div class="setting-section-heading">
        <h1>Operator Network</h1>
      </div>
      <div id="main">
        <div class="container-fluid px-0">
          <div class="accordion" id="faq">
            <div class="card setting-card">
              <div class="card-header setting-card-header" id="faqhead1">
                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">

                  <img class="pr-4" src="{{asset('assets/images/roshan-logo.png')}}" alt=""> Roshan</a>
              </div>

              <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                <div class="card-body setting-card-body">
                  <div class="setting-card-body-inner Flipped" style="overflow-x:auto;">

                    <table>
                      <tr>
                        <th>Denomination</th>
                        <th>Topup Amount</th>
                        <th>topup Customer will Receive (-10% Tax)</th>
                        <th>Exchange Rate</th>
                        <th>Amin Topup Price</th>
                        <th>Transaction Fee(%)</th>
                        <th>Transaction Fees(Fix)</th>
                        <th>Amount Payable to Customer</th>
                        <th>Product Code in Topup API</th>
                        <th>Product Code in Strip (Testbed)</th>
                      </tr>
                      @foreach($data[0]['operator_data'] as $oprator)
                      <tr>
                        <td class="">-{{$oprator['denomination']}}</td>
                        <td class="data topupAfn">{{$oprator['denomination']}}</td>
                        <td class=" afterTax_d">{{$oprator['afterTax']}}</td>
                        <td class="data exchange_rate">{{$oprator['exchange_rate']}}</td>
                        <td class="aminPrice">${{$oprator['topup_usd']}}</td>
                        <td class="data percentageDeduct">2.90</td>
                        <td class="data stripeFee">0.30</td>
                        <td class="userTotal">${{$oprator['TotalPayable']}}</td>
                        <td class="data">{{$oprator['product_code_topup']}}</td>
                        <td class="data">{{$oprator['product_code_stripe']}}</td>
                        <input type="hidden" class="operator_id" value="{{$oprator['id']}}">
                      </tr>
                      @endforeach


                    </table>
                  </div>


                </div>
                <div class="setting-card-button text-right pr-4 pb-4">
                  <button class="edit">
                    Edit
                  </button>
                  <button class="save">
                    Update
                  </button>
                </div>
              </div>
            </div>
            <div class="card setting-card">
              <div class="card-header setting-card-header" id="faqhead2">
                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2"> <img class="pr-4" src="{{asset('assets/images/etisalat.png')}}" alt="">Etisalat Afghanistan</a>
              </div>

              <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                <div class="card-body setting-card-body">
                  <div class="setting-card-body-inner" style="overflow-x:auto;">
                    <table>
                      <tr>
                        <th>Denomination</th>
                        <th>Topup Amount</th>
                        <th>topup Customer will Receive (-10% Tax)</th>
                        <th>Exchange Rate</th>
                        <th>Amin Topup Price</th>
                        <th>Transaction Fee(%)</th>
                        <th>Transaction Fees(%+Fix)</th>
                        <th>Amount Payable to Customer</th>
                        <th>Product Code in Topup API</th>
                        <th>Product Code in Strip (Testbed)</th>
                      </tr>
                      @foreach($data[1]['operator_data'] as $oprator)
                      <tr>
                        <td class="">-{{$oprator['denomination']}}</td>
                        <td class="data topupAfn">{{$oprator['denomination']}}</td>
                        <td class=" afterTax_d">{{$oprator['afterTax']}}</td>
                        <td class="data exchange_rate">{{$oprator['exchange_rate']}}</td>
                        <td class="aminPrice">${{$oprator['topup_usd']}}</td>
                        <td class="data percentageDeduct">2.90</td>
                        <td class="data stripeFee">0.30</td>
                        <td class="userTotal">${{$oprator['TotalPayable']}}</td>
                        <td class="data">{{$oprator['product_code_topup']}}</td>
                        <td class="data">{{$oprator['product_code_stripe']}}</td>
                      </tr>
                      @endforeach
                      <!-- <tr>
                          <td class="data">-100 AFN</td>
                          <td class="data">100</td>
                          <td class="data">90</td>
                          <td class="data">80</td>
                          <td class="data">$1.25</td>
                          <td class="data">2.90%</td>
                          <td class="data">$0.30</td>
                          <td class="data">$1.59</td>
                          <td class="data">ROSHAN_EXCHANGE</td>
                          <td class="data">price_1LTTxnDFBGCzynQzohlnw2xe</td>

                        </tr>
                        <tr>
                          <td class="data">-100 AFN</td>
                          <td class="data">100</td>
                          <td class="data">90</td>
                          <td class="data">80</td>
                          <td class="data">$1.25</td>
                          <td class="data">2.90%</td>
                          <td class="data">$0.30</td>
                          <td class="data">$1.59</td>
                          <td class="data">ROSHAN_EXCHANGE</td>
                          <td class="data">price_1LTTxnDFBGCzynQzohlnw2xe</td>

                        </tr>
                        <tr>
                          <td class="data">-100 AFN</td>
                          <td class="data">100</td>
                          <td class="data">90</td>
                          <td class="data">80</td>
                          <td class="data">$1.25</td>
                          <td class="data">2.90%</td>
                          <td class="data">$0.30</td>
                          <td class="data">$1.59</td>
                          <td class="data">ROSHAN_EXCHANGE</td>
                          <td class="data">price_1LTTxnDFBGCzynQzohlnw2xe</td>

                        </tr>
                        <tr>
                          <td class="data">-100 AFN</td>
                          <td class="data">100</td>
                          <td class="data">90</td>
                          <td class="data">80</td>
                          <td class="data">$1.25</td>
                          <td class="data">2.90%</td>
                          <td class="data">$0.30</td>
                          <td class="data">$1.59</td>
                          <td class="data">ROSHAN_EXCHANGE</td>
                          <td class="data">price_1LTTxnDFBGCzynQzohlnw2xe</td>

                        </tr> -->

                    </table>
                  </div>


                </div>
                <div class="setting-card-button text-right pr-4 pb-4">
                  <button class="edit">
                    Edit
                  </button>
                  <button class="save">
                    Update
                  </button>
                </div>
              </div>
            </div>
            <div class="card setting-card">
              <div class="card-header setting-card-header" id="faqhead3">
                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3"> <img class="pr-4" src="{{asset('assets/images/awcc.png')}}" alt="">Afghan Wireless</a>
              </div>

              <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                <div class="card-body setting-card-body">
                  <div class="setting-card-body-inner" style="overflow-x:auto;">
                    <table>
                      <tr>
                        <th>Denomination</th>
                        <th>Topup Amount</th>
                        <th>topup Customer will Receive (-10% Tax)</th>
                        <th>Exchange Rate</th>
                        <th>Amin Topup Price</th>
                        <th>Transaction Fee(%)</th>
                        <th>Transaction Fees(%+Fix)</th>
                        <th>Amount Payable to Customer</th>
                        <th>Product Code in Topup API</th>
                        <th>Product Code in Strip (Testbed)</th>
                      </tr>
                      @foreach($data[2]['operator_data'] as $oprator)
                      <tr>
                        <td class="">-{{$oprator['denomination']}}</td>
                        <td class="data topupAfn">{{$oprator['denomination']}}</td>
                        <td class=" afterTax_d">{{$oprator['afterTax']}}</td>
                        <td class="data exchange_rate">{{$oprator['exchange_rate']}}</td>
                        <td class="aminPrice">${{$oprator['topup_usd']}}</td>
                        <td class="data percentageDeduct">2.90</td>
                        <td class="data stripeFee">0.30</td>
                        <td class="userTotal">${{$oprator['TotalPayable']}}</td>
                        <td class="data">{{$oprator['product_code_topup']}}</td>
                        <td class="data">{{$oprator['product_code_stripe']}}</td>
                      </tr>
                      @endforeach
                    </table>
                  </div>


                </div>
                <div class="setting-card-button text-right pr-4 pb-4">
                  <button class="edit">
                    Edit
                  </button>
                  <button class="save">
                    Update
                  </button>
                </div>
              </div>
            </div>
            <div class="card setting-card">
              <div class="card-header setting-card-header" id="faqhead4">
                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4"> <img class="pr-4" src="{{asset('assets/images/mtn.png')}}" alt="">MTN Afghanistan</a>
              </div>

              <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                <div class="card-body setting-card-body">
                  <div class="setting-card-body-inner" style="overflow-x:auto;">
                    <table>
                      <tr>
                        <th>Denomination</th>
                        <th>Topup Amount</th>
                        <th>topup Customer will Receive (-10% Tax)</th>
                        <th>Exchange Rate</th>
                        <th>Amin Topup Price</th>
                        <th>Transaction Fee(%)</th>
                        <th>Transaction Fees(%+Fix)</th>
                        <th>Amount Payable to Customer</th>
                        <th>Product Code in Topup API</th>
                        <th>Product Code in Strip (Testbed)</th>
                      </tr>
                      @foreach($data[3]['operator_data'] as $oprator)
                      <tr>
                        <td class="">-{{$oprator['denomination']}}</td>
                        <td class="data topupAfn">{{$oprator['denomination']}}</td>
                        <td class=" afterTax_d">{{$oprator['afterTax']}}</td>
                        <td class="data exchange_rate">{{$oprator['exchange_rate']}}</td>
                        <td class="aminPrice">${{$oprator['topup_usd']}}</td>
                        <td class="data percentageDeduct">2.90</td>
                        <td class="data stripeFee">0.30</td>
                        <td class="userTotal">${{$oprator['TotalPayable']}}</td>
                        <td class="data">{{$oprator['product_code_topup']}}</td>
                        <td class="data">{{$oprator['product_code_stripe']}}</td>
                      </tr>
                      @endforeach

                    </table>
                  </div>


                </div>
                <div class="setting-card-button text-right pr-4 pb-4">
                  <button class="edit">
                    Edit
                  </button>
                  <button class="save">
                    Update
                  </button>
                </div>
              </div>
            </div>
            <div class="card setting-card">
              <div class="card-header setting-card-header" id="faqhead5">
                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="true" aria-controls="faq5"> <img class="pr-4" src="{{asset('assets/images/salaam-logo.png')}}" alt="">Salaam Network</a>
              </div>

              <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                <div class="card-body setting-card-body">
                  <div class="setting-card-body-inner" style="overflow-x:auto;">
                    <table>
                      <tr>
                        <th>Denomination</th>
                        <th>Topup Amount</th>
                        <th>topup Customer will Receive (-10% Tax)</th>
                        <th>Exchange Rate</th>
                        <th>Amin Topup Price</th>
                        <th>Transaction Fee(%)</th>
                        <th>Transaction Fees(%+Fix)</th>
                        <th>Amount Payable to Customer</th>
                        <th>Product Code in Topup API</th>
                        <th>Product Code in Strip (Testbed)</th>
                      </tr>
                      @foreach($data[4]['operator_data'] as $oprator)
                      <tr>
                        <td class="">-{{$oprator['denomination']}}</td>
                        <td class="data topupAfn">{{$oprator['denomination']}}</td>
                        <td class=" afterTax_d">{{$oprator['afterTax']}}</td>
                        <td class="data exchange_rate">{{$oprator['exchange_rate']}}</td>
                        <td class="aminPrice">${{$oprator['topup_usd']}}</td>
                        <td class="data percentageDeduct">2.90</td>
                        <td class="data stripeFee">0.30</td>
                        <td class="userTotal">${{$oprator['TotalPayable']}}</td>
                        <td class="data">{{$oprator['product_code_topup']}}</td>
                        <td class="data">{{$oprator['product_code_stripe']}}</td>
                      </tr>
                      @endforeach


                    </table>
                  </div>


                </div>
                <div class="setting-card-button text-right pr-4 pb-4">
                  <button class="edit">
                    Edit
                  </button>
                  <button class="save">
                    Update
                  </button>
                </div>
              </div>
            </div>
            <div class="card setting-card">
              <div class="card-header setting-card-header" id="faqhead6">
                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="true" aria-controls="faq6"> <img class="pr-4" src="{{asset('assets/images/telecom.png')}}" alt="">Afghan Telecom</a>
              </div>

              <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                <div class="card-body setting-card-body">
                  <div class="setting-card-body-inner" style="overflow-x:auto;">
                    <table>
                      <tr>
                        <th>Denomination</th>
                        <th>Topup Amount</th>
                        <th>topup Customer will Receive (-10% Tax)</th>
                        <th>Exchange Rate</th>
                        <th>Amin Topup Price</th>
                        <th>Transaction Fee(%)</th>
                        <th>Transaction Fees(%+Fix)</th>
                        <th>Amount Payable to Customer</th>
                        <th>Product Code in Topup API</th>
                        <th>Product Code in Strip (Testbed)</th>
                      </tr>
                      @foreach($data[5]['operator_data'] as $oprator)
                      <tr>
                        <td class="">-{{$oprator['denomination']}}</td>
                        <td class="data topupAfn">{{$oprator['denomination']}}</td>
                        <td class=" afterTax_d">{{$oprator['afterTax']}}</td>
                        <td class="data exchange_rate">{{$oprator['exchange_rate']}}</td>
                        <td class="aminPrice">${{$oprator['topup_usd']}}</td>
                        <td class="data percentageDeduct">2.90</td>
                        <td class="data stripeFee">0.30</td>
                        <td class="userTotal">${{$oprator['TotalPayable']}}</td>
                        <td class="data">{{$oprator['product_code_topup']}}</td>
                        <td class="data">{{$oprator['product_code_stripe']}}</td>
                      </tr>
                      @endforeach
                    </table>
                  </div>


                </div>
                <div class="setting-card-button text-right pr-4 pb-4">
                  <button class="edit">
                    Edit
                  </button>
                  <button class="save">
                    Update
                  </button>
                </div>
              </div>
            </div>

            <!-- // Publishable Key Section // -->


            <?php $type = $value['user']['type']; ?>

            @if ($type == "super_admin")
            <div class="card setting-card mt-5">
              <div class="card-header stripe-key-header setting-card-header" id="faqhead7">
                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7" aria-expanded="true" aria-controls="faq7"> Stripe key</a>
              </div>

              <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                <div class="card-body setting-card-body">
                  <form action="{{route('update_env')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group stripe-key">
                          <label for="publishablekey">Publishable key</label>
                          <input type="text" name="publish_key" class="form-control" id="publishablekey" placeholder="Type here">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group stripe-key">
                          <label for="secretkey">Secret key</label>
                          <input type="text" name="secret_key" class="form-control" id="secretkey" placeholder="Type here">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group stripe-key">
                          <label for="clientid">Client ID</label>
                          <input type="text" name="client_id" class="form-control" id="clientid" placeholder="Type here">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group stripe-key">
                          <label for="redirectedurl">Redirected URL</label>
                          <input type="text" name="url" class="form-control" id="redirectedurl" placeholder="Type here">
                        </div>
                      </div>
                      <div class="col-12 text-center stripe-key-btn py-4">
                        <button type="submit">Save</button>
                      </div>
                    </div>
                  </form>



                </div>

              </div>
            </div>
            <div class="card setting-card">
              <div class="card-header stripe-key-header setting-card-header" id="faqhead8">
                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="true" aria-controls="faq8"><img src="{{('assets/images/profile-icon.svg')}}" alt="">Admin</a>
              </div>

              <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                <div class="card-body setting-card-body latest-transection-sec mt-0">
                  <div class="text-right add-admin">
                    <button class="open-admin-form mb-2">+</button>
                    <button class="close-admin-form mb-2">-</button>
                  </div>
                  <form class="admin-form" action="{{route('admin_create')}}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group stripe-key">
                          <label for="adminname">Name</label>
                          <input type="text" class="form-control" id="adminname" placeholder="Enter Name" name="name">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group stripe-key">
                          <label for="adminemail">Email</label>
                          <input type="email" class="form-control" id="adminemail" placeholder="Enter email" name="email">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group stripe-key">
                          <label for="adminpassword">Password</label>
                          <input type="password" class="form-control" id="adminpassword" placeholder="Enter Password" name="password">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group stripe-key">
                          <label for="adminconfirmpsd">Confirm Password</label>
                          <input type="password" class="form-control" id="adminconfirmpsd" placeholder="Enter Confirm Password" name="password_confirmation">
                        </div>
                      </div>
                      <div class="col-12 text-center stripe-key-btn py-4">
                        <button type="submit" name="submit">Create Admin</button>
                      </div>
                    </div>
                  </form>

                  <div class="setting-card-body-inner" style="overflow-x:auto;">
                    <table style="width:100%">
                      <tr>
                        <th>Admin</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                      </tr>
                      @foreach($admin as $admins)
                      <tr class="getuserdata">
                        <input class="id" type="hidden" value="{{$admins['id']}}">
                        <td class="data name">{{$admins['name']}}</td>
                        <td class="data email">{{$admins['email']}}</td>
                        <td class="data country">{{$admins['country']}}</td>
                        <td class="data phone_number">{{$admins['phone_number']}}</td>

                        <td class="data">
                          <img src="{{ asset('assets/images/action-icon.svg') }}" alt="pangol" data-toggle="modal" data-target="#basicsubsModal" style="cursor: pointer">
                        </td>

                      </tr>
                      @endforeach

                    </table>
                  </div>

                </div>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="basicsubsModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content user-modal">
      <div class="modal-body px-4">
        <div class="user-modal-header py-3">
          <h1>Edit Admin Details</h1>
        </div>
        <form action="{{route('admin_create')}}" method="POST">
          @csrf

          <div class="row">
            <div class="col-12">
              <input type="hidden" value="" id="id" name="id">
              <div class="form-group stripe-key admin-detail">
                <label for="adminname">Name</label>
                <input type="text" class="form-control" id="admin_name_id" placeholder="Type here..." name="name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group stripe-key admin-detail">
                <label for="adminemail">Email</label>
                <input type="email" class="form-control" id="admin_email_id" placeholder="Type here..." name="email">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group stripe-key admin-detail">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country_id" placeholder="Type here..." name="country">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group stripe-key admin-detail">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" id="phone_number_id" placeholder="Type here..." name="phone_number">
              </div>
            </div>
            <div class="col-12 text-center stripe-key-btn py-4 admin-detail-btn">
              <button type="submit" name="submit">Update</button>
            </div>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>
    <div class="modal fade income-edit-modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content delete-modal-content">
                <div class="modal-header income-modal justify-content-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/images/modal-close.svg" alt="image">
                    </button>
                </div>
                <div class="modal-body income-edit-modal-body text-center delete-modal-body">
                  <img src="assets/images/question-mark.svg" alt="image"> 
                  <p>Are you sure want to delete this record</p>
                  <div class="delete-modal-btn d-flex justify-content-between">
                      <a href="#">
                          <button class="yes-btn">
                              Yes
                          </button>

                      </a>
                      <a href="#">
                          <button class="yes-btn">
                              No
                          </button>

                      </a>
                  </div>
                
                </div>
  
            </div>
        </div>
    </div>
@endif
@endsection
@section('inserfooter')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Backend Script -- Start --  -->
<script>
  var token = @json($token);
  // For Denomination 
  $(".topupAfn").keyup(function() {
    let amount = $(this).find('input').val();
    let tax = (amount * 10) / 100;
    let amountAfterTax = amount - tax;
    $(this).parent().find(".afterTax_d").text(amountAfterTax);
    let id = $(this).parent().find(".operator_id").val();


  });

  // For Exchange Rate 
  $(".exchange_rate").keyup(function() {
    let rate = $(this).find('input').val();
    let money = $(this).parent().find(".topupAfn").find('input').val();
    let usdAmount = money / rate;
    let usdAmountRounded = usdAmount.toFixed(2);
    $(this).parent().find(".aminPrice").text("$" + usdAmountRounded);
    let id = $(this).parent().find(".operator_id").val();

    let aminPercentage = $(this).parent().find(".percentageDeduct").find('input').val();
    let perToPrice = (aminPercentage * usdAmountRounded) / 100;

    let stripeFees = $(this).parent().find(".stripeFee").find('input').val();
    let totalPayable = usdAmountRounded + perToPrice + stripeFees;
    let totalPayableRounded = totalPayable.toFixed(2); 
    $(this).parent().find(".userTotal").text(totalPayableRounded);
    // Ajax call 
    $.ajax({
      url: 'http://kodextech.net/amin-topup/api/update_operator',
      type: 'POST',
      dataType: 'json', // added data type
      data: {
        id: id,
        denomination: money,
        topup_usd: usdAmount,
        exchange_rate: rate,
      },
      headers: {
          'Authorization': 'Bearer ' + token
      },
      success: function(response) {

      }
    });
  });

  // For Percentage 
  $(".percentageDeduct").keyup(function() {
    let id = $(this).parent().find(".operator_id").val();
    let percentage = $(this).find('input').val();
    if (percentage == "") {
      percentage = 0;
    }
    // Total Price 
    let userTotalDollar = $(this).parent().find(".userTotal").text();
    let userTotal = userTotalDollar.replace(/\$/g, '');
    // Amin Price 
    let aminPriceDollar = $(this).parent().find(".aminPrice").text();
    let aminPrice = aminPriceDollar.replace(/\$/g, '');
    // Amin Percentage 
    let priceAminCalculation = (aminPrice * percentage) / 100;
    let priceAmin = parseFloat(aminPrice) + parseFloat(priceAminCalculation);
    // Stripe Fees
    let stripeFeeDollar = $(this).parent().find(".stripeFee").find('input').val();
    let stripeFee = stripeFeeDollar.replace(/\$/g, '');

    let total = parseFloat(priceAmin) + parseFloat(stripeFee);
    $(this).parent().find(".userTotal").text("$" + total);

    // Ajax call 
    $.ajax({
      url: 'http://kodextech.net/amin-topup/api/update_operator',
      type: 'POST',
      dataType: 'json', // added data type
      data: {
        id: id,
        fee_percentage: percentage,
      },
      headers: {
          'Authorization': 'Bearer ' + token
      },
      success: function(response) {

      }
    });
  });

  // For Fix Fees Stripe 
  $(".stripeFee").keyup(function() {
    let feesDollar = $(this).find('input').val();
    let fees = feesDollar.replace(/\$/g, '');
    if (fees == "") {
      fees = 0;
    }
    // Total Price 
    let userTotalDollar = $(this).parent().find(".userTotal").text();
    let userTotal = userTotalDollar.replace(/\$/g, '');
    // Amin Price 
    let aminPriceDollar = $(this).parent().find(".aminPrice").text();
    let aminPrice = aminPriceDollar.replace(/\$/g, '');
    // Amin Percentage
    let aminPercentage = $(this).parent().find(".percentageDeduct").find('input').val();
    let priceAminCalculation = (aminPrice * aminPercentage) / 100;
    let priceAmin = parseFloat(aminPrice) + parseFloat(priceAminCalculation);

    let total = parseFloat(fees) + parseFloat(priceAmin);
    $(this).parent().find(".userTotal").text("$" + total);
    let id = $(this).parent().find(".operator_id").val();

    // Ajax call 
    $.ajax({
      url: 'http://kodextech.net/amin-topup/public/api/admin/update_operator',
      type: 'POST',
      dataType: 'json', // added data type
      data: {
        id: id,
        stripe_fee: fees,
      },
      success: function(response) {

      }
    });
  });
</script>
<!-- Backend Script -- END --  -->

<script>
  $('.admin-form').hide();
  $('.close-admin-form').hide();
  $(".open-admin-form").click(function() {
    $(".admin-form").show(1000);
    $('.open-admin-form').hide();
    $('.close-admin-form').show();
  });
  $(".close-admin-form").click(function() {
    $(".admin-form").hide(1000);
    $('.open-admin-form').show();
    $('.close-admin-form').hide();
  });
</script>
<script>
  $('.save').hide();

  $(document).on('click', '.edit', function() {
    $(this).parent().parent().find('td.data').each(function() {
      var content = $(this).html();
      $(this).html('<input value="' + content + '" />');
    });

    $(this).hide();
    $(this).parent().find('.save').show();
  });

  $(document).on('click', '.save', function() {

    $(this).parent().parent().find('input').each(function() {
      var content = $(this).val();
      $(this).html(content);
      $(this).contents().unwrap();
    });
    $(this).hide();
    $(this).parent().find('.edit').show();

  });

  $('.sidebar-menu ul li:nth-of-type(4)').addClass('active');
</script>
<script>
  $('.getuserdata').click(function() {
    var id = $(this).find('.id').val();
    var name = $(this).find('.name').text();
    var email = $(this).find('.email').text();
    var country = $(this).find('.country').text();
    var phone_number = $(this).find('.phone_number').text();

    $('#id').val(id);
    $('#admin_name_id').val(name);
    $('#admin_email_id').val(email);
    $('#country_id').val(country);
    $('#phone_number_id').val(phone_number);
  });
</script>

@endsection