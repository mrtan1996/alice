@extends('admin.master')
@section('content')
Create user
<form method="POST" action="{{ route('users.store', $user->id) }}">
  <div class="form-group">
    {{ csrf_field()  }}
    {{ method_field('POST') }}
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" placeholder="username" value = "{{$user->email}}"> 
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputusername1">username</label>
    <input type="username" class="form-control" id="exampleInputusername1" name="name" placeholder="username" value = "{{$user->name}}">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection