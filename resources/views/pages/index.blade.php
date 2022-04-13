@extends('layouts.app')

@section('title')
   Berkumbulnya Orang Hebat
@endsection
@section('content')
<div id="home">
   <header>         
      <div class="header">
         <div class="text-center">
            <img src="{{ url('/project/images/ic_logo.png') }}" class="hero mb-4" width="247px" alt="" data-aos="fade-up" data-aos-delay="100">
            <h1 data-aos="fade-up" data-aos-delay="200">" The Maserati of Auto Clubs "</h1>  
            <div class="carousel slide" id="storeCarousel" data-ride="carousel">
               <ol class="carousel-indicators" data-aos="fade-up" data-aos-delay="300">
                  @foreach ($headers as $key => $header)
                     <li class="{{ $key == 0 ? 'active' : '' }}" data-target="#storeCarousel" data-slide-to="{{ $key == 0 ? $key+=1 : ''}}"></li>                     
                  @endforeach             
               </ol>
               <div class="carousel-inner" style="margin-top: -120px;">                        
                  @foreach ($headers as $key => $header)
                     <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-12 col-md-6">
                                 <div class="text-left">
                                    <img src="{{ Storage::url($header->photo) ?? 'https://ui-avatars.com/api/?background=0C0D36&color=fff&name=adib' }}" class="mb-4 img-pendiri" height="155px" alt="Empty" />                           
                                    <p class="p-header">{{ $header->description }}</p>
                                    <p class="p-header mb-0">{{ $header->name }}</p>
                                    <p class="p-sub mb-5">{{ $header->job }}</p>
                                 </div>
                              </div>                          
                           </div>
                        </div>
                     </div>                         
                  @endforeach 
               </div>
            </div>                 
         </div>
      </div>         
   </header>  
   {{-- <header>         
      <div class="header">
         <div class="text-center mb-5">
            <img src="{{ url('/project/images/ic_logo.png') }}" class="hero mb-4" width="247px" alt="" data-aos="fade-up" data-aos-delay="100">
            <h1 data-aos="fade-up" data-aos-delay="200">" The Maserati of Auto Clubs "</h1>                         
         </div>          
         <div class="container">
            <div class="row">
               @foreach ($headers as $header)
                  <div class="col-sm-12 col-md-6">
                     <div class="owl-carousel owl-theme" id="owl-carousel-header">
                        <div class="item">
                           <div class="text-left">
                              <img src="{{ Storage::url($header->photo) }}" class="mb-4 img-pendiri" height="155px" alt="Empty" />                           
                              <p class="p-header">{{ $header->description }}</p>
                              <p class="p-header mb-0">{{ $header->name }}</p>
                              <p class="p-sub mb-5">{{ $header->job }}</p>
                           </div>
                        </div>                                                    
                     </div>
                  </div>
               @endforeach
            </div>
         </div>       
      </div>  
   </header>  --}}
   <div class="home-latar">
      <div class="container">
         <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">                              
               <img src="{{ url('/project/images/home/img-lbp.png') }}" class="img-latar" alt="Latar Belakang Pendirian" />
            </div>
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
               <P>
                 {!! $latar->description !!}
               </p>
            </div>
         </div>
      </div>
   </div>    
   <div class="home-benefit">
      <div class="container">
         <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
               <ul type="dist" style="padding-left: 17px !important;">
                  <li><strong>{{ $latar->title_1 }}</strong>: 
                     {{ $latar->benefit_1 }}
                  </li>
               </ol>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
               <ul type="dist"  style="padding-left: 17px !important;">
                  <li><strong>{{ $latar->title_2 }}</strong>: 
                     {{ $latar->benefit_2 }}
                  </li>
               </ol>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
               <ul type="dist" style="padding-left: 17px !important;">
                  <li><strong>{{ $latar->title_3 }}</strong>: 
                     {{ $latar->benefit_3 }}
                  </li>
               </ol>
            </div>
         </div>
      </div>
   </div>      
   <div class="home-slide">
      <div class="container">
         <div class="row">
            <div class="col-lg-12" style="margin-top: 60px; margin-bottom: 30px;" data-aos="fade-up" data-aos-delay="500">
               <div class="owl-carousel owl-theme" id="owl-carousel-home">
                  @forelse ($photos as $photo)               
                     <div class="item">       
                        <a href="{{ Storage::url($photo->link) }}" data-lightbox="sliderHome" data-title="Aktivitas">
                           <img src="{{ Storage::url($photo->link) }}" data-lightbox="sliderHome" alt="" />                     
                        </a>              
                     </div>                                 
                  @empty
                     <h2>Kosong</h2>
                  @endforelse
               </div>         
            </div>              
         </div>
      </div> 
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 d-lg-inline-block d-none px-0" data-aos="fade-up" data-aos-delay="300">
               <img src="{{ url('/project/images/home/bg-slider.png') }}" class="bg-slider" alt="" />
            </div>
         </div>
      </div>        
   </div>      
   <div class="home-pendiri">
      <div class="container">
         <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
               <div class="row">
                  <div class="col-md-6 d-none d-md-block">
                     <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">                           
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="false" style="margin-bottom: 20px;">
                              <img src="{{ url('/project/images/home/img-tab-0.png') }}" id="tab-menu" alt="tab 2">
                              <img src="{{ url('/project/images/home/img-tab-active-0.png') }}" id="tab-menu" class="d-none" alt="tab 2">
                           </a>
                        </li>
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link nav-induk active" id="pills-0-tab" data-toggle="pill" href="#pills-0" role="tab" aria-controls="pills-0" aria-selected="true">
                              <img src="{{ url('/project/images/ic_logo.png') }}" id="tab-menu" class="ic-tab-utama" alt="tab 4">
                           </a>
                        </li>                                          
                        <li class="nav-item mb-4" role="presentation" style="margin-top: -70px; margin-left: 340px; margin-bottom: 0 !important; z-index: 1030;">
                           <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
                              <img src="{{ url('/project/images/home/img-tab-2.png') }}" id="tab-menu" alt="tab 3">
                           </a>
                        </li>                                                                                                         
                        <li class="nav-item mb-4" role="presentation" style="margin-top: -310px; margin-left: 340px;">
                           <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">
                              <img src="{{ url('/project/images/home/img-tab-1.png') }}" id="tab-menu" alt="tab 2">
                           </a>
                        </li>
                        <li class="nav-item mb-4" role="presentation" style="margin-top: -26px;">
                           <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
                              <img src="{{ url('/project/images/home/img-tab-3.png') }}" id="tab-menu" alt="tab 4">
                           </a>
                        </li>                                                          
                     </ul>
                  </div>  
                  <div class="col-md-6 d-md-none d-sm-block">
                     <ul class="nav nav-pills justify-content-center tab-mobile" id="pills-tab" role="tablist">                                                     
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="false">
                              <img src="{{ url('/project/images/home/img-tab-0.png') }}" id="tab-menu" alt="tab 2">
                              <img src="{{ url('/project/images/home/img-tab-active-0.png') }}" id="tab-menu" class="d-none" alt="tab 2">
                           </a>
                        </li>
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link nav-induk active" id="pills-0-tab" data-toggle="pill" href="#pills-0" role="tab" aria-controls="pills-0" aria-selected="true">
                              <img src="{{ url('/project/images/ic_logo.png') }}" id="tab-menu" class="ic-tab-utama" alt="tab 4">
                           </a>
                        </li>          
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
                              <img src="{{ url('/project/images/home/img-tab-3.png') }}" id="tab-menu" alt="tab 4">
                           </a>
                        </li>                                                                                                                                                                                            
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">
                              <img src="{{ url('/project/images/home/img-tab-1.png') }}" id="tab-menu" alt="tab 2">
                           </a>
                        </li>                                                        
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
                              <img src="{{ url('/project/images/home/img-tab-2.png') }}" id="tab-menu" alt="tab 3">
                           </a>
                        </li>  
                     </ul>                     
                  </div>                
               </div>              
            </div>   
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
               <div class="tab-content" id="pills-tabContent">      
                  <div class="tab-pane fade show active" id="pills-0" role="tabpanel" aria-labelledby="pills-0-tab">                           
                     <div class="scroll-pendiri">
                        {!! $tabs->tab_1 !!}
                     </div>
                  </div>                     
                  <div class="tab-pane fade" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">                           
                     <div class="scroll-pendiri">
                        {!! $tabs->tab_2 !!}
                     </div>
                  </div>                     
                  <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">                           
                     <div class="scroll-pendiri">
                        {!! $tabs->tab_3 !!}                                                         
                     </div>
                  </div>                     
                  <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">                           
                     <div class="scroll-pendiri">
                        {!! $tabs->tab_4 !!}                                                        
                     </div>
                  </div>                     
                  <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">                           
                     <div class="scroll-pendiri">
                        {!! $tabs->tab_5 !!}                                                        
                     </div>
                  </div>                                                            
               </div>     
            </div>
         </div>
      </div>
   </div>
   <div class="home-slider-video bg-white">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2 text-center" data-aos="fade-up" data-aos-delay="100">
               <div class="splide" id="my-splide">
                  <div class="splide__track">
                     <ul class="splide__list">
                        @forelse ($news as $new)
                           <li class="splide__slide">
                              <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up">
                                 {!! $new->youtube !!}
                              </div>
                           </li>                                                                                                                                      
                        @empty
                           <li class="splide__slide">
                              <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up">
                                 <h4>Video Kosong</h4>
                              </div>
                           </li> 
                        @endforelse
                     </ul>
                  </div>
               </div>                 
            </div>
         </div>
      </div>
      <div class="container-fluid mx-0">
         <div class="container">
            <div class="row">
               <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                  <div class="owl-carousel owl-theme" id="carousel-bottom">
                     @forelse ($news as $new)
                        <div class="item">
                           <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up">
                              {!! $new->youtube !!}
                           </div>
                        </div>                         
                     @empty
                        <div class="item">
                           <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up">
                              <h4>Kosong ...</h4>
                           </div>
                        </div>
                     @endforelse
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@push('addon-script')
   {{-- Owl Carousel --}}
   {{-- <script>
       const owlCarouselHeader = $('#owl-carousel-header');
       owlCarouselHeader.owlCarousel({
            items: 1,
            dots: true,
            loop: true,
            // autoplay: true;
         });
   </script> --}}
   <script> 
      $(document).ready(function() {
         const owlCarouselHome = $('#owl-carousel-home');
         owlCarouselHome.owlCarousel({
            center: true,
            nav: true,
            loop: true,
            margin: 30,         
            animateIn: 'animate__zoomIn',
            dots: false,
            responsive: {
               0: {
                  items: 1,
                  stagePadding: 7,
               },
               576: {
                  items: 2,
                  stagePadding: 7,
               },
               768: {
                  items: 2,
                  stagePadding: 7,
               },
               768: {
                  items: 2,
                  stagePadding: 7,
               },
               992: {
                  items: 3,
                  stagePadding: 7,
               },
               1440: {
                  stagePadding: 10,
                  items: 4,
               }
            }
         });
         owlCarouselHome.on('mousewheel', '.owl-stage', function(e) {
            if (e.deltaY > 0) {
               owlCarouselHome.trigger('next.owl');
            } 
            else {
               owlCarouselHome.trigger('prev.owl');
            }
            e.preventDefault();
         });

         const owl = $('#carousel-bottom');
         owl.owlCarousel({            
            loop: true,            
            margin: 30,
            stagePadding: 7,         
            animateIn: 'animate__flipInY',
            nav: false,    
            dots: true,                     
            responsive:{
               0:{
                  items: 1,                                 
               },
               576:{
                  items: 3,                              
               },
               1440:{
                  items: 4,                                                
               }
            },         
         });            
      });
   </script>
   
   {{-- Splide --}}
   <script>
      document.addEventListener( 'DOMContentLoaded', function () {
         new Splide('#my-splide', {            
            rewind    : true,
            pagination: false,            
            video     : true,            
         }).mount();        
      });
   </script>  

   {{-- LightBox --}}
   <script>      
      lightbox.option({
         'resizeDuration': 200,
         'wrapAround': true
      });      
   </script>
@endpush