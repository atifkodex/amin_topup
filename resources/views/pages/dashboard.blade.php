@extends('layouts.admin-default')

@section('content')
@include('includes.admin-navbar')
<!-- ===================== Right Sidebar ===================== -->
<div class="right-sidebar">
  <div class="container-fluid">
      <!-- Overview Box -->
      <div class="row dashboard-first-sec">
          <!-- Box 1 -->
          <div class="col-xl-8">
              <div class="overview-box">
                <div class="view-box-heading">
                    <h2>Overview</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="overview-col">
                            <p><span>17 Aug 2022</span></p>
                            <h2>Total Active Users</h2>
                            <div class="box-data">
                                <h3>204 <span>/ 6000</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="overview-col">
                            <p><span>17 Aug 2022</span></p>
                            <h2>Total Sales</h2>
                            <div class="box-data">
                                <h3>40000 <span>USD</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="overview-col">
                            <p><span>17 Aug 2022</span></p>
                            <h2>Total Topup</h2>                            
                            <div class="pie-chart-main">
                                <ul>
                                    <li>
                                        <div class="color-box"></div>
                                        <span>Roshan</span>
                                    </li>
                                    <li>
                                        <div class="color-box"></div>
                                        <span>Etisalat</span>
                                    </li>
                                    <li>
                                        <div class="color-box"></div>
                                        <span>Roshan</span>
                                    </li>
                                    <li>
                                        <div class="color-box"></div>
                                        <span>AWCC</span>
                                    </li>
                                    <li>
                                        <div class="color-box"></div>
                                        <span>Afghan Telecom</span>
                                    </li>
                                </ul>
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
          <!-- Box 1 End -->
          <!-- Box 2 -->
          <div class="col-xl-4">
              <div class="first-right-box">
                <div class="refund-req-box">
                    <h2>Refund Request</h2>
                    <div class="refund-slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="refund-item">
                                        <div class="refund-item-inner">
                                            <div class="refund-list">
                                                <p>Sender Name:</p>
                                                <p>Muhammad Ali</p>
                                            </div>
                                            <div class="refund-list">
                                                <p>Transaction ID:</p>
                                                <p>#021352</p>
                                            </div>
                                            <div class="refund-list">
                                                <p>Date & Time of Transaction</p>
                                                <p>08/22/2022 <span style="opacity: 0.7;">9:25am</span></p>
                                            </div>
                                            <div class="refund-list">
                                                <p style="color: #000; font-weight: 500;">Topup Amount:</p>
                                                <p style="color: #F89822;">200 AFN</p>
                                            </div>
                                            <div class="refund-list">
                                                <p>Refund Amount:</p>
                                                <p>200 AFN</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                   <div class="refund-item">
                                        <div class="refund-item-inner">
                                            <div class="refund-list">
                                                <p>Sender Name:</p>
                                                <p>Muhammad Ali</p>
                                            </div>
                                            <div class="refund-list">
                                                <p>Transaction ID:</p>
                                                <p>#021352</p>
                                            </div>
                                            <div class="refund-list">
                                                <p>Date & Time of Transaction</p>
                                                <p>08/22/2022 <span style="opacity: 0.7;">9:25am</span></p>
                                            </div>
                                            <div class="refund-list">
                                                <p style="color: #000; font-weight: 500;">Topup Amount:</p>
                                                <p style="color: #F89822;">200 AFN</p>
                                            </div>
                                            <div class="refund-list">
                                                <p>Refund Amount:</p>
                                                <p>200 AFN</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="refund-item">
                                        <div class="refund-item-inner">
                                            <div class="refund-list">
                                                <p>Sender Name:</p>
                                                <p>Muhammad Ali</p>
                                            </div>
                                            <div class="refund-list">
                                                <p>Transaction ID:</p>
                                                <p>#021352</p>
                                            </div>
                                            <div class="refund-list">
                                                <p>Date & Time of Transaction</p>
                                                <p>08/22/2022 <span style="opacity: 0.7;">9:25am</span></p>
                                            </div>
                                            <div class="refund-list">
                                                <p style="color: #000; font-weight: 500;">Topup Amount:</p>
                                                <p style="color: #F89822;">200 AFN</p>
                                            </div>
                                            <div class="refund-list">
                                                <p>Refund Amount:</p>
                                                <p>200 AFN</p>
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
          <!-- Box 2 End -->
          
      </div>
      <!-- Overview Box End -->
 
      <!-- Latest Transactions -->
      <div class="latest-transection-sec">
         <h2>Latest Transactions</h2>
         <div class="row">
           <div class="col-12">
           <div class="setting-card-body-inner Flipped" style="overflow-x:auto;">                                   
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
         </div>
      </div>

 </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        series: [44, 55, 41, 17, 15],
        chart: {
        type: 'donut',
        width: 150
        },
        responsive: [{
        breakpoint: 480,
        options: {
            chart: {
            width: 200
            },
            legend: {
            position: 'bottom'
            }
        }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();


</script>

@endsection
@section('javascriptwork')

@endsection