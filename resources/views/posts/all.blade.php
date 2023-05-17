@extends('layouts.master')
@section('title', '- Posts')
@section('contents')
<div class="container">
     <div class = "contents-wrapper" style = "display:flex; flex-direction:row; justify-content:space-between">             
              <div>
               <h4>All availabe posts</h4>    
              </div>
              <div>
                    <a class = "btn btn-primary" href="/posts/create">Add Post</a> 
              </div>
          </div>
          <table class = "table table-striped table-light" style = "margin-top:25px">
               <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Actions</th>
               </tr>
               @foreach ($data as $post)
               <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                         <a class = "btn btn-primary btn-sm" href="/posts/edit/{{ $post->id }}">Edit</a>
                         <a class = "btn btn-warning btn-sm" href="/posts/delete/{{ $post->id }}">Delete</a>
                    </td>
               </tr>     
               @endforeach
          </table>
</div> 
@endsection()

@section('footer')
   @parent()

@endsection()
