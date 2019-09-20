
@extends('layouts.app')
@section('create')


<div class="container">
        <div class="row">
            <h1>Submit a link</h1>
            <form action="/posts" method="post" enctype="multipart/form-data">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">عنوان المقالة</label>
                    <input type="text" class="form-control" id="title" name="title"  value="{{ old('title') }}">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('short') ? ' has-error' : '' }}">
                    <label for="short">مضمون قصير</label>
                    <input type="text" class="form-control" id="short" name="short" placeholder="short" value="{{ old('short') }}">
                    @if($errors->has('short'))
                        <span class="help-block">{{ $errors->first('short') }}</span>
                    @endif
                </div>



                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label for="image">صورة لعنوان المقالة</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="URL" value="{{ old('image') }}">
                    @if($errors->has('image'))
                        <span class="help-block">{{ $errors->first('url') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                    <label for="body">مضمون المقالة</label>
                    
                    <textarea  id="body" name="body" placeholder=""></textarea>
                    
                    @if($errors->has('body'))
                        <span class="help-block">{{ $errors->first('body') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>

                
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
      $('#body').summernote();
    });
</script>

@endsection


