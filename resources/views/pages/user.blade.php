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

    .user-modal-time {
        color: #666666;
        font-size: 12px;
    }

    #table-id tbody tr td {
        background: #f1efef;

    }
</style>
@section('content')
@include('includes.admin-navbar')
<div class="right-sidebar">
    <div class="container-fluid">
        <div class="setting-heading pl-4">
            <h1>User</h1>
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

                                    <table id="table-id" class="mr-3 mb-3" style="width: 1100px">

                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Email</th>
                                                <th>Country</th>
                                                <th>Phone Number</th>
                                                <th>Last Purchase</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $post)
                                            <div class="newData">
                                                <tr>
                                                    @if(!empty($post['name']))
                                                    <td class="data">{{$post['name']}}</td>
                                                    @else
                                                    <td class="data">Not Set</td>
                                                    @endif

                                                    @if(!empty($post['email']))
                                                    <td class="data">{{$post['email']}}</td>
                                                    @else
                                                    <td class="data">Not Set</td>
                                                    @endif

                                                    @if(!empty($post['country']))
                                                    <td class="data">{{$post['country']}}</td>
                                                    @else
                                                    <td class="data">Not Set</td>
                                                    @endif

                                                    @if(!empty($post['phone_number']))
                                                    <td class="data">{{$post['phone_number']}}</td>
                                                    @else
                                                    <td class="data">Not Set</td>
                                                    @endif

                                                    @if(isset($post['last_transaction']))
                                                    <td class="data"><span class="user-table-time">{{ $post['last_transaction'] }}</span></td>
                                                    @else
                                                    <td class="data"><span class="user-table-time">No Trasaction</span></td>
                                                    @endif

                                                    <td class="data">
                                                        <img src="{{ asset('assets/images/action-icon.svg') }}" alt="pangol" data-toggle="modal" data-target="#basicsubsModal" style="cursor: pointer">
                                                    </td>

                                                </tr>
                                            </div>

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
            <div class="col-lg-4 col-xl-3 pb-5">
                <div class="user-filter px-3 py-2">
                    <div class="user-filter-header py-3">
                        <h1>Filter</h1>
                    </div>
                    <div class="user-filter-form">
                        <form method="get" id="userFilterForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" class="form-control" id="username" placeholder="Type Here.." name="name">

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Type Here.." name="email">

                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" placeholder="Type Here.." name="country">

                            </div>
                            <div class="form-group">
                                <label for="userphonenumber">User Phone Number</label>
                                <input type="text" class="form-control" id="userphonenumber" placeholder="Type Here.." name="phone_number">

                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" id="date" placeholder="Type Here.." name="">

                            </div>

                            <div class="text-center py-3">
                                <button class="submit" type="submit" name="submit">Search</button>
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
                    <h1>User Details</h1>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>User</p>
                    <p id="name">Muhammad Ali</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Email</p>
                    <p id="email">aliahmed666@gmail.com</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Date of Birth</p>
                    <p>12/16/1994</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Country</p>
                    <p>Afghanistan</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Phone Number</p>
                    <p>+93 700 00 00 000</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Last Purchase</p>
                    <p>08/22/2022 <span class="user-modal-time">10:00 pm</span></p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Total Purchase</p>
                    <p>500 USD</p>
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
                for (let i = (parseInt($('.pagination li.active').attr('data-page')) - 2); i <= (parseInt($('.pagination li.active').attr('data-page')) + 2); i++) {
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
    $('.sidebar-menu ul li:nth-of-type(2)').addClass('active');
</script>

<script>
    $("#userFilterForm").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        // let route = '{{url("transaction_list")}}';
        // Ajax call 
        $.ajax({
            url: 'http://kodextech.net/amin-topup/public/api/admin/users',
            type: 'GET',
            dataType: 'json',
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
                                    <td class="data">${e.name}</td>
                                    <td class="data">${e.email}</td>
                                    <td class="data">${e.country}</td>
                                    <td class="data">${e.phone_number}</td>
                                    <td class="data">${e.topup_amount_usd}</td>
                                    <td class="data">${e.processing_fee}</td>
                                    <td class="data">${e.total_amount_usd}</td>
                                    <td class="data">${e.status}</td>
                                    <td class="data">
                                        <img src="{{ asset('assets/images/action-icon.svg') }}" alt="pangol"
                                            data-toggle="modal" data-target="#basicsubsModal"
                                            style="cursor: pointer">
                                    </td>
                                </tr>`;
                    $(".newData").append(div);
                });
            }
        });
    });
</script>
@endsection