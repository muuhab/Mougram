<div class="cont">

    @foreach($posts as $post)

  <div class="mt-4 bg-white p-4 round" data-postid="{{$post->id}}">
    <div style="position: relative">
      <img class="rounded-circle" src="https://picsum.photos/36/36">
      <div class="p-1" style="position: relative; display: inline-block;">
        <p class="font-weight-bold name">Muhab Sherif</p>
        <small class="date">12-10-2010</small>
      </div>
      <div class="dropdown">
        <a class="dots " href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  
          <i class="fas fa-ellipsis-h text-secondary "></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          @if(Auth::user()==$post->user)
          <a class="dropdown-item " href="#" id="edit-sec" >Edit</a>
            <a class="dropdown-item"  href="{{route('posts.de',$post->id)}}" >Delete</a>
          @endif
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>

      </div>
    </div>
    <p class="mt-4">{{$post->body}}</p>
    {{-- <img class="round img-responsive img-fluid" src="{{$post->cover_image}}" alt="Card image cap"  > --}}
    <a href="javascript:void(0)" class="ui-rect ui-bg-cover" style="background-image: url('{{$post->cover_image}}');"></a>
    <div class="mt-2">
      <div class="likes text-secondary">
        <span id="likesNum">{{count($post->likes)>0 ? count($post->likes):null}}</span>
      <span>{{ count($post->likes)>0 ? count($post->likes)==1 ? 'Like': 'Likes':null }}</span>
      </div>
      <a href="#" id="comm" class="text-secondary comments" ><span>{{count($post->comments)>0 ? count($post->comments):null}}</span> <span>{{ count($post->comments)>0 ? count($post->comments)==1 ? 'Comment': 'Comments':null }}</a>
    </div>
    <div class="post-tab">
      <div class="container p-2 mt-3 border-top border-bottom  ">
      <div class="row">
        <button class="col-3 write" id="comm2"><i class="far fa-comment text-secondary mr-2"></i>Comments</button>
        <a class="col-3"><i class="far fa-heart text-secondary mr-2"></i>Likes</a>
        <a class="col-3"><i class="fas fa-share-alt text-secondary mr-2"></i>Share</a>
        <a class="col-3"><i class="far fa-bookmark text-secondary mr-2"></i>Saved</a>
      </div>
    </div>

    </div>

    
    <div class="row mt-2 hide">
        @foreach ($post->comments as $comment)
        <div class="col-1 mr-2 my-2">
          
          <img class=" rounded-circle" src="https://picsum.photos/36/36">
        </div>
        <div class="col-10 bg-light round my-2  ">
        <p class="font-weight-bold ">{{$comment->user->first_name}}</p>
        <p>{{$comment->comment}}</p>
        <time class="text-muted" id="tmm" datetime="{{$comment->created_at}}"></time>
          {{-- <textarea class="form-control write " rows="1" placeholder="Write your comment..." name="comment" id="txtInput"></textarea> --}}
        </div>
        
        @endforeach
      </div>
  </div>
  

  @endforeach
</div>