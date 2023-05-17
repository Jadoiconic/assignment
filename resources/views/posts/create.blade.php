@extends('layouts.master')
@section('title', '| Create New Post')
@section('contents')
<div class="container">
  <div class="row">
    <h4>New blog post</h4>
    <form action="/posts/store" method="post" style = "margin-top: 30px">
      @csrf
      <div class="form-group" style = "margin-top:25px">
        <label for="">Title</label>
        <input type="text" name="title" value="{{ old('title') }}"  class="form-control" placeholder="Enter title" aria-describedby="helpId">
        <span class="alert text-danger">@error('title') {{ $message }} @enderror</span>
      </div>


      <div class="form-group">
        <label for="body">Body</label>
        <textarea class = "form-control" name="body" id="" cols="50" rows="10">{{ old('body') }}</textarea>
        <span class="alert text-danger">@error('body') {{ $message }} @enderror</span>
      </div>
      <div class="form-group">
          <button type = "submit" name = "" class = "btn btn-primary btn-md">Create</button>
      </div>
    </form>
  </div>
</div>
@endsection()

@section('footer')
   @parent()

@endsection()