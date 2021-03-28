

@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
  

  <!-- Page Content -->


    <div class="row">
      <div class="col-md-4 mt-5">
      <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
          {{@csrf_field()}}
          <div class="form-group">

            <textarea class=" form-control" name="body" rows="2" ></textarea>
          </div>
          <div class="btn-group">

            <div class="custom-file col-8">
              <input type="file" class="custom-file-input" id="customFile" name="cover_image">
              <label class="custom-file-label " for="customFile" id="img-lab">Choose Image</label>
            </div>
            <button type="submit" class="btn btn-primary ml-2">Create Post</button>
          </div>

        </form>
        @include('inc.message')
      </div>

      <!-- Blog Entries Column -->
      <div class="col-md-4">

        <h1 class="my-4">Home
        </h1>

        <!-- Blog Post -->
        @foreach($posts as $post)
      
        <div class="card mb-4 a" data-postid="{{$post->id}}">
          <!--/storage/cover_images/-->
          <img class="card-img-top" src="{{$post->cover_image}}" alt="Card image cap" >
          <div class="card-body b">
          <p class="card-text">{{$post->body}}</p>
          <a href="#" id="like">
            @auth
            <i class="far  fa-heart  fa-2x {{Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id',$post->id)->first()->like == 1 ?'fa text-danger':'text-secondary':'text-secondary'}}" aria-hidden="true" id="heart"></i>
          </a>
          @endauth
        <a href="#" id="comm" class="text-secondary " ><span>{{count($post->comments)>0 ? count($post->comments):null}}</span> <span>{{ count($post->comments)>0 ? count($post->comments)==1 ? 'Comment': 'Comments':null }}</a>
          <div class="likes">
            <span id="likesNum">{{count($post->likes)>0 ? count($post->likes):null}}</span>
          <span>{{ count($post->likes)>0 ? count($post->likes)==1 ? 'Like': 'Likes':null }}</span>
          </div>
            <div class="button-group mt-3">
              @if(Auth::user()==$post->user)
            <a class="btn btn-warning " href="#" id="edit-sec" >Edit</a>
              <a class="btn btn-danger"  href="{{route('posts.de',$post->id)}}" >Delete</a>
              @endif
            </div>
            <form id="formCom" class="adf">
            <div class="form-group mt-3">
              <textarea class="form-control com" placeholder="Write Comment" name="comment"></textarea>
              <input type="submit" class="form-control-range mt-2">
            </div>
          </form>
        
          <div class="card-text " >
            <div class="modal fade" tabindex="-1" role="dialog" id="modee2">
              <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document" id="scr">
                <div class="modal-content">
                  <div class="modal-header ">
                  <h4 class="modal-title ">Comments</h4>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row" id="comPlace">
                        @foreach ($post->comments as $comment)
                        
                      <div class="col-12 card bg-light mb-2">
                        <h6>{{$comment->user->first_name}}</h6>
                        <p>{{$comment->comment}}</p>
                        {{-- <small class="text-muted">{{time_elapsed_string($comment->created_at)}}</small> --}}
                        <time class="text-muted" id="tmm" datetime="{{$comment->created_at}}"></time>
                      </div>  
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            
          </div>
          </div>
          <div class="card-footer text-muted">
            Posted by {{$post->user->first_name}} on {{$post->created_at}}
           
          </div>
        </div>
        @endforeach

        

        <!-- Pagination -->
        {{-- <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul> --}}
        {{$posts->links()}}

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        {{-- <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div> --}}

      </div>

    </div>
    <!-- /.row -->


  



<div class="modal fade" tabindex="-1" role="dialog" id="modee">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Post</h4>
      </div>
      <div class="modal-body">
        <form>
        {{-- <input type="hidden" name="_token" value="{{ Session::token() }}" id="tok"> --}}
          <div class="form-group">
            <label for="ta">Edit The Post</label>
            <textarea class=" form-control" name="body" rows="2" id="ta" style="resize:none;" ></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@endsection
  @section('footer')
      <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
      </div>
      <!-- /.container -->
    </footer> 
    <script>
      var urlEdit='{{route('edit') }}';
      var urlLike='{{route('like') }}';
      var urlCom='{{route('com') }}';
      var urlshow='{{route('showCom') }}';
      var token='{{Session::token() }}';

    </script>
 
   
  @endsection