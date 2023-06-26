@extends('fe.layout.layout')

@section('contents')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/fe/css/inform.css') }}">
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('homepage') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ Route('informfe') }}">Inform</a></li>
 
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
<div class="container border-right border-left">
    @foreach($inform as $infor)
  <div class="banner-container">
    @for ($i = 0; $i < 10; $i++)
      <div class="banner">
        <img src="{{ '/images/' . $infor->photo }}" alt="">
      </div>
    @endfor
  </div>




        <!-- Image Section -->
        <div class="container">
        
            <div class="row">
                <div class="col-md-12 text-center mt-4">
                    <h3 class="text-secondary ">This is inform page, our new products <br> or any prompt will be
                        displayed on this page</h3>
                </div>
            </div>
        </div>

        <!-- Article Section -->
        <div class="container article">
            <div class="row">
                <div class="col-md-12">
 
                    <h3>
                        [ <abbr title="">{{$infor->title}}</abbr> ]
                        <span class="date-line">{{$infor->created_at}}</span>
                    </h3>

                    <p>{{$infor->content}}</p>
                    
                </div>
                @endforeach
            </div>
        </div>
        

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 @endsection

 