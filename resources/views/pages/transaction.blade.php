@extends('layouts.admin-default')
<style>
.user-select-row select {
    width: 80px;
    border: 1px solid #012245;
    font-size: 12px;
    color: #012245
}

.user-select-row select:active,
.user-select-row select:focus {
    outline: none;
    box-shadow: none;
    border: 1px solid #012245;
}

/* #table-id thead tr th:first-of-type,#table-id tbody tr td:first-of-type{
        display: none
    } */
.setting-card-body-inner {
    overflow-x: auto;
    height: 680px !important;
    overflow-y: hidden !important;
}

#table-id tbody tr td {
    background: #f1efef;

}

@media screen and (min-width:2100px) {
    #table-id {
        width: 100% !important;
    }
}
</style>
@section('content')
@include('includes.admin-navbar')
<div class="right-sidebar">
    <div class="container-fluid">
        <div class="setting-heading pl-4">
            <h1>All Transaction</h1>
        </div>
        <div class="row">
            <div class=" col-lg-8 col-xl-9">
                <div class="transection-tble-main">
                    <!-- Latest Transactions -->
                    <div class="latest-transection-sec mt-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="setting-card-body-inner Flipped">
                                    <div class="form-group user-select-row">
                                        <!-- Show Numbers Of Rows -->
                                        <select class="form-control d-none" name="state" id="maxRows">
                                            <option value="5000">ALL</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="70">70</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <table id="table-id" class="mr-3 mb-3" style="width: 1300px">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Sender Name</th>
                                                <th>Receiver Phone Number</th>
                                                <th>Network</th>
                                                <th>Topup Amount</th>
                                                <th>Topup Amount in USD</th>
                                                <th>Stripe Fee</th>
                                                <th>Total Payment in USD</th>
                                                <th>Status</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="data">#213652</td>
                                                <td class="data">Muhammad Ali</td>
                                                <td class="data">+93 700 00 00 0000</td>
                                                <td class="data">AWCC</td>
                                                <td class="data">6000.76</td>
                                                <td class="data">1.30</td>
                                                <td class="data">$ 3.0</td>
                                                <td class="data">$ 50</td>
                                                <td class="data success">Sucess</td>

                                                <td class="data">
                                                    <img src="{{ asset('assets/images/action-icon.svg') }}" alt="pangol"
                                                        data-toggle="modal" data-target="#basicsubsModal"
                                                        style="cursor: pointer">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="data">#213652</td>
                                                <td class="data">Muhammad Ali</td>
                                                <td class="data">+93 700 00 00 0000</td>
                                                <td class="data">AWCC</td>
                                                <td class="data">6000.76</td>
                                                <td class="data">1.30</td>
                                                <td class="data">$ 3.0</td>
                                                <td class="data">$ 50</td>
                                                <td class="data success">Sucess</td>
                                                <td class="data">
                                                    <img src="{{ asset('assets/images/action-icon.svg') }}" alt="pangol"
                                                        data-toggle="modal" data-target="#basicsubsModal"
                                                        style="cursor: pointer">
                                                </td>
                                            </tr>
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
            <div class="col-lg-4 col-xl-3 pb-5">
                <div class="user-filter px-3 py-2">
                    <div class="user-filter-header py-3">
                        <h1>Filter</h1>
                    </div>
                    <div class="user-filter-form">
                        <form>
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" class="form-control" id="username" placeholder="Type Here..">

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Type Here..">

                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" placeholder="Type Here..">

                            </div>
                            <div class="form-group">
                                <label for="userphonenumber">User Phone Number</label>
                                <input type="text" class="form-control" id="userphonenumber" placeholder="Type Here..">

                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" id="date" placeholder="Type Here..">

                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="text" class="form-control" id="time" placeholder="Type Here..">

                            </div>
                            <div class="text-center py-3">
                                <button>Search</button>
                            </div>

                        </form>
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
                    <h1>Transaction Details</h1>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Transaction ID</p>
                    <p>#313652</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>User</p>
                    <p>Muhammad Ali</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Reciever Phone Number</p>
                    <p>+93 700 00 00 000</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Network</p>
                    <p>AWCC</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Topup Amount</p>
                    <p>3.00.76</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Topup Amount in USD</p>
                    <p>1.30</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Strip Fee</p>
                    <p>$ 3.0</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Total Payment in USD</p>
                    <p>$ 50</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Status</p>
                    <p>Success</p>
                </div>
                <div class="user-modal-button d-flex justify-content-center">
                    <button class="mr-1">Print</button>
                    <button class="ml-1">Download</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('inserfooter')

<!-- Backend Script for Transaction Page - START  -->
<!-- PrintThis CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script>
<!-- Html To Canvas Scripts  -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
$("#transactionFilterForm").submit(function(e) {
    e.preventDefault();
    var form = $(this);
    // $(document).ready(function(e) {
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    //             "Content-Type": "application/x-www-form-urlencoded",
    //             'Authorization': 'Bearer ' + token,
    //         }
    //     });
    // });
    // Ajax call 
    $.ajax({
        url: 'http://kodextech.net/amin-topup/public/api/transactions',
        dataType: 'json',
        type: 'POST',
        data: form.serialize(),
        success: function(response) {
            let arr = [];
            response.data.forEach(element => {
                arr.push(element);
            });
            $(".newData").empty();
            $(arr).each(function(i, e) {
                console.log(i, e)
                let div = `<tr>
                                    <td class="data">${e.id}</td>
                                    <td class="data transactionId">${e.dateTime}</td>
                                    <td class="data senderName">${e.senderName}</td>
                                    <td class="data receiverNumber">${e.receiver_number}</td>
                                    <td class="data network">${e.receiver_network}</td>
                                    <td class="data topupAmount">${e.topup_amount}</td>
                                    <td class="data amountUsd">${e.topup_amount_usd}</td>
                                    <td class="data processingFee">${e.processing_fee}</td>
                                    <td class="data totalAmountUsd">${e.total_amount_usd}</td>
                                    <td class="data statusTransaction">${e.status}</td>
                                    <td class="data">
                                        <img src="{{ asset('assets/images/action-icon.svg') }}" alt="pangol"
                                            data-toggle="modal" data-target="#basicsubsModal"
                                            style="cursor: pointer" class="actionBtnTransaction">
                                    </td>
                                </tr>`;
                $(".newData").append(div);
            });
        }
    });
});

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
$('.sidebar-menu ul li:nth-of-type(3)').addClass('active');
</script>
@endsection