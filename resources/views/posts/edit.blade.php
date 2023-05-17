@extends('layouts.master')
@section('title', '| Edit Post')
@section('contents')
<div class="container">
  <div class="row">
    <h4>Edit Post</h4>
    <form action="/posts/update" method="post"  style = "margin-top: 30px">
        @csrf
        @foreach ($posts as $post)
        <div class="form-group" style = "margin-top:25px">
          <label for="">Title</label>
          <input type="hidden" name="id" value="{{ $post->id }}"  class="form-control" placeholder="" aria-describedby="helpId">
          <input type="text" name="title" value="{{ $post->title }}"  class="form-control" placeholder="" aria-describedby="helpId">
          <span class="alert text-danger">@error('title') {{ $message }} @enderror</span>
        </div>
        <div class="form-group">
          <label   style = "margin-top: 1px" for="body">Body</label>
          <textarea class = "form-control" name="body" id="" cols="50" rows="10">{{ $post->body }}</textarea>
          <span class="alert text-danger">@error('body') {{ $message }} @enderror</span>
        </div>
        
        @endforeach
        <div class="form-group">
            <button type = "submit" class = "btn btn-primary btn-md">Update</button>
        </div>
    </form>
  </div>
</div>

  @endsection()

  @section('footer')
     @parent()
  
  @endsection()