@extends('layouts.admin-default')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css" rel="stylesheet"/>
<style>
    .table-condensed thead tr:nth-of-type(2) th {
        color: #F89822 !important;
    }

    .table-condensed thead tr:nth-of-type(3) th {
        color: #F89822 !important;
        font-weight: normal !important;
        font-size: 13px !important;
    }

    .datepicker-months .table-condensed tbody tr:nth-of-type(1),
    .datepicker-years .table-condensed tbody tr:nth-of-type(1) {
        background: #F89822 !important;
        color: white !important;
    }

    .datepicker-months .table-condensed tbody tr:nth-of-type(1) td .month:hover,
    .datepicker-years .table-condensed tbody tr:nth-of-type(1) td .year:hover {
        background: #ac6d1cc4 !important;
        color: white !important;
    }

    .datepicker-months .table-condensed tbody tr:nth-of-type(1) td .month.focused,
    .datepicker-years .table-condensed tbody tr:nth-of-type(1) td .year.focused {
        background: #ac6d1cc4 !important;
        color: white !important;
    }

    .table-condensed tbody tr td {
        font-size: 13px !important;
    }

    .table-condensed,
    .datepicker-inline {
        width: 100% !important;
    }

    .table-condensed tfoot {
        display: none !important;
    }

    .datepicker table tr td.highlighted {
        background: transparent !important;
        color: black !important;
    }

    .datepicker table tr td.today {
        background: transparent !important;
        color: black !important;
    }

    .datepicker table tr td.active.active,
    .datepicker table tr td:hover {
        background: #F89822 !important;
        color: white !important;
        border-radius: 5px !important;
    }

    .pie-chart-main {
        position: relative !important;
    }

    .chart-inner {
        color: #F89822;
        text-align: center
    }

    @media screen and (min-width:1199px) {
        .chart-inner {
            position: absolute !important;
            top: 45% !important;
            left: 50% !important;
            transform: translateX(-50%) translateY(-50%) !important;
            font-size: 12px;
            font-weight: bold;
        }
    }

    @media screen and (max-width:1198px) {

        .chart-inner {
            position: absolute !important;
            top: 45% !important;
            left: 50% !important;
            transform: translateX(-50%) translateY(-50%) !important;
            font-size: 14px;
            font-weight: bold;
        }
    }
    @media screen and (min-width:1640px) {
     #table-id{
        width: 100% !important;
     }
    }
</style>

@section('content')
    @include('includes.admin-navbar')

    <!-- ===================== Right Sidebar ===================== -->
    <input type="hidden" class="roshanPercentage" value="{{$data['roshanPercentage']}}" />
    <input type="hidden" class="etisalatPercentage" value="{{$data['etisalatPercentage']}}" />
    <input type="hidden" class="salaamPercentage" value="{{$data['salaamPercentage']}}" />
    <input type="hidden" class="awccPercentage" value="{{$data['awccPercentage']}}" />
    <input type="hidden" class="afghanTelecomPercentage" value="{{$data['afghanTelecomPercentage']}}" />
    <input type="hidden" class="mtnPercentage" value="{{$data['mtnPercentage']}}" />
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
                            <div class="col-xl-6">
                                <div class="overview-col">
                                    <p><span class="selectedDate">{{$data['date']}}</span></p>
                                    <h2>Total Active Users</h2>
                                    <div class="box-data">
                                        <h3><span style="color: #3590f3; font-weight: 600;font-size: 30px;line-height: 54px;margin-bottom: 0;" class="usersOnDate">{{$data['usersOnDate']}}</span> <span class="allUsers">/ {{$data['allUsers']}}</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="overview-col">
                                    <p><span class="selectedDate">{{$data['date']}}</span></p>
                                    <h2>Total Sales</h2>
                                    <div class="box-data">
                                        <h3  class="salesTotal">{{$data['sales']}} <span>USD</span></h3>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-12 chart-area">

                                <div class="overview-col px-0">
                                    <p class="pl-3"><span>{{$data['date']}}</span></p>
                                    <h2 class="pl-3">Total Topup</h2>
                                    <div class="pie-chart-main ">

                                        <div id="chart" class="d-flex justify-content-center">


                                        </div>
                                        {{-- <div class="chart-inner">5,000.01<br>AFN</div> --}}
                                        <ul class="pl-3 pl-xl-1 chart-list">
                                            <li>
                                                <div class="color-box" style="background: #775DD0"></div>
                                                <span>Roshan</span>
                                            </li>
                                            <li>
                                                <div class="color-box" style="background: #008FFB"></div>
                                                <span>Etisalat</span>
                                            </li>
                                            <li>
                                                <div class="color-box" style="background: #00E396"></div>
                                                <span>Salaam</span>
                                            </li>
                                            <li>
                                                <div class="color-box" style="background: #DA3B52"></div>
                                                <span>AWCC</span>
                                            </li>
                                            <li>
                                                <div class="color-box" style="background: #FEB019"></div>
                                                <span>Afghan Telecom</span>
                                            </li>
                                            <li>
                                                <div class="color-box" style="background: #FEB399"></div>
                                                <span>MTN</span>
                                            </li>
                                         

                                        </ul>
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
                        <!-- ============== Date Carousel ============== -->
                        <div class="date-carousel">
                            <div style="overflow:hidden;">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="pickyDate"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- ============== Refund Box ============== -->
                        <div class="refund-req-box">
                            <h2>Refund Request</h2>
                            <div class="refund-slider">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
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

            <div class="transection-tble-main">
                <!-- Latest Transactions -->
                <div class="latest-transection-sec">
                    <h2>Latest Transactions</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="setting-card-body-inner Flipped" style="overflow-x:auto;">
                                <div class="form-group" style="margin-bottom: 0;">
                                    <!-- Show Numbers Of Rows -->
                                    <select class="form-control d-none" name="state" id="maxRows">
                                        <option value="5000">Show ALL Rows</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="70">70</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <table id="table-id" style="width: 1370px;">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Date & Time</th>
                                            <th>Sender</th>
                                            <th>Network:</th>
                                            <th>Receiver Phone Number</th>
                                            <th>Topup Amount:</th>
                                            <th>Topup amount in USD</th>
                                            <th>Stripe fee</th>
                                            <th>Total Payment in USD</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['latestTransaction'] as $transaction)
                                            <tr>
                                                <td class="data">{{$transaction['id']}}</td>
                                                <td class="data">16 Aug 2022 12:00PM</td>
                                                <td class="data">{{$transaction['user']['name']}}</td>
                                                <td class="data">
                                                    <img src="{{$transaction['networkImage']}}" alt="pangol">
                                                </td>
                                                <td class="data">{{$transaction['receiver_number']}}</td>
                                                <td class="data">{{$transaction['topup_amount']}}</td>
                                                <td class="data">{{$transaction['topup_amount_usd']}}</td>
                                                <td class="data">{{$transaction['processing_fee']}}</td>
                                                <td class="data">{{$transaction['total_amount_usd']}}</td>
                                                @if($transaction['status'] == 0)
                                                <td class="data failed ">
                                                    Failure
                                                </td>
                                                @elseif($transaction['status'] == 1)
                                                <td class="data success">
                                                    Success
                                                </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Pagination -->
                <div class='pagination-container'>
                    <nav>
                        <ul class="pagination">
                            <li data-page="prev" id="next">
                                <span> <i class="fa fa-angle-left"></i> </span>
                            </li>
                            <!--	Here the JS Function Will Add the Rows -->
                            <li data-page="next" id="prev">
                                <span> <i class="fa fa-angle-right"></i> </span>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Pagination -->
            </div>

        </div>
    </div>
@endsection
@section('inserfooter')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


<!-- ================ Owl Carousel Cdn =================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.de.min.js"></script>
<script>
    var roshanPercentage = $(".roshanPercentage").val();
    var etisalatPercentage = $(".etisalatPercentage").val();
    var salaamPercentage = $(".salaamPercentage").val();
    var awccPercentage = $(".awccPercentage").val();
    var afghanTelecomPercentage = $(".afghanTelecomPercentage").val();
    var mtnPercentage = $(".mtnPercentage").val();

    var dataGraph = [
        parseInt(roshanPercentage),
        parseInt(etisalatPercentage),
        parseInt(salaamPercentage),
        parseInt(awccPercentage),
        parseInt(afghanTelecomPercentage),
        parseInt(mtnPercentage),
    ];
</script>
<script>
    $token = @json($token);
        var options = {
            tooltip: {
                
            },

            grid: {
                show: false,
                padding: {
                    left: 0,
                    right: 0
                }
            },
            dataLabels: {
                enabled: true,
                
                style: {
                    fontSize: "8px",
                }
            },
            series: [44, 55, 41, 17, 15],
            chart: {
                type: 'donut',
                width: '100%',
                height: 250,

            },
            plotOptions: {
    pie: {
      donut: {
        labels: {
          show:true,
           name: {
          show: true,
          fontSize: '22px',
          fontFamily: 'Rubik',
          color: '#F89822',
          offsetY: 20
        },
        total: {
          show: true,
          label: 'AFN',
          fontSize: '20px',
          color: '#F89822',
          formatter: function (w) {
            return w=9000.01;
          }
        },
        value: {
          show: true,
          fontSize: '20px',
          label: 'AFN',
          fontFamily: 'Helvetica, Arial, sans-serif',
          color: '#F89822',
          offsetY: -20,
          formatter: function (val) {
            return val
          }
        },
       
        }
      }
    }
  },
            responsive: [{
                breakpoint: 1199,
                options: {
                    chart: {
                        width: '100%',
                        height: 220,
                    },
                    // legend: {
                    // position: 'bottom'
                    // }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        $('#pickyDate').datepicker({
    format: "yyyy/mm/dd",
    todayBtn: "linked",
    language: "en",
    daysOfWeekHighlighted: "4",
    todayHighlight: true,
    }).on('changeDate', showTestDate);

    function showTestDate(){
        chart.destroy();
        var value = $('#pickyDate').datepicker('getFormattedDate');
        $(document).ready(function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        // Ajax call 
        // var route = "{{route('dashboard-details')}}"
        $.ajax({
            url: 'http://kodextech.net/amin-topup/public/api/dashboard',
            type: 'POST',
            headers: {"Authorization": $token},
            dataType: 'json', // added data type
            data: {
                date: value
            },
            success: function(response) {
                $(".selectedDate").text(response.data.date);
                $(".usersOnDate").text(response.data.usersOnDate);
                $(".salesTotal").text(response.data.sales);
                $(".salesAfn").text(response.data.salesAfn + " AFN");
                $(".roshanPercentage").val(response.data.roshanPercentage);
                $(".etisalatPercentage").val(response.data.etisalatPercentage);
                $(".salaamPercentage").val(response.data.salaamPercentage);
                $(".awccPercentage").val(response.data.awccPercentage);
                $(".afghanTelecomPercentage").val(response.data.afghanTelecomPercentage);
                $(".mtnPercentage").val(response.data.mtnPercentage);
                var roshanPercentage = $(".roshanPercentage").val();
                var etisalatPercentage = $(".etisalatPercentage").val();
                var salaamPercentage = $(".salaamPercentage").val();
                var awccPercentage = $(".awccPercentage").val();
                var afghanTelecomPercentage = $(".afghanTelecomPercentage").val();
                var mtnPercentage = $(".mtnPercentage").val();
                
                var dataGraph = [
                    parseInt(etisalatPercentage),
                    parseInt(salaamPercentage),
                    parseInt(awccPercentage),
                    parseInt(afghanTelecomPercentage),
                    parseInt(mtnPercentage),
                    parseInt(roshanPercentage),
                ];

                 var options = {
            tooltip: {
                
            },

            grid: {
                show: false,
                padding: {
                    left: 0,
                    right: 0
                }
            },
            dataLabels: {
                enabled: true,
                
                style: {
                    fontSize: "8px",
                }
            },
            series: dataGraph,
            chart: {
                type: 'donut',
                width: '100%',
                height: 250,

            },
            plotOptions: {
    pie: {
      donut: {
        labels: {
          show:true,
           name: {
          show: true,
          fontSize: '22px',
          fontFamily: 'Rubik',
          color: '#F89822',
          offsetY: 20
        },
        total: {
          show: true,
          label: 'AFN',
          fontSize: '20px',
          color: '#F89822',
          formatter: function (w) {
            return w=9000.01;
          }
        },
        value: {
          show: true,
          fontSize: '20px',
          label: 'AFN',
          fontFamily: 'Helvetica, Arial, sans-serif',
          color: '#F89822',
          offsetY: -20,
          formatter: function (val) {
            return val
          }
        },
       
        }
      }
    }
  },
            responsive: [{
                breakpoint: 1199,
                options: {
                    chart: {
                        width: '100%',
                        height: 220,
                    },
                    // legend: {
                    // position: 'bottom'
                    // }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
            }
        });
    }
        
</script>
<!-- <script>
        var options = {
            tooltip: {
                
            },

            grid: {
                show: false,
                padding: {
                    left: 0,
                    right: 0
                }
            },
            dataLabels: {
                enabled: true,
                
                style: {
                    fontSize: "8px",
                }
            },
            series: [44, 55, 41, 17, 15],
            chart: {
                type: 'donut',
                width: '100%',
                height: 250,

            },
            plotOptions: {
    pie: {
      donut: {
        labels: {
          show:true,
           name: {
          show: true,
          fontSize: '22px',
          fontFamily: 'Rubik',
          color: '#F89822',
          offsetY: 20
        },
        total: {
          show: true,
          label: 'AFN',
          fontSize: '20px',
          color: '#F89822',
          formatter: function (w) {
            return w=9000.01;
          }
        },
        value: {
          show: true,
          fontSize: '20px',
          label: 'AFN',
          fontFamily: 'Helvetica, Arial, sans-serif',
          color: '#F89822',
          offsetY: -20,
          formatter: function (val) {
            return val
          }
        },
       
        }
      }
    }
  },
            responsive: [{
                breakpoint: 1199,
                options: {
                    chart: {
                        width: '100%',
                        height: 220,
                    },
                    // legend: {
                    // position: 'bottom'
                    // }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
<script> -->
    
</script>


    <script>
        getPagination('#table-id');

        function getPagination(table) {
            var lastPage = 1;

            $('#maxRows')
                .on('change', function(evt) {
                    //$('.paginationprev').html('');						// reset pagination

                    lastPage = 1;
                    $('.pagination')
                        .find('li')
                        .slice(1, -1)
                        .remove();
                    var trnum = 0; // reset tr counter
                    var maxRows = parseInt($(this).val()); // get Max Rows from select option

                    if (maxRows == 5000) {
                        $('.pagination').hide();
                    } else {
                        $('.pagination').show();
                    }

                    var totalRows = $(table + ' tbody tr').length; // numbers of rows
                    $(table + ' tr:gt(0)').each(function() {
                        // each TR in  table and not the header
                        trnum++; // Start Counter
                        if (trnum > maxRows) {
                            // if tr number gt maxRows

                            $(this).hide(); // fade it out
                        }
                        if (trnum <= maxRows) {
                            $(this).show();
                        } // else fade in Important in case if it ..
                    }); //  was fade out to fade it in
                    if (totalRows > maxRows) {
                        // if tr total rows gt max rows option
                        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                        //	numbers of pages
                        for (var i = 1; i <= pagenum;) {
                            // for each page append pagination li
                            $('.pagination #prev')
                                .before(
                                    '<li data-page="' + i + '">\
                                            <span>' +
                                    i++ +
                                    '<span class="sr-only">(current)</span></span>\
                                            </li>'
                                )
                                .show();
                        } // end for i
                    } // end if row count > max rows
                    $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
                    $('.pagination li').on('click', function(evt) {
                        // on click each page
                        evt.stopImmediatePropagation();
                        evt.preventDefault();
                        var pageNum = $(this).attr('data-page'); // get it's number

                        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

                        if (pageNum == 'prev') {
                            if (lastPage == 1) {
                                return;
                            }
                            pageNum = --lastPage;
                        }
                        if (pageNum == 'next') {
                            if (lastPage == $('.pagination li').length - 2) {
                                return;
                            }
                            pageNum = ++lastPage;
                        }

                        lastPage = pageNum;
                        var trIndex = 0; // reset tr counter
                        $('.pagination li').removeClass('active'); // remove active class from all li
                        $('.pagination [data-page="' + lastPage + '"]').addClass(
                        'active'); // add active class to the clicked
                        // $(this).addClass('active');					// add active class to the clicked
                        limitPagging();
                        $(table + ' tr:gt(0)').each(function() {
                            // each tr in table not the header
                            trIndex++; // tr index counter
                            // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                            if (
                                trIndex > maxRows * pageNum ||
                                trIndex <= maxRows * pageNum - maxRows
                            ) {
                                $(this).hide();
                            } else {
                                $(this).show();
                            } //else fade in
                        }); // end of for each tr in table
                    }); // end of on click pagination list
                    limitPagging();
                })
                .val(10)
                .change();

            // end of on select change

            // END OF PAGINATION
        }

        function limitPagging() {
            // alert($('.pagination li').length)

            if ($('.pagination li').length > 7) {
                if ($('.pagination li.active').attr('data-page') <= 3) {
                    $('.pagination li:gt(5)').hide();
                    $('.pagination li:lt(5)').show();
                    $('.pagination [data-page="next"]').show();
                }
                if ($('.pagination li.active').attr('data-page') > 3) {
                    $('.pagination li:gt(0)').hide();
                    $('.pagination [data-page="next"]').show();
                    for (let i = (parseInt($('.pagination li.active').attr('data-page')) - 2); i <= (parseInt($(
                            '.pagination li.active').attr('data-page')) + 2); i++) {
                        $('.pagination [data-page="' + i + '"]').show();

                    }

                }
            }
        }

        // $(function() {
        //     // Just to append id number for each row
        //     $('table tr:eq(0)').prepend('<th> ID </th>');

        //     var id = 0;

        //     $('table tr:gt(0)').each(function() {
        //         id++;
        //         $(this).prepend('<td>' + id + '</td>');
        //     });
        // });
    </script>

    <script>
        $(document).ready(function() {
            $("#next span").click(function() {
                $('#next').addClass('active');
            });
            $("#prev span").click(function() {
                $('#prev').addClass('active');
            });

        });
    </script>

    <script>
        $(function() {
            // Owl Carousel
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items: 1,
                margin: 10,
                loop: true,
                nav: true
            });
        });
    </script>

    <script>
        $('.sidebar-menu ul li:nth-of-type(1)').addClass('active');
        
    </script>

@endsection
