<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('styles')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/353ac4e52d.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <script src="{{asset('js/summernote-ext-rtl.js')}}"></script> --}}

</head>
<body>
   
    <div id="app" class="myfont" style="direction:rtl;">
        <nav style="direction:rtl !important;" class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('img/school-logo.png') }}" width="100px"> <span class="brand-title">
               متوسطة فتح الفتوح</span> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">   
                <i class="fas fa-bars" style="color:#f87616; font-size:28px;"></i>
            </span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('home')}}">الصفحة الرئيسية<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">عن المدرسة</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    خيارات اخرى
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">مواعيد الامتحانات</a>
                    <a class="dropdown-item" href="#">نتائج الطلبة</a>
                    <a class="dropdown-item" href="https://www.facebook.com/pg/BookForumMosul/posts/?ref=page_internal">صفحتنا على الفيس بوك</a>
                    <div class="dropdown-divider"></div>
                    @if (Auth::user())
                        @if(Auth::user()->name=="admin")
                          <a href="{{route('posts.index')}}" class="dropdown-item">{{Auth::user()->name}} اهلا بك </a>
                        @endif

                    @else
                      <a class="dropdown-item" href="{{route('login')}}">تسجيل دخول المسؤول</a>
                    @endif
                    
                  
                  
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#section-2" tabindex="-1" aria-disabled="true"> تحميل تطبيق الموبايل</a>
                </li>
              </ul>
              
            </div>
          </nav> 

          
          @yield('carosul')
          @yield('content')
          @yield('posts')
          @yield('create')



          <footer>
              <div class="container-fluid">
                <div class="row ">
                  <div class="col-sm-12 d-flex justify-content-center">
                      <a href="https://www.facebook.com/pg/BookForumMosul/posts/?ref=page_internal"> <i class="fab  fa-facebook-square"></i> </a>
                      <a href=""><i class="fab fa-youtube"></i></a>
                      <a href=""><i class="fas fa-copyright"></i></a>
                  </div>
          
                </div>
                <div class="row mt-2">
                  <div class="col-sm-12 d-flex justify-content-center">
                      <p class="myfont">العراق - مدينة الموصل - حي الشرطة </p>
                  </div>
                  
                </div>
              </div>
          
            </footer>
    </div>

          

    @yield('scripts')

</body>
</html>
