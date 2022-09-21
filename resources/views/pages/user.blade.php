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

    @media screen and (min-width:1700px) {
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
            <h1>All User</h1>
        </div>
        <div class="row">
            <div class="  col-xl-9">
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
                                                <th>Device</th>
                                                <th>Country</th>
                                                <th>Phone Number</th>
                                                <th>Last Purchase</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody class="userTable">
                                            @foreach($data as $post)
                                            <tr >
                                                <input type="hidden" class="id" value="{{$post['id']}}">
                                                @if(!empty($post['name']))
                                                <td class="data name">{{$post['name']}}</td>
                                                @else
                                                <td class="data name">Not Set</td>
                                                @endif

                                                @if(!empty($post['email']))
                                                <td class="data email">{{$post['email']}}</td>
                                                @else
                                                <td class="data email">Not Set</td>
                                                @endif

                                                @if(!empty($post['users_device']))
                                                <td class="data">{{$post['users_device']}}</td>
                                                @else
                                                <td class="data">N/A</td>
                                                @endif

                                                @if(!empty($post['country']))
                                                <td class="data country">{{$post['country']}}</td>
                                                @else
                                                <td class="data country">Not Set</td>
                                                @endif

                                                @if(!empty($post['phone_number']))
                                                <td class="data phone_number">{{$post['phone_number']}}</td>
                                                @else
                                                <td class="data phone_number">Not Set</td>
                                                @endif

                                                @if(isset($post['last_transaction']))
                                                <td class="data last_transaction"><span class="user-table-time">{{ $post['last_transaction'] }}</span></td>
                                                @else
                                                <td class="data last_transaction"><span class="user-table-time">No Trasaction</span></td>
                                                @endif

                                                @if(!empty($post['transaction']['total_amount_usd']))
                                                <input class="total_amount_usd" type="hidden" value="{{ $post['transaction']['total_amount_usd'] }}">
                                                @else
                                                <input class="total_amount_usd" type="hidden" value="No Trasaction">
                                                @endif

                                                @if(!empty($post['transaction']['date_of_birth']))
                                                <input class="date_of_birth " type="hidden" value="{{ $post['transaction']['date_of_birth'] }}">
                                                @else
                                                <input class="date_of_birth " type="hidden" value="Not Set">
                                                @endif

                                                <td class="data">
                                                    <img class="getuserdata" src="{{ asset('assets/images/action-icon.svg') }}" alt="pangol" data-toggle="modal" data-target="#basicsubsModal" style="cursor: pointer">
                                                </td>
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
            <div class=" col-xl-3 pb-5">
                <div class="user-filter px-3 py-2">
                    <div class="user-filter-header py-3">
                        <h1>Filter</h1>
                    </div>
                    <div class="user-filter-form">
                        <form id="userFilterForm" method="POST" enctype="multipart/form-data">
                            @csrf
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
                                <input type="text" class="form-control" name="phone_number" id="userphonenumber" placeholder="Type Here.." name="phone_number">

                            </div>
                            <div class="form-group">
                                <label for="lpurchase">Last Purchase</label>
                                <input type="text" class="form-control" id="lpurchase" placeholder="Type Here.." name="date">

                            </div>

                            <div class="text-center py-3">
                                <button type="submit" name="submit">Search</button>
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
            <div class="modal-body px-4" id="content">
                <div class="user-modal-header py-3">
                    <h1>User Details</h1>
                </div>
                <input type="hidden" id="id">
                <div class="user-modal-content d-flex justify-content-between">
                    <p>User</p>
                    <p id="name_id">Muhammad Ali</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Email</p>
                    <p id="email_id">aliahmed666@gmail.com</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Date of Birth</p>
                    <p id="date_of_birth_id">12/16/1994</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Country</p>
                    <p id="country_id">Afghanistan</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Phone Number</p>
                    <p id="phone_number_id">+93 700 00 00 000</p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Last Purchase</p>
                    <p id="last_transaction_id">08/22/2022 <span class="user-modal-time">10:00 pm</span></p>
                </div>
                <div class="user-modal-content d-flex justify-content-between">
                    <p>Total Purchase</p>
                    <p id="total_amount_usd_id">500 USD</p>
                </div>

                <div class="user-modal-button d-flex justify-content-center">
                    <button class="mr-1">Print</button>
                    <button class="ml-1" id="download">Download</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('inserfooter')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<!-- PrintThis CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script>
<script>
    // import FileSaver from 'file-saver';
    var token = @json($token);
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
        var username = $("#username").val();
        var email = $("#email").val();
        var country = $("#country").val();
        var userphonenumber = $("#userphonenumber").val();
        var lpurchase = $("#lpurchase").val();
        var parameter = {
            name: username,
            email: email,
            country: country,
            date: lpurchase,
            phone_number: userphonenumber
        };
        let formData = JSON.stringify(parameter);
        // Ajax call 
        $.ajax({
            url: 'http://kodextech.net/amin-topup/api/users',
            dataType: 'json',
            type: 'POST',
            data: formData,
            headers: {
                'Authorization': 'Bearer ' + token,
                'Content-Type': 'application/json'
            },
            success: function(response) {
                let arr = [];

                response.data.users.forEach(element => {
                    arr.push(element);
                });
                $(".userTable").empty();
                console.log(arr);
                $(response.data.users).each(function(i, e) {

                    let div = `<tr>
                                <td class="data name">${e.name}</td>
                                <td class="data email">${e.email}</td>
                                <td class="data">${e.users_device}</td>
                                <td class="data country">${e.country}</td>
                                <td class="data phone_number">${e.phone_number}</td>
                                <td class="data last_transaction">${e.last_transaction}</td>`;
                    if (e.transaction != undefined && e.transaction != '')
                        div = div + `<input class="total_amount_usd" type="hidden" value="${e.transaction['total_amount_usd']}">`;

                    div = div + `<input class="date_of_birth" type="hidden" value="${e.date_of_birth}">
                                <td class="data">
                                    <img class="getuserdata" src="{{ asset('assets/images/action-icon.svg') }}" alt="pangol" data-toggle="modal" data-target="#basicsubsModal" style="cursor: pointer">
                                </td>
                            </tr>`;
                    $(".userTable").append(div);
                    $('.getuserdata').click(function() {
                        var id = $(this).parent().parent().find('.id').val();
                        var name = $(this).parent().parent().find('.name').text();
                        var email = $(this).parent().parent().find('.email').text();
                        var country = $(this).parent().parent().find('.country').text();
                        var phone_number = $(this).parent().parent().find('.phone_number').text();
                        var last_transaction = $(this).parent().parent().find('.last_transaction').text();
                        var total_amount_usd = $(this).parent().parent().find('.total_amount_usd').val();
                        var date_of_birth = $(this).parent().parent().find('.date_of_birth').val();


                        $("#id").val(id);
                        $("#name_id").text(name);
                        $("#email_id").text(email);
                        $("#country_id").text(country);
                        $("#phone_number_id").text(phone_number);
                        $("#last_transaction_id").text(last_transaction);
                        $("#total_amount_usd_id").text(total_amount_usd);
                        $("#date_of_birth_id").text(date_of_birth);

                    });
                });
            }
        });
    });

    ///////......show user data in modal....//////
    $('.getuserdata').click(function() {
        var id = $(this).parent().parent().find('.id').val();
        var name = $(this).parent().parent().find('.name').text();
        var email = $(this).parent().parent().find('.email').text();
        var country = $(this).parent().parent().find('.country').text();
        var phone_number = $(this).parent().parent().find('.phone_number').text();
        var last_transaction = $(this).parent().parent().find('.last_transaction').text();
        var total_amount_usd = $(this).parent().parent().find('.total_amount_usd').val();
        var date_of_birth = $(this).parent().parent().find('.date_of_birth').val();


        $("#id").val(id);
        $("#name_id").html(name);
        $("#email_id").html(email);
        $("#country_id").html(country);
        $("#phone_number_id").html(phone_number);
        $("#last_transaction_id").html(last_transaction);
        $("#total_amount_usd_id").html(total_amount_usd);
        $("#date_of_birth_id").html(date_of_birth);

    });

    $("#download").click(function(e) {


        var name = $("#name_id").html();
        var email = $("#email_id").html();
        var country = $("#country_id").html();
        var phone_number = $("#phone_number_id").html();
        var last_transaction = $("#last_transaction_id").html();
        var total_amount_usd = $("#total_amount_usd_id").html();
        var date_of_birth = $("#date_of_birth_id").html();
        let data = {
            name: name,
            email: email,
            country: country,
            phone_number: phone_number,
            last_transaction: last_transaction,
            total_amount_usd: total_amount_usd,
            date_of_birth: date_of_birth
        }

        console.log(name);
        var doc = new jsPDF();
        // doc.addPage();
        doc.setFontSize(22);
        doc.setTextColor(248, 152, 34);
        doc.text(75, 20, 'User Details');
        doc.setTextColor(33, 19, 13);

        doc.setFontSize(16);
        doc.text(20, 40, 'User ');
        doc.text(150, 40, name);

        doc.text(20, 50, 'Email ');
        doc.text(150, 50, email);

        doc.text(20, 60, 'Date of Birth ');
        doc.text(150, 60, date_of_birth);

        doc.text(20, 70, 'Country');
        doc.text(150, 70, country);

        doc.text(20, 80, 'Phone Number');
        doc.text(150, 80, phone_number);

        doc.text(20, 90, 'Last Purchase');
        doc.text(150, 90, last_transaction);

        doc.text(20, 100, 'Total Purchase');
        doc.text(150, 100, total_amount_usd);

        doc.save('user.pdf');

    });
</script>
@endsection