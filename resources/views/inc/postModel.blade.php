<div class="modal fade" tabindex="-1" role="dialog" id="post-model">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document" id="scr">
      <div class="modal-content">
        <div class="modal-header ">
        <h4 class="modal-title ">Create Post</h4>
          <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
                {{@csrf_field()}}
                <div class="form-group">
      
                  <textarea class=" form-control" name="body" placeholder="What's on your mind" rows="2" ></textarea>
                </div>
                <div class="wrapper">
                  <div class="file-upload">
                    <input type="file" id="customFile" name="cover_image" />
                    <i class="fa fa-arrow-up "></i>
                  </div>
                </div>
                
            </div>
        </div>
        <div class="modal-footer">
            <input type="submit" value="Post" class="form-control bg-primary mt-2 text-white">
        </div>
    </form>
    @include('inc.message')
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->