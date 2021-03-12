@extends('layouts.master')

@section('judul')
    Halaman {{$title}}
@endsection
    
@section('content')

<div class="row tm-welcome-content">
    <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{asset('template')}}/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Customer&nbsp;&nbsp;<img src="{{asset('template')}}/img/header-line.png" alt="Line" class="tm-header-line"></h2>
    <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
    <p class="gray-text tm-welcome-description">Cafe House template is a mobile-friendly responsive <span class="gold-text">Bootstrap v3.3.5 layout</span> by <span class="gold-text">templatemo</span>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculusnec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
    <a href="#main" class="tm-more-button tm-more-button-welcome">Read More</a>      
  </div>
  <img src="{{asset('template')}}/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">  
</div>      
</section>
<div class="tm-main-section light-gray-bg">
<div class="container" id="main">  
  <section class="tm-section tm-section-margin-bottom-0 row">
    <div class="col-lg-12 tm-section-header-container">
      <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{asset('template')}}/img/logo.png" alt="Logo" class="tm-site-logo"> Customer</h2>
      <div class="tm-hr-container"><hr class="tm-hr"></div>
    </div>
    <div class="col-lg-12 tm-popular-items-container">

      @foreach ($data as $item)
      <div class="tm-popular-item">
        <img src="{{$item->image}}" alt="Popular" class="tm-popular-item-img">
        <div class="tm-popular-item-description">
          <h4 class="tm-handwriting-font tm-popular-item-title">{{$item->nama}}</h4>
            <hr class="tm-popular-item-hr">
          <p>{{$item->komentar}}</p>
          
        </div>              
      </div>      
      @endforeach
      
    </div>          
  </section>
</div>
</div> 
@endsection