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
 
      <div class="transection-tble-main">
        <!-- Latest Transactions -->
        <div class="latest-transection-sec">
            <h2>Latest Transactions</h2>
            <div class="row">
            <div class="col-12">
            <div class="setting-card-body-inner Flipped" style="overflow-x:auto;">   
                <div class="form-group"> 	
                    <!-- Show Numbers Of Rows -->
                    <select class  ="form-control" name="state" id="maxRows">
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
                    <table id="table-id">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
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
                            <tr>
                                <td class="data">#213652</td>
                                <td class="data">Muhammad Ali</td>
                                <td class="data">
                                    <img src="{{ asset('assets/images/pangol.svg') }}" alt="pangol">
                                </td>
                                <td class="data">+93 700 00 00 0000</td>
                                <td class="data">50</td>
                                <td class="data">1.30</td>
                                <td class="data">1.30</td>
                                <td class="data">USD</td>
                                <td class="data success">Success</td>
                            </tr>
                            <tr>
                                <td class="data">#213652</td>
                                <td class="data">Muhammad Ali</td>
                                <td class="data">
                                    <img src="{{ asset('assets/images/roshan-afghanistan.svg') }}" alt="roshan-afghanistan">
                                </td>
                                <td class="data">+93 700 00 00 0000</td>
                                <td class="data">50</td>
                                <td class="data">1.30</td>
                                <td class="data">1.30</td>
                                <td class="data">USD</td>
                                <td class="data success">Success</td>
                            </tr>
                            <tr>
                                <td class="data">#213652</td>
                                <td class="data">Muhammad Ali</td>
                                <td class="data">
                                    <img src="{{ asset('assets/images/etisalat.svg') }}" alt="etisalat">
                                </td>
                                <td class="data">+93 700 00 00 0000</td>
                                <td class="data">50</td>
                                <td class="data">1.30</td>
                                <td class="data">1.30</td>
                                <td class="data">USD</td>
                                <td class="data success">Success</td>
                            </tr>
                            <tr>
                                <td class="data">#213652</td>
                                <td class="data">Muhammad Ali</td>
                                <td class="data">
                                    <img src="{{ asset('assets/images/roshan-afghanistan.svg') }}" alt="roshan-afghanistan">
                                </td>
                                <td class="data">+93 700 00 00 0000</td>
                                <td class="data">50</td>
                                <td class="data">1.30</td>
                                <td class="data">1.30</td>
                                <td class="data">USD</td>
                                <td class="data failed">Failed</td>
                            </tr>
                            <tr>
                                <td class="data">#213652</td>
                                <td class="data">Muhammad Ali</td>
                                <td class="data">
                                    <img src="{{ asset('assets/images/pangol.svg') }}" alt="pangol">
                                </td>
                                <td class="data">+93 700 00 00 0000</td>
                                <td class="data">50</td>
                                <td class="data">1.30</td>
                                <td class="data">1.30</td>
                                <td class="data">USD</td>
                                <td class="data success">Success</td>
                            </tr>
                            <tr>
                                <td class="data">#213652</td>
                                <td class="data">Muhammad Ali</td>
                                <td class="data">
                                    <img src="{{ asset('assets/images/afghan_telecom.svg') }}" alt="afghan_telecom">
                                </td>
                                <td class="data">+93 700 00 00 0000</td>
                                <td class="data">50</td>
                                <td class="data">1.30</td>
                                <td class="data">1.30</td>
                                <td class="data">USD</td>
                                <td class="data success">Success</td>
                            </tr>
                            <tr>
                                <td class="data">#213652</td>
                                <td class="data">Muhammad Ali</td>
                                <td class="data">
                                    <img src="{{ asset('assets/images/roshan-afghanistan.svg') }}" alt="roshan-afghanistan">
                                </td>
                                <td class="data">+93 700 00 00 0000</td>
                                <td class="data">50</td>
                                <td class="data">1.30</td>
                                <td class="data">1.30</td>
                                <td class="data">USD</td>
                                <td class="data failed">Failed</td>
                            </tr>
                        </tbody>               
                    </table>
                </div>
            </div>
            </div>
        </div>
        <!-- Start Pagination -->
        <div class='pagination-container' >
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
                for (var i = 1; i <= pagenum; ) {
                // for each page append pagination li
                $('.pagination #prev')
                    .before(
                    '<li data-page="' +
                        i +
                        '">\
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
                $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
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
            .val(5)
            .change();

        // end of on select change

        // END OF PAGINATION
        }

        function limitPagging(){
            // alert($('.pagination li').length)

            if($('.pagination li').length > 7 ){
                    if( $('.pagination li.active').attr('data-page') <= 3 ){
                    $('.pagination li:gt(5)').hide();
                    $('.pagination li:lt(5)').show();
                    $('.pagination [data-page="next"]').show();
                }if ($('.pagination li.active').attr('data-page') > 3){
                    $('.pagination li:gt(0)').hide();
                    $('.pagination [data-page="next"]').show();
                    for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
                        $('.pagination [data-page="'+i+'"]').show();

                    }

                }
            }
        }

        $(function() {
            // Just to append id number for each row
            $('table tr:eq(0)').prepend('<th> ID </th>');

            var id = 0;

            $('table tr:gt(0)').each(function() {
                id++;
                $(this).prepend('<td>' + id + '</td>');
            });
        });

    </script>

    <script>
        $( document ).ready(function() {
            $("#next span").click(function(){
                $('#next').addClass('active');
            });
            $("#prev span").click(function(){
                $('#prev').addClass('active');
            });
        });
    </script>
@endsection