@extends('layouts.app')

@section('create')
    
<div class="container">
    <div class="row">
        <h1>Edit post</h1>
    <form action="{{route('posts.update',$post->id)}}" method="post">
            @method('PATCH') 
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Please fix the following errors
                </div>
            @endif

            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}">
                @if($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                <label for="url">Url</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="URL" value="{{ $post->image }}">
                @if($errors->has('image'))
                    <span class="help-block">{{ $errors->first('image') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <label for="description">body</label>
                <textarea class="form-control" id="body" name="body" placeholder="body">{{ $post->body }}</textarea>
                @if($errors->has('body'))
                    <span class="help-block">{{ $errors->first('body') }}</span>
                @endif
            </div>
            <button type="update" class="btn btn-default">Submit</button>
        </form>
        
    </div>
</div>


@endsection

@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">

@endsection


@section('scripts')
 
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js" defer></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script>
    $(document).ready(function() {
      $('#body').summernote({
        height: 300
      });
    });
</script>

@endsection
