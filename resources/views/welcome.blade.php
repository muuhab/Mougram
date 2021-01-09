@extends('layouts.master')

@section('title')
    HomePage
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>

        <form method="post" action="{{route('signup')}}">
            {{@csrf_field()}}
                <div class="form-group ">
                    <label for="email"> Email</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{Request::old('email')}}">
                @if($errors->has('email'))
                <div class="error text-danger">{{ $errors->first('email') }}</div>
            @endif
                
                <label for="fname">First Name</label>
                <input class="form-control {{ $errors->has('fname') ? 'is-invalid' : '' }}" type="text" name="fname" id="fname" value="{{Request::old('fname')}}">
                @if($errors->has('fname'))
                    <div class="error text-danger">{{ $errors->first('fname') }}</div>
                @endif
                <label for="pass">Password</label>
                <input class="form-control {{ $errors->has('pass') ? 'is-invalid' : '' }}" type="password" name="pass" id="pass" value="{{Request::old('pass')}}">
                @if($errors->has('pass'))
                <div class="error text-danger">{{ $errors->first('pass') }}</div>
            @endif
            </div>
            <button class="btn  btn-primary" type="submit">Sign Up</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
        <form method="post" action="{{route('signin')}}" >
                {{@csrf_field()}}
        <div class="form-group  ">
                    <label for="email">Email</label>
                    <input class="form-control {{ $errors->has('email2') ? 'is-invalid' : '' }}" type="email" name="email2" id="email" value="{{Request::old('email2')}}">
                    @if($errors->has('email2'))
                    <div class="error text-danger">{{ $errors->first('email2') }}</div>
                @endif
               
                <label for="pass">Password</label>
                <input class="form-control {{ $errors->has('pass2') ? 'is-invalid' : '' }}" type="password" name="pass2" id="pass" value="{{Request::old('pass2')}}">
                @if($errors->has('pass2'))
                <div class="error text-danger">{{ $errors->first('pass2') }}</div>
                
            @endif
            </div>
             
                   <button class="btn btn-group btn-primary" type="submit" >Sign In</button>
            </form>
           
        </div>
    
@endsection