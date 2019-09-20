@extends('layouts.app')

@section('bg')
<div id="bg" class=" d-flex flex-column container-fluid pic">                  {{-- Start of Container --}}
    <div id='section-one' class="">
        <div id="main-title" class="row d-flex  flex-column align-items-center flex-md-row justify-content-center">
            <div class=" col-md-4   d-flex flex-column  align-items-center align-items-md-end">
                <img class="" src="{{asset('img/multaka-logo.png')}}"  width=200px;>
            </div>

            <div id="titles" class=" w-100 col-md-5 text-center d-flex flex-column align-items-center">
                <p class="title1  mt-5">أهلا وسهلاً بكم في ملتقى الكتاب</p>
                <p class="title2  mt-2 ">حيث المطالعة والشاي والموسيقى معاً! </p>
            </div>
            
        </div>
    </div>
</div>                                   {{--  End of Container --}}

@endsection

@section('content')
<div id="section-two" class="">
    <h1 id="last-news"class="myfont text-right py-3 bg-purple"> اخر النشاطات والفعاليات في الملتقى</h1>
    <hr>
  
        <div class="row">
            @foreach ($posts as $post)
        <a href="{{route('visitor.show.post',$post->id)}}">
                <div class="card col-md-6 mb-3" > 
                    <a href="{{route('visitor.show.post',$post->id)}}">
                        <div class="row no-gutters">
                          <div class="col-md-6" style="max-width:520px; max-height:250px;">
                            <img src="{{asset('articles-img').'/'.$post->image}}"  height="100%" class="card-img" alt="...">
                          </div>
                          <div class="col-md-6">
                            <div class="card-body text-right">
                              <h5 class="card-title">{{$post->title}}</h5>
                              <p class="card-text">
                                
                                 {!! $post->short!!}
                              </p>
                              <p class="card-text"><small class="text-muted">Last updated {!! $post->updated_at!!}</small></p>
                            </div>
                          </div>
                        </div>
                      </a> 
                      </div> 
             
              @endforeach
          </div> {{-- End Row --}}            
        
    </div>
    <div class="row d-flex justify-content-center ">

      <div class="col-3">
        {{ $posts->links() }}

      </div>
    </div>
@endsection