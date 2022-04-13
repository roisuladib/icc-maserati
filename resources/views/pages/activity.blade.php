@extends('layouts.app')

@section('title')
   Activity
@endsection
@section('content')
   <div id="activity">

      <header>      
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="text-center">
                     <h1>ACTIVITY</h1>  
                     <p href="#" class="hak text-decoration-none">
                        Aktivitas Member Maserati Auto Club
                     </p>
                  </div>
               </div>
            </div>           
         </div>   
      </header>
      
      <div class="content">
         <div class="sunday">
            <div class="container">
               <div class="row">
                  <div class="col-md-7 mt-5">         
                     <div class="embed-responsive embed-responsive-4by3" data-aos="fade-up" data-aos-delay="100">
                        {!! $news_lates->youtube !!}
                     </div>
                  </div>
                  <div class="col-md-5 mt-5" data-aos="fade-up" data-aos-delay="200">
                     <h2>
                        {{ $news_lates->title }}
                     </h2>
                     <span>{{ Carbon\Carbon::parse($news_lates->date)->isoFormat('D MMMM Y') }}</span>                    
                        {!! $news_lates->content !!}                                                               
                  </div>
               </div>
            </div>
         </div>
         <div class="activity">
            <div class="container">
               <div class="row">                       
                  <div class="title mx-auto text-center">
                     <h2 data-aos="fade-up" data-aos-delay="100">Aktivitas Maserati Auto Club</h2>                  
                  </div>        
                  @php
                     $counter = 100;
                  @endphp                                    
                  @forelse ($activities as $activity)
                     <div class="col-md-12">                     
                        <div class="card" data-aos="fade-up" data-aos-delay="{{ $counter += 100 }}">
                           <div class="card-header">
                              {{ $activity->title }}
                           </div>
                           <div class="card-body">
                              {{ $activity->description }}
                           </div>
                        </div>
                     </div>
                  @empty
                     <h2>Kosong</h2>
                  @endforelse
               </div>
            </div>
         </div>
         <div class="agenda">            
            <div class="agenda-1">   
               <div class="container">   
                  <div class="row">                         
                     <div class="col-md-4">
                        <div class="scroll-agenda" data-aos="fade-up" data-aos-delay="800">
                           <ul class="nav nav-pills" id="pills-tab" role="tablist">
                              @forelse ($news as $key => $new)
                                 <li class="nav-item mb-4" role="presentation">
                                    <a class="nav-link {{ $key == 0 ? 'active' : '' }}" data-toggle="pill" href="#news{{ $new->id }}">
                                       <div class="media">
                                          <img src="{{ url('/project/images/ic_navbar.svg') }}" class="align-self-center mr-2" alt="Agenda">
                                          <div class="media-body align-self-center">
                                             <p>{{ Carbon\Carbon::parse($new->date)->isoFormat('D MMMM Y') }}</p>
                                          </div>
                                       </div>
                                    </a>
                                 </li>                                                                                                                                                                                                                                                                                 
                              @empty
                                 <li class="nav-item mb-4" role="presentation">
                                    <a class="nav-link active" data-toggle="pill" href="#kosong">
                                       <div class="media">
                                          <img src="{{ url('/project/images/ic_navbar.svg') }}" class="align-self-center mr-2" alt="Agenda">
                                          <div class="media-body align-self-center">
                                             <p>{{ Carbon\Carbon::parse($new->date)->isoFormat('D MMMM Y') }}</p>
                                          </div>
                                       </div>
                                    </a>
                                 </li>     
                              @endforelse                                                                                                                                                                                                                                           
                           </ul>                                                   
                        </div>
                     </div>                         
                     <div class="col-md-8">
                        <div class="row">
                           <div class="col-md-12" data-aos="fade-up" data-aos-delay="900">
                              <div class="tab-content" id="pills-tabContent">  
                                 @forelse ($news as $key => $new)
                                    <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="news{{ $new->id }}">                           
                                       <div class="box-slider text-center">                                       
                                          <h2>
                                             {{ $new->title }}
                                          </h2>
                                          <p>
                                             {{ Carbon\Carbon::parse($new->date)->isoFormat('D MMMM Y') }}
                                          </p>
                                          <div class="owl-carousel owl-theme" id="carousel-yt-1">                                          
                                             <div class="item">
                                                <img src="{{ Storage::url($new->photo->first()->link) }}" alt="">
                                             </div>  
                                          </div>                                        
                                       </div>                                                                             
                                    </div>                                                                                                          
                                 @empty
                                    <div class="tab-pane fade show active" id="kosong">                           
                                       <div class="box-slider text-center">                                       
                                          <h2>
                                             Belum Ada Berita
                                          </h2>                                      
                                       </div>                                                                             
                                    </div>
                                 @endforelse 
                              </div> 
                           </div>
                        </div>                                                                                                          
                     </div>    
                     <div class="col">                             
                        <hr />
                     </div>                     
                  </div>                                 
               </div>               
            </div>  
            <div class="agenda-2">
               <div class="container">   
                  <div class="row"> 
                     <div class="col"> 
                        <h2 data-aos="fade-up">Galeri Maserati Club</h2>
                     </div>                        
                     <div class="col-md-12" data-aos="fade-up" data-aos-delay="1000">
                        <div class="box-slider">                          
                           <div class="owl-carousel owl-theme" id="carousel-gallery">
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
                     <div class="col">                             
                        <hr />
                     </div>                  
                  </div>
               </div>
            </div>                       
            <div class="agenda-3">
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
            </div>
            <div class="agenda-4">
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

   </div>
@endsection

@push('addon-script')
   <script>      
      $(document).ready(function() {
         $('*#carousel-yt-1').owlCarousel({            
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
                  items: 2,                              
               },
            },         
         });                  

         const owl = $('#carousel-gallery');
         owl.owlCarousel({
            center: true,
            loop: true,            
            margin: 30,
            stagePadding: 7,         
            animateIn: 'animate__bounceInUp',
            nav: false,    
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,  
            autoplayTimeout: 3000,       
            responsive:{
               0:{
                  items: 1,                                 
               },
               576:{
                  items: 2,                              
               },
               768:{
                  items: 3,                              
               },
               992:{
                  items: 3,                                                
               },
               1200:{
                  items: 3,                                                
               },
               1440:{
                  items: 4,                                                
               }
            },         
         });
         owl.on('mousewheel', '.owl-stage', function(e) {
            if (e.deltaY > 0) {
               owl.trigger('next.owl');
            } 
            else {
               owl.trigger('prev.owl');
            }
            e.preventDefault();
         });

         $('#carousel-bottom').owlCarousel({            
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
   <script>
      document.addEventListener('DOMContentLoaded', function() {
         new Splide('#my-splide', {            
            rewind    : true,
            pagination: false,            
            video     : true,            
         }).mount();
      });
   </script>
   <script>      
      lightbox.option({
         'resizeDuration': 200,
         'wrapAround': true
      });      
   </script>
@endpush