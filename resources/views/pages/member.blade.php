@extends('layouts.app')

@section('title')
   Member
@endsection 
@section('content')  
   <div id="member">

      <header>      
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="text-center">               
                     <h1 data-aos="fade-up" data-aos-delay="100">MEMBERS</h1>  
                     <a href="#" class="hak text-decoration-none" data-aos="fade-up" data-aos-delay="200">Hak Istimewa Sebagai Member Maserati Auto Club</a>                     
                  </div>         
               </div>
            </div>
         </div>   
      </header>

      <div class="content">
         <div class="level">
            <div class="container">
               <div class="row">
                  <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                     <div class="d-inline-block">
                        <img src="{{ url('/project/images/ic_logo.png') }}" height="140px" alt="" />
                        <span class="h-level" >LEVEL MEMBER MAC</span>                     
                     </div>
                  </div>                  
               </div>
               <div class="row">
                  @php
                     $increment_data_aos_delay = 0
                  @endphp
                  @forelse ($levels as $level)
                     <div class="col-md-10 offset-md-1" data-aos="fade-up" data-aos-delay="{{ $increment_data_aos_delay += 100 }}">
                        <h3 class="title title-1">{{ $level->title }}</h3>
                        <p class="sub">{{ $level->description }}</p>
                     </div> 
                  @empty
                     <h2>Kosong</h2>
                  @endforelse              
               </div>
            </div>
         </div>         
         <div class="section-tab-bg">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12 px-0">
                     <div class="text-right">
                        <img src="{{ url('/project/images/member/bg-member.png') }}" class="img-fluid" alt="image" />
                     </div>
                  </div>
               </div>
            </div>         
         </div>      
         <div class="section-tab-member">
            <div class="container">
               <div class="row">                                   
                  <div class="col-md-12" data-aos="fade-up" data-aos-delay="700">
                     <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item mb-4 mb-4" role="presentation">
                           <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">
                           <img src="{{ url('/project/images/member/img-tab-0.png') }}" alt="tab 1" />
                           </a>
                        </li>                     
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">
                           <img src="{{ url('/project/images/member/img-tab-1.png') }}" alt="tab 1" />
                           </a>
                        </li>
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
                              <img src="{{ url('/project/images/member/img-tab-2.png') }}" alt="tab 1" />
                           </a>
                        </li>
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
                              <img src="{{ url('/project/images/member/img-tab-3.png') }}" alt="tab 1" />
                           </a>
                        </li>
                        <li class="nav-item mb-4" role="presentation">
                           <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                              <img src="{{ url('/project/images/member/img-tab-4.png') }}" alt="tab 1" />
                           </a>
                        </li>
                     </ul>
                     <div class="tab-content" id="pills-tabContent">                         
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">                           
                           <div class="tab-value">
                              {!! $tab->tab1 !!}                          
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                           <div class="tab-value">
                              {!! $tab->tab2 !!} 
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                           <div class="tab-value">
                              {!! $tab->tab3 !!} 
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                           <div class="tab-value">
                              {!! $tab->tab4 !!}                                         
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                           <div class="tab-value">
                              {!! $tab->tab5 !!}                                        
                           </div>
                        </div>
                     </div>                    
                  </div>
               </div>
            </div>
         </div>
         <div class="section-daftar-manfaat">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12 text-center">
                     <h2 data-aos="fade-up" data-aos-delay="100">DAFTAR MANFAAT MEMBER MAC</h2>
                     <div class="table-responsive table-member">
                        <table class="table table-striped align-middle text-white" data-aos="fade-up" data-aos-delay="200">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th></th>
                                 <th>Comminare</th>
                                 <th>Lentamente</th>
                                 <th>Correre</th>
                                 <th>Saltare</th>
                                 <th>Volare</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1.</td>
                                 <td>Apps MC20</td>
                                 <td>FREE</td>
                                 <td>FREE</td>
                                 <td>FREE</td>
                                 <td>FREE</td>
                                 <td>FREE</td>
                              </tr>
                              <tr>
                                 <td>2.</td>
                                 <td>BNI sm@rt247 MC20</td>
                                 <td>FREE</td>
                                 <td>FREE</td>
                                 <td>FREE</td>
                                 <td>FREE</td>
                                 <td>FREE</td>
                              </tr>
                              <tr>
                                 <td>3.</td>
                                 <td>Indosat post</td>
                                 <td>OPSI</td>                                 
                                 <td>OPSI</td>                                 
                                 <td>OPSI</td>                                 
                                 <td>OPSI</td>                                 
                                 <td>OPSI</td>                                 
                              </tr>
                              <tr>
                                 <td>4.</td>
                                 <td>Cashback *) ATPM  Servis</td>
                                 <td>-</td>                                 
                                 <td>-</td>                                 
                                 <td>5%</td>                                 
                                 <td>10%</td>                                 
                                 <td>15%</td>                                 
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Bvlgari</td>
                                 <td>Promo/ 5%</td>
                                 <td>Promo/ 5%</td>
                                 <td>Promo/ 10%</td>
                                 <td>Promo/ 10%</td>
                                 <td>Promo/ 15%</td>                                
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Zegna</td>
                                 <td>Promo/ 5%</td>
                                 <td>Promo/ 5%</td>
                                 <td>Promo/ 10%</td>
                                 <td>Promo/ 10%</td>
                                 <td>Promo/ 15%</td>                                
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Kuliner</td>
                                 <td>Promo</td>
                                 <td>Promo + 5%</td>
                                 <td>Promo/ 10%</td>
                                 <td>Promo/ 10%</td>
                                 <td>Promo/ 25%</td>                                
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Indosat post</td>
                                 <td>Promo/ 5%</td>
                                 <td>Promo/ 5%</td>
                                 <td>Promo/ 5%</td>
                                 <td>Promo/ 10%</td>
                                 <td>Promo/ 10%</td>                                
                              </tr>
                              <tr>
                                 <td>5.</td>
                                 <td>Extended Warranty **)</td>
                                 <td>-</td>
                                 <td>-</td>
                                 <td>opsi</td>
                                 <td>Opsi</td>
                                 <td>Opsi</td>                                
                              </tr>
                              <tr>
                                 <td>6.</td>
                                 <td>Manulife 3*)</td>
                                 <td>Opsi</td>
                                 <td>Opsi + 2.5%</td>
                                 <td>Opsi + 5%</td>
                                 <td>Opsi + 7.5%</td>
                                 <td>Opsi + 10%</td>                                
                              </tr>
                              <tr>
                                 <td>7.</td>
                                 <td>BNI sm@rt247</td>
                                 <td>-</td>
                                 <td>-</td>                               
                                 <td>-</td>                               
                                 <td>-</td>                               
                                 <td>-</td>                               
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Antar bank</td>
                                 <td>10 juta</td>
                                 <td>10 juta</td>                               
                                 <td>15 juta</td>                               
                                 <td>20 juta</td>                               
                                 <td>25 juta</td>                               
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Antar sm@rt247</td>
                                 <td>50 juta</td>
                                 <td>100 juta</td>                               
                                 <td>500 juta</td>                               
                                 <td>1 Milyar</td>                               
                                 <td>5 Milyar</td>                               
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Tunai</td>
                                 <td>10 juta</td>
                                 <td>10 juta</td>                               
                                 <td>10 juta</td>                               
                                 <td>10 juta</td>                               
                                 <td>10 juta</td>                               
                              </tr>
                              <tr>
                                 <td></td>
                                 <td><strong>"Essential" MAC 4*) : "One of itskinds"</strong></td>
                                 <td></td>
                                 <td></td>                               
                                 <td></td>                               
                                 <td></td>                               
                                 <td></td>                               
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>ZegnaMAChoodie</td>
                                 <td>Opsi</td>
                                 <td>Rp. 1,5 juta</td>                               
                                 <td>Rp. 3 juta</td>                               
                                 <td>Rp. 5 juta</td>                               
                                 <td>Rp. 15 juta</td>                               
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Huawei MACPro 40+</td>
                                 <td>Opsi</td>
                                 <td>Opsi</td>                               
                                 <td>Bonus</td>                               
                                 <td>Bonus + Cashback</td>                               
                                 <td>Bonus + Cashback</td>                               
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>MACPolo (all designs)</td>
                                 <td>20%</td>
                                 <td>50%</td>                               
                                 <td>Free</td>                               
                                 <td>Free</td>                             
                                 <td>Free</td>                             
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>MAC Watch by Bvlgari</td>
                                 <td>5%</td>
                                 <td>5%</td>                               
                                 <td>10%</td>                               
                                 <td>15%</td>                             
                                 <td>20%</td>                             
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>MAC Watch by Zenith</td>
                                 <td>5%</td>
                                 <td>5%</td>                               
                                 <td>10%</td>                               
                                 <td>15%</td>                             
                                 <td>20%</td>                             
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Maserati On Monza F1 Track (sertifikat)</td>
                                 <td>-</td>
                                 <td>-</td>                               
                                 <td>10% (15 laps)%</td>                               
                                 <td>25% (15 laps)%</td>                             
                                 <td>Free (15 laps)</td>                             
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Golf Tournament</td>
                                 <td>-</td>
                                 <td>-</td>                               
                                 <td>-</td>                              
                                 <td>-</td>                              
                                 <td>-</td>                              
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Safety Driving Course</td>
                                 <td>-</td>
                                 <td>-</td>                               
                                 <td>-</td>                              
                                 <td>-</td>                              
                                 <td>-</td>                              
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Travelling</td>
                                 <td>-</td>
                                 <td>-</td>                               
                                 <td>-</td>                              
                                 <td>-</td>                              
                                 <td>-</td>                              
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Airport Services</td>
                                 <td>Opsi</td>
                                 <td>Opsi</td>                               
                                 <td>Free</td>                              
                                 <td>Free</td>                              
                                 <td>Free</td>                              
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Business lounges</td>
                                 <td>25%</td>
                                 <td>25%</td>                               
                                 <td>Free 8x</td>                              
                                 <td>Free 8x +1</td>                              
                                 <td>Free for 2 unlimited</td>                              
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Cruises</td>
                                 <td>5%</td>
                                 <td>10%</td>                               
                                 <td>15%/ Upgrade</td>                              
                                 <td>20%/ Upgrade</td>                              
                                 <td>25%/ Suite</td>                              
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Online Money Changers 5*)</td>
                                 <td>Opsi</td>
                                 <td>Opsi</td>                               
                                 <td>free delivery</td>                              
                                 <td>free delivery</td>                                                           
                                 <td>free delivery</td>                                                           
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>  
      
   </div>
@endsection