@if (count($errors)>0)
<div class="row">
    <div class="col-md-6 text-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

@if (Session::has('message'))
<div class="row">
    <div class="col-md-6 text-success">
      <h3 id="msg"> {{Session::get('message')}}  </h3>  
    </div>
</div>

@endif