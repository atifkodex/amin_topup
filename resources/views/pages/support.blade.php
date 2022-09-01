@extends('layouts.admin-default')

@section('content')
@include('includes.admin-navbar')
<div class="right-sidebar">
    <div class="container-fluid">
        <div class="setting-heading pl-4">
            <h1>Support</h1>
        </div>
        <div class="row">
            <div class="col-4 col-xl-3 support-card-outer-main ">
                <div class="">
                    @foreach($data as $post)
                    <div class="support-card-outer px-1 py-2 getuserdata">
                        <!-- <input type="hidden" name="spec_id" id="spec_id" value="{{$post['id']}}"> -->

                        <div class="support-card pl-3 py-3 my-3">
                            <div class="support-card-header d-flex align-items-center">
                                <div class="image-outer">
                                    @if(!empty($post['user']['profile']))
                                    <img src="{{$post['user']['profile']}}" alt="image">
                                    @else
                                    <img src="{{asset('assets/images/profile-image.jpg')}}" alt="image">
                                    @endif
                                </div>
                                <h1 class="pl-3 pt-2"> {{$post['user']['name']}}</h1>
                            </div>
                            <div class="support-card-body pt-2">
                                <p>Subject</p>
                                <h1 class="subject">{{$post['subject']}}</h1>
                                <p>Category</p>
                                <h1 class="category">{{$post['category']}}</h1>
                                <p class="pb-1">Description</p>
                                <p class="description">{{$post['description']}}</p>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>


            </div>

            <div class="col-8 col-xl-9 support-description-outer">
                <div class="support-description">
                    <div class="support-description-header py-3 px-4">
                        <h1>Description</h1>
                    </div>
                    <div class="support-description-cat py-3 px-4 d-flex align-items-center">
                        <p>Category:</p>
                        <div>
                            <p id="category_id">General</p>
                        </div>
                    </div>
                    <div class="support-description-cat support-description-sub py-3 px-4 d-flex  align-items-center">
                        <p>Subject:</p>

                        <div>
                            <p id="subject_id">Any Problem</p>
                        </div>

                    </div>
                    <div class="support-description-section pt-5 px-4" id="description_id">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolorem dolor autem optio hic, eaque magni libero aspernatur porro natus deserunt! Adipisci incidunt aperiam voluptate temporibus necessitatibus explicabo assumenda aliquid?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolorem dolor autem optio hic, eaque magni libero aspernatur porro natus deserunt! Adipisci incidunt aperiam voluptate temporibus necessitatibus explicabo assumenda aliquid?
                    </div>

                    <div class="support-description-button py-5 px-4 text-right">
                        <button>Resolved</button>
                        <button>Archived</button>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>

@endsection
@section('inserfooter')
<script>
    $('.sidebar-menu ul li:nth-of-type(5)').addClass('active');
</script>
<!-- show data click to card -->
<script>
    $('.getuserdata').click(function() {
        var subject = $(this).find('.subject').text();
        var category = $(this).find('.category').text();
        var description = $(this).find('.description').text();

        $("#category_id").html(category);
        $("#subject_id").html(subject);
        $("#description_id").html(description);
    });
</script>
@endsection