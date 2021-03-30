<ul class="timeline">
    @foreach ($posts as $post)
        <li>
            <div class="timeline-body" data-postid="{{ $post->id }}>
                <div class=" timeline-header">
                <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                <span class="username"><a href="javascript:;">Sean Ngu</a> <small></small></span>
                <span class="pull-right text-muted">18 Views</span>
            </div>
            <div class="timeline-content">
                <p>
                    {{ $post->body }}
                </p>
            </div>
            <div class="timeline-likes">
                <div class="stats-right">
                    <span class="stats-text">259 Shares</span>
                    <a href="#" id="comm"
                        class="stats-text"><span>{{ count($post->comments) > 0 ? count($post->comments) : null }}</span>
                        <span>{{ count($post->comments) > 0 ? (count($post->comments) == 1 ? 'Comment' : 'Comments') : null }}</a>
                </div>
                <div class="stats">
                    <span class="fa-stack fa-fw stats-icon">
                        <i class="fa fa-circle fa-stack-2x text-danger"></i>
                        <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                    </span>
                    <span class="fa-stack fa-fw stats-icon">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="stats-total">4.3k</span>
                    <span id="likesNum"
                        class="stats-total">{{ count($post->likes) > 0 ? count($post->likes) : null }}</span>
                    <span
                        class="stats-total">{{ count($post->likes) > 0 ? (count($post->likes) == 1 ? 'Like' : 'Likes') : null }}</span>
                </div>
            </div>
            <div class="timeline-footer">
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i
                        class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                <a id="comm2" href="javascript:;" class="m-r-15 text-inverse-lighter"><i
                        class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i>
                    Share</a>
            </div>
            <div class="timeline-comment-box">
                <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"></div>
                <div class="input">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                            <span class="input-group-btn p-l-10">
                                <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <div class="row mt-2 hide">
                @foreach ($post->comments as $comment)
                    <div class="col-1 mr-2 my-2">

                        <img class=" rounded-circle" src="https://picsum.photos/36/36">
                    </div>
                    <div class="col-10 bg-light round my-2  ">
                        <p class="font-weight-bold ">{{ $comment->user->first_name }}</p>
                        <p>{{ $comment->comment }}</p>
                        <time class="text-muted" id="tmm" datetime="{{ $comment->created_at }}"></time>
                        {{-- <textarea class="form-control write " rows="1" placeholder="Write your comment..." name="comment" id="txtInput"></textarea> --}}
                    </div>

                @endforeach
            </div>
        </li>
    @endforeach

</ul>
