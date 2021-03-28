<div class="modal fade" tabindex="-1" role="dialog" id="edit-model">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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