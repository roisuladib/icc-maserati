@extends('layouts.app')

@section('title')
   News Detail
@endsection
@section('content')
   <div id="news-detail">
      <div class="content">     
         <section class="section-header">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10">
                     <h2 class="title">{{ $news->title }}</h2>
                     <p class="sub">Posted By.<span> ({{ $news->user->name }}) &nbsp; </span>{{ Carbon\Carbon::parse($news->date)->isoFormat('D MMMM Y') }}</p>
                  </div>
               </div>
            </div>   
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12 px-0">
                     <img src="{{ Storage::url($news->photo->first()->link) ?? 'Foto Kosong' }}" class="img-fluid" style="width: 100%" alt="image car details" />
                  </div>
               </div>
            </div>
         </section> 
         <section class="section-content">
            <div class="container-fluid bg-white">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="des">
                           {!! $news->content !!}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>         
         <section class="section-carousel">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                           <div class="owl-stage">
                              @forelse ($photos as $photo)
                                 <div class="owl-item">
                                    <a href="{{ route('news-detail', $photo->slug) }}" class="card-news d-block">
                                       <div class="thumbnail">
                                          <div class="thumb" style="@if ($photo->photo->count())
                                             background-image: url('{{ Storage::url($photo->photo->first()->link) }}');
                                             @else                              
                                                backgorund: #c5c5c5;
                                             @endif"></div>                                   
                                       </div>    
                                       <div class="text">
                                          <div class="date">
                                             {{ Carbon\Carbon::parse($photo->date)->isoFormat('D MMMM Y') }}
                                          </div>
                                          <div class="title">
                                             {{ $photo->title }}                     
                                          </div>
                                          <div class="des">
                                             {!! $photo->content !!}
                                          </div>
                                       </div>                 
                                    </a> 
                                 </div>                                                    
                              @empty
                                 <div class="owl-item">
                                    <a href="{{ route('news') }}" class="card-news d-block">
                                       <div class="thumbnail">
                                          <div class="thumb" style="background-color: #c5c5c5;"></div>                                   
                                       </div>    
                                       <div class="text">
                                          <div class="title">
                                             Kosong ..
                                          </div>
                                       </div>                 
                                    </a> 
                                 </div>                                                    
                              @endforelse
                           </div>
                        </div>
                    </div>
                  </div>           
               </div>
            </div>
         </section>
      </div>
   </div>
@endsection
@push('addon-script')
<script>
   const owl = $('.owl-carousel');
   owl.owlCarousel({
      center: true,
      loop:true,
      margin:30,
      stagePadding: 7,         
      animateIn: 'animate__bounceInUp',
      nav:false,    
      dots: false,
      autoplay: false,
      autoplayHoverPause: true,
      navText: ["<span>&lt;</span>", "<span>&gt;</span>"],
      responsive:{
         0:{
            items:1,
            nav: true,               
         },
         576:{
            items:2,
            nav:true,               
         },
         768:{
            items:3,
            nav:true,               
         },
         992:{
            items: 4,
            nav: true,                              
         },
         1200:{
            items: 4,
            nav: true,                              
         },
         1440:{
            items: 5,
            nav: true,                              
         }
      },         
   });
   owl.on('mousewheel', '.owl-stage', function(e) {
      if (e.deltaY>0) {
         owl.trigger('next.owl');
      } 
      else {
         owl.trigger('prev.owl');
      }
      e.preventDefault();
   });
</script> 
@endpush