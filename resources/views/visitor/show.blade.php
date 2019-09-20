@extends('layouts.app')

@section('content')
<div id="section-two" class="my-3 text-right">
    <h2 id="last-news" class="myfont  my-4 d-inline bg-purple"> اخر النشاطات والفعاليات في الملتقى</h2>
    <hr>
  
        <div id="article-show" class="row d-flex justify-content-center">
           
                <div class="card col-sm-8 mb-3" > 
                        <div class="row no-gutters">
                          {{-- <div class="col-md-6" style="max-width:520px; max-height:250px;">
                            <img src="{{asset('articles-img').'/'.$post->image}}"  height="100%" class="card-img" alt="...">
                          </div> --}}
                          <div class="col-md-12">
                            <div class="card-body ">
                              <h5 class="card-title text-center">{{$post->title}}</h5>
                              <div id="article"class="card-text">
                                
                                 {!! $post->body!!}
                              </div>
                              <p class="card-text"><small class="text-muted">Last updated {!! $post->updated_at!!}</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="{{ URL::previous() }}" class="btn btn-link btn-lg btn-inline ">
                          <h3>Back</h3></a> 
                      </div>    
                      
              
          </div> {{-- End Row --}}            
        
    </div>
    

@endsection