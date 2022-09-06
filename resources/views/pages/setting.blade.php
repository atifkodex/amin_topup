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
                      <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1"
                      aria-expanded="true" aria-controls="faq1">
    
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
                                <td class="data">-{{$oprator['denomination']}}</td>
                                <td class="data topupAfn">{{$oprator['denomination']}}</td>
                                <td class=" afterTax_d">90</td>
                                <td class="data exchange_rate">{{$oprator['exchange_rate']}}</td>
                                <td class="aminPrice">${{$oprator['topup_usd']}}</td>
                                <td class="data percentageDeduct">2.90</td>
                                <td class="data stripeFee">0.30</td>
                                <td class="userTotal">${{$oprator['exchange_rate']}}</td>
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
                  <div class="card-header setting-card-header" id="faqhead2">
                      <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                      aria-expanded="true" aria-controls="faq2"> <img class="pr-4" src="{{asset('assets/images/etisalat.png')}}" alt="">Etisalat Afghanistan</a>
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
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                    aria-expanded="true" aria-controls="faq3"> <img class="pr-4" src="{{asset('assets/images/awcc.png')}}" alt="">Afghan Wireless</a>
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
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                    aria-expanded="true" aria-controls="faq4"> <img class="pr-4" src="{{asset('assets/images/mtn.png')}}" alt="">MTN Afghanistan</a>
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
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                    aria-expanded="true" aria-controls="faq5"> <img class="pr-4" src="{{asset('assets/images/salaam-logo.png')}}" alt="">Salaam Network</a>
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
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                    aria-expanded="true" aria-controls="faq6"> <img class="pr-4" src="{{asset('assets/images/telecom.png')}}" alt="">Afghan Telecom</a>
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
              <div class="card setting-card mt-5">
                <div class="card-header stripe-key-header setting-card-header" id="faqhead7">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7"
                    aria-expanded="true" aria-controls="faq7">  Stripe key</a>
                </div>

                <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                  <div class="card-body setting-card-body">
                    <form>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group stripe-key">
                            <label for="publishablekey">Publishable key</label>
                            <input type="text" class="form-control" id="publishablekey"  placeholder="Type here">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group stripe-key">
                            <label for="secretkey">Secret key</label>
                            <input type="text" class="form-control" id="secretkey"  placeholder="Type here">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group stripe-key">
                            <label for="clientid">Client ID</label>
                            <input type="text" class="form-control" id="clientid"  placeholder="Type here">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group stripe-key">
                            <label for="redirectedurl">Redirected URL</label>
                            <input type="text" class="form-control" id="redirectedurl"  placeholder="Type here">
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
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8"
                    aria-expanded="true" aria-controls="faq8"><img src="{{('assets/images/profile-icon.svg')}}" alt=""> Create new admin</a>
                </div>

                <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                  <div class="card-body setting-card-body">
                    <form>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group stripe-key">
                            <label for="adminname">Name</label>
                            <input type="text" class="form-control" id="adminname"  placeholder="Enter Name">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group stripe-key">
                            <label for="adminemail">Email</label>
                            <input type="email" class="form-control" id="adminemail"  placeholder="Enter email">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group stripe-key">
                            <label for="adminpassword">Password</label>
                            <input type="password" class="form-control" id="adminpassword"  placeholder="Enter Password">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group stripe-key">
                            <label for="adminconfirmpsd">Confirm Password</label>
                            <input type="password" class="form-control" id="adminconfirmpsd"  placeholder="Enter Confirm Password">
                          </div>
                        </div>
                        <div class="col-12 text-center stripe-key-btn py-4">
                        <button type="submit">Create Admin</button>
                        </div>
                      </div>
                    </form>
          

                    
                  </div>
                
                </div>
              </div>          
            </div>
         </div>
       </div>
   
    </div>
 </div>
</div>
@endsection
@section('inserfooter')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Backend Script -- Start --  -->
<script>
  
  // For Denomination 
  $(".topupAfn").keyup(function() {
    let amount = $(this).find('input').val();
    let tax = (amount * 10) /100;
    let amountAfterTax = amount - tax;
    $(this).parent().find(".afterTax_d").text(amountAfterTax);
  });

  // For Exchange Rate 
  $(".exchange_rate").keyup(function() {
    let rate = $(this).find('input').val();
    let money = $(this).parent().find(".topupAfn").find('input').val();
    let usdAmount = money / rate;
    $(this).parent().find(".aminPrice").text("$"+usdAmount);
  });

  // For Percentage 
  $(".percentageDeduct").keyup(function() {
    debugger;
    let percentage = $(this).find('input').val();
    if(percentage == ""){
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
    // alert(priceAmin);
    // Stripe Fees
    let stripeFeeDollar = $(this).parent().find(".stripeFee").find('input').val();
    let stripeFee = stripeFeeDollar.replace(/\$/g, '');
    
    let total =  parseFloat(priceAmin) + parseFloat(stripeFee);
    $(this).parent().find(".userTotal").text("$"+total);
  });

  // For Fix Fees Stripe 
  $(".stripeFee").keyup(function() {
    let feesDollar = $(this).find('input').val();
    let fees = feesDollar.replace(/\$/g, '');
    if(fees == ""){
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
    $(this).parent().find(".userTotal").text("$"+total);
  });
</script>
<!-- Backend Script -- END --  -->

<script>
  $('.save').hide();
  $(document).on('click', '.edit', function() {
    $('td.data').each(function() {
      var content = $(this).html();
      $(this).html('<input value="' + content + '" />');
    });
    
    $('.edit').hide();
    $('.save').show();
  });

  $(document).on('click', '.save', function() {
    
    $('input').each(function() {
      var content = $(this).val();
      $(this).html(content);
      $(this).contents().unwrap();
    });
    $('.save').hide();
    $('.edit').show();
    
  });

  $('.sidebar-menu ul li:nth-of-type(4)').addClass('active');
</script>

@endsection