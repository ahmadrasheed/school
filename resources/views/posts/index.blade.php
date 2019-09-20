@extends('layouts.app')

@section('posts')
<div class="row text-right">
        <div class="col-sm-12">

                @if(session()->get('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}  
                  </div>
                @endif
              </div>

              

<div class="col-sm-12">
    <h2 class="display-4">posts for admin only</h2> 
    <div>
            <a style="margin: 19px;" href="{{ route('posts.create')}}" class="btn btn-success">New Post</a>
      </div>   
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>image</td>
          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
        <td><a href="{{route('visitor.show.post',$post->id)}}">{{$post->title}}</a></td>
            <td>{{$post->image}}</td>
          
            <td>
                <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection



