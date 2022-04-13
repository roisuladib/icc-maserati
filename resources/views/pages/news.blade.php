@extends('layouts.news')

@section('title')
   News
@endsection
@section('content')
   <div id="news">      
      <nav class="navbar navbar-expand-lg navbar-light">
         <div class="container">
            <a href="#" class="navbar-brand text-white">
               <img src="{{ url('/project/images/ic_navbar.svg') }}" height="60px" alt="Logo" />                              
                  <span class="ml-2 d-lg-inline-block d-none logo">
                     "The Maserati of Auto Clubs"      
                  </span>                                                            
            </a>
            <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#modalNavMobile" style="border: 1px solid #fff !important;">
               <span class="text-white" style="font-size: 30px;">&Xi;</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMobile">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item align-self-center px-1">
                     <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('/') }}">HOME</a>                                 
                  </li>    
                  <li class="nav-item align-self-center px-1">
                     <a class="nav-link d-none d-lg-block" href="#">|</a>                                 
                  </li>            
                  <li class="nav-item align-self-center px-1">
                     <a class="nav-link {{ (request()->is('member*')) ? 'active' : '' }}" href="{{ route('member') }}">MEMBER</a>
                  </li>
                  <li class="nav-item align-self-center px-1">
                     <a class="nav-link d-none d-lg-block" href="#">|</a>                                 
                  </li>                                      
                  <li class="nav-item align-self-center px-1">
                     <a class="nav-link {{ (request()->is('activity*')) ? 'active' : '' }}" href="{{ route('activity') }}">ACTIVITY</a>
                  </li>  
                  <li class="nav-item align-self-center px-1">
                     <a class="nav-link d-none d-lg-block" href="#">|</a>                                 
                  </li>                                          
                  <li class="nav-item align-self-center px-1">
                     <a class="nav-link pr-0 {{ (request()->is('news*')) ? 'active' : '' }}" href="{{ route('news') }}">NEWS</a>
                  </li>                                            
               </ul>         
            </div>
         </div>
      </nav>
      <header class="h-news">      
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 px-0" data-aos="fade-up" data-aos-delay="100">
                  <div class="box-slider">                          
                     <div id="slider-news" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           @foreach ($banners as $key => $banner)
                              <li class="{{ $key == 0 ? 'active' : '' }}" data-target="#slider-banners" data-slide-to="{{ $key == 0 ? $key+=1 : ''}}"></li>                                                                                                     
                           @endforeach
                        </ol>
                        <div class="carousel-inner">
                           @forelse ($banners as $key => $banner)
                              <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">                                                            
                                 <div class="card-banner d-block">
                                    <div class="thumbnail">                                                                                                         
                                       <div class="thumb" style="background-image: url('{{ Storage::url($banner->photo->first()->link) }}');"></div>                                   
                                    </div>    
                                 </div>                                                                                                                                  
                                 <div class="news-content">
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-md-8">
                                             <h2>
                                                {{ $banner->title }}
                                             </h2>
                                             <p>
                                                Posted By. <span>{{ $banner->user->name }}</span> &nbsp; {{ Carbon\Carbon::parse($banner->date)->isoFormat('D MMMM Y') }}
                                             </p>
                                          </div>
                                          <div class="col-md-4 align-self-end">
                                             <a href="{{ route('news-detail', $banner->slug) }}" class="float-right">Selengkapnya	&rarr;</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                                                
                              </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                           @empty
                               
                           @endforelse
                           {{-- <div class="carousel-item">                                                            
                              <div class="card-banner d-block">
                                 <div class="thumbnail">                                                                                                         
                                    <div class="thumb" style="background-image: url('{{ url('/project/images/banner_news_1.jpg') }}');"></div>                                   
                                 </div>    
                              </div>                                                                                                                                            
                              <div class="news-content">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-8">
                                          <h2>
                                             5 Tahun Lagi, Seluruh Line-Up Maserati Akan Bermesin Listrik
                                          </h2>
                                          <p>
                                             Rizki Satria (no name) at 03 Des, 2020
                                          </p>
                                       </div>
                                       <div class="col-md-4 align-self-end">
                                          <a class="float-right">Selengkapnya &rarr;</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>                                                                                
                           </div> --}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                        </div>                     
                     </div>
                  </div>                                                                                                                                                    
               </div>                      
            </div>
         </div>   
      </header>
      <div class="content">
         <section class="news">
            <div class="container">
               <div class="row">
                  <div class="col-12" data-aos="fade-up">
                     <h2>News</h2>
                  </div>   
                  @forelse ($news as $new)
                     <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('news-detail', $new->slug) }}" class="card-news d-block">
                           <div class="thumbnail">
                              <div class="thumb" 
                              style="@if ($new->photo->count())
                              background-image: url('{{ Storage::url($new->photo->first()->link) }}');
                              @else                              
                                 backgorund: #c5c5c5;
                              @endif">
                              </div>                                   
                           </div>    
                           <div class="text">
                              <div class="date">
                                 {{ Carbon\Carbon::parse($new->date)->isoFormat('D MMMM Y') }}
                              </div>
                              <div class="title">
                                 {{ $new->title }}                     
                              </div>
                              <div class="des">
                                 {!! $new->content !!}
                              </div>
                           </div>                 
                        </a>                  
                     </div>    
                  @empty    
                     <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="card-news d-block">
                           <div class="thumbnail">
                              <div class="thumb">404 Not Found</div>                                   
                           </div>    
                           <div class="text">
                              Kosong ...
                           </div>                 
                        </a>                  
                     </div> 
                  @endforelse
                  <div class="col-md-12 mb-5 news-pagination">
                     {{ $news->links() }}
                  </div>
               </div>              
            </div>
         </section>         

         <section class="artikel">
            <div class="container">
               <div class="row">
                  <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                     <h2>Latest Article</h2>
                  </div>            
                  <span class="card-artikel">
                     <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                        <a href="#">
                           <div class="thumbnail">
                              <div class="thumb img-fluid" style="background-image: url('{{ url('/project/images/img_card.jpg') }}');"></div>                                   
                           </div>                        
                        </a>
                     </div>
                     <div class="col-md-7 align-self-end" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="card-artikel">
                           <div class="title">
                              5 Tahun Lagi, Seluruh Line-Up Maserati Akan Bermesin Listrik
                           </div>
                           <div class="sub">
                              Rizki Satria (no name) at 03 Des 2020
                           </div>
                           <hr />
                        </a>
                     </div>                  
                  </span>    
                  <span class="card-artikel">
                     <div class="col-md-5" data-aos="fade-up" data-aos-delay="300">
                        <a href="#">
                           <div class="thumbnail">
                              <div class="thumb img-fluid" style="background-image: url('{{ url('/project/images/img_card_1.jpg') }}');"></div>                                   
                           </div>                        
                        </a>
                     </div>
                     <div class="col-md-7 align-self-end" data-aos="fade-up" data-aos-delay="300">
                        <a href="#" class="card-artikel">
                           <div class="title">
                              Maserati MC20 Mengaspal di Indonesia Awal 2021, Ini Spesifikasinya
                           </div>
                           <div class="sub">
                              Tri Rasyad (www.berita.news) at 10 Sept 2020
                           </div>
                           <hr />
                        </a>
                     </div>                     
                  </span>  
                  <span class="card-artikel">
                     <div class="col-md-5" data-aos="fade-up" data-aos-delay="400">
                        <a href="#">
                           <div class="thumbnail">
                              <div class="thumb img-fluid" style="background-image: url('{{ url('/project/images/img_card_2.jpg') }}');"></div>                                   
                           </div>                        
                        </a>
                     </div>
                     <div class="col-md-7 align-self-end" data-aos="fade-up" data-aos-delay="400">
                        <a href="#" class="card-artikel">
                           <div class="title">
                              World Premiere MC20, Inilah Bintang "MMXX: Time to be Audacious"
                           </div>
                           <div class="sub">
                              RR Ukirsari Manggalani (www.suara.com) at 11 Sept 2020
                           </div>
                           <hr />
                        </a>
                     </div>

                  </span>
                  <span class="card-artikel">
                     <div class="col-md-5" data-aos="fade-up" data-aos-delay="500">
                        <a href="#">
                           <div class="thumbnail">
                              <div class="thumb img-fluid" style="background-image: url('{{ url('/project/images/img_card_3.jpg') }}');"></div>                                   
                           </div>                        
                        </a>
                     </div>
                     <div class="col-md-7 align-self-end" data-aos="fade-up" data-aos-delay="500">
                        <a href="#" class="card-artikel">
                           <div class="title">
                              Maserati Indonesia Siapkan SUV Pamungkas Bertenaga Listrik “Grecale” Yang Akan Mengaspal Tahun Depan
                           </div>
                           <div class="sub">
                              Sonny Wibisono On Sep 16, 2020
                           </div>
                           <hr />
                        </a>
                     </div>                                    
                  </span>
                  <div class="col-md-12 text-center" style="margin-top:46px; margin-bottom: 80px;" data-aos="fade-up" data-aos-delay="600">
                     <button type="button" class="btn-artikel">Muat artikel lain</button>
                  </div>
               </div>
            </div>            
         </section>
      </div>  
   </div>
@endsection

@push('addon-script')   
   <script>
      $(".card-artikel").slice(0, 3).show();
      $(".btn-artikel").on("click", function() {
         $(".card-artikel:hidden").slice(0, 3).slideDown();
         if ($(".card-artikel:hidden").length == 0) {
            $(".btn-artikel").fadeOut('slow');
         }
      });
   </script>
@endpush