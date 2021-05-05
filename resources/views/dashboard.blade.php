@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('bar')
    @include('inc.sidebar')
    @include('inc.chatBar')
@endsection

@section('content')

    <!--Start Container-->
    <div class="container-fluid ">
        <!--Start Row-->
        <div class="row  " >
            <div class="col-md-5 mt-3 offset-md-2  ">

                <div class="bg-white content p-4 round">

                    <!--Write Post-->
                    <div class=" border-bottom  ">
                        <p class="font-weight-bold">Post Someething</p>
                    </div>
                    <button class="write" id="post">
                        <div class="p-2 mt-2 ">
                            <img class="rounded-circle" src="{{ $user->profile_image }}">
                            <span class="text-secondary"> What's on your mind?</span>
                        </div>
                    </button>

                </div>
                <!--End Write Post-->


                <!--Posts-->
                <div class="cont">

                    @foreach ($posts as $post)

                        <div class="mt-4 bg-white p-4 round" data-postid="{{ $post->id }}">
                            <div style="position: relative">
                                <img class="rounded-circle" src="{{ $post->user->profile_image }}">
                                <div class="p-1" style="position: relative; display: inline-block;">
                                    <p class="font-weight-bold name">{{ ucfirst($post->user->first_name) }}
                                        {{ ucfirst($post->user->last_name) }}</p>
                                </div>
                                <small class="date ml-4">{{ $post->created_at }}</small>
                                <div class="dropdown">
                                    <a class="dots " href="#" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">

                                        <i class="fas fa-ellipsis-h text-secondary "></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @if (Auth::user() == $post->user)
                                            <a class="dropdown-item " href="#" id="edit-sec">Edit</a>
                                            <a class="dropdown-item" href="{{ route('posts.de', $post->id) }}">Delete</a>
                                        @endif
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>

                                </div>
                            </div>
                            <p class="mt-4">{{ $post->body }}</p>
                            {{-- <img class="round img-responsive img-fluid" src="{{$post->cover_image}}" alt="Card image cap"  > --}}
                            <a href="javascript:void(0)" class="ui-rect ui-bg-cover round"
                                style="background-image: url('{{ $post->cover_image }}');"></a>
                            <div class="timeline-likes">
                                <div class="stats-right">
                                    <span class="stats-text">259 Shares</span>
                                    <a href="#" id="comm"
                                        class="stats-text"><span>{{ count($post->comments) > 0 ? toK(count($post->comments)) : null }}</span>
                                        <span>{{ count($post->comments) > 0 ? (count($post->comments) == 1 ? 'Comment' : 'Comments') : null }}</a>
                                </div>
                                <div class="stats mt-2">
                                    {{-- <span class="fa-stack fa-fw stats-icon">
              <i class="fa fa-circle fa-stack-2x text-danger"></i>
              <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
          </span> --}}
                                    <a>
                                        <span
                                            class="stats-total">{{ count($post->likes) > 0 ? tok(count($post->likes)) : null }}</span>
                                    </a>
                                    @if (count($post->likes))
                                        <span class="fa-stack fa-fw stats-icon">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="timeline-footer">
                                @auth

                                    <a id="like" href="javascript:;"
                                        class="m-r-15 text-inverse-lighter {{ Auth::user()->likes()->where('post_id', $post->id)->first()
    ? (Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1
        ? 'text-primary'
        : null)
    : null }}"><i
                                            class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                @endauth
                                <a id="comm2" href="/" class="m-r-15 text-inverse-lighter"><i
                                        class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i
                                        class="fa fa-share fa-fw fa-lg m-r-3"></i>
                                    Share</a>
                            </div>
                            <div class="input mt-3">
                                <form id="comment-form">
                                    <div class="input-group">
                                        <textarea class="form-control rounded-corner" placeholder="Write a comment..."
                                            name="comment"></textarea>
                                        <span class="input-group-btn p-l-10">
                                            <button class="btn btn-primary f-s-12 rounded-corner"
                                                type="submit">Comment</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="row mt-2 hide">

                                @foreach ($post->comments as $comment)
                                    <div class="col-1 mr-2 my-2">

                                        <img class=" rounded-circle" src="https://picsum.photos/46/46">
                                    </div>
                                    <div class="col-10 bg-light round my-2  ">
                                        <p class="font-weight-bold ">{{ ucfirst($comment->user->first_name) }}
                                            {{ ucfirst($comment->user->last_name) }} </p>
                                        <p>{{ $comment->comment }}</p>
                                        <small class="text-muted">{{ time_elapsed_string($comment->created_at) }}</small>
                                        <time class="text-muted" id="tmm" datetime="{{ $comment->created_at }}"></time>
                                    </div>

                                @endforeach
                            </div>
                        </div>


                    @endforeach
                </div>
                <!--End Post-->

            </div>
            <!--Stories-->
            <div class="col-3 mt-3 d-md-block d-none">
                <div class="round2 bg-white p-4">
                    <div class=" border-bottom mb-2  ">
                        <p class="font-weight-bold">Stories</p>
                    </div>

                    <div class="mb-4">
                        <i class="fas fa-plus fa-1x rounded-circle text-primary  p-3 shadow-sm"></i>
                        <div class="p-1" style="position: relative; display: inline-block;">
                            <p class="font-weight-bold name">Muhab Sherif</p>
                            <small class="date">12-10-2010</small>
                        </div>
                    </div>
                    <div class="mb-4">
                        <img class="rounded-circle" src="https://picsum.photos/36/36">
                        <div class="p-1" style="position: relative; display: inline-block;">
                            <p class="font-weight-bold name">Muhab Sherif</p>
                            <small class="date">12-10-2010</small>
                        </div>
                    </div>
                    <div class="mb-4">
                        <img class="rounded-circle" src="https://picsum.photos/36/36">
                        <div class="p-1" style="position: relative; display: inline-block;">
                            <p class="font-weight-bold name">Muhab Sherif</p>
                            <small class="date">12-10-2010</small>
                        </div>
                    </div>
                    <div class="mb-4">
                        <img class="rounded-circle" src="https://picsum.photos/36/36">
                        <div class="p-1" style="position: relative; display: inline-block;">
                            <p class="font-weight-bold name">Muhab Sherif</p>
                            <small class="date">12-10-2010</small>
                        </div>
                    </div>
                </div>
                <button class="blue-chick">
                    <span class="text-primary">SEE ALL</span>
                </button>
                <div class="bg-white mt-4 p-3">
                    <div class=" border-bottom  ">
                        <p class="font-weight-bold">Events</p>
                    </div>
                    <div class="mt-3">

                        <i class="fas fa-calendar-week text-secondary pr-4"> 10 Events</i>
                    </div>
                </div>
            </div>
            <!--End Stories-->
        </div>
        <!--End Row-->
    </div>
    <!--End Container-->
    @include('inc.commentModel')
    @include('inc.postModel')
    @include('inc.editModel')
@endsection
