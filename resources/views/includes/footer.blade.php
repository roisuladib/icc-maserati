<footer>         
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-6" data-aos="fade-down" data-aos-delay="100">
            <h3>{{ $footer->title }}</h3>
            <p>{{ $footer->description }}</p>
         </div>
         <div class="col-sm-12 col-md-6" data-aos="fade-down" data-aos-delay="200">
            <div class="text-right">
               <div class="row">
                  <div class="col-md-12 mb-3">
                     <div class="d-inline-block">
                        <a href="mailto:{{ $footer->email }}?subject=Catatan Anda Untuk Maserati Indonesia" target="_blank">
                           <img class="ic_email" src="{{ url('/project/images/ic_mail.svg') }}" title="Contact Me..." alt="Email" />                       
                           <span class="ft-cont" title="Contact Me...">Contact Us</span>   
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12">      
                     <form action="#" class="float-right">
                        <div class="form-group form-inline">                          
                           <input type="email" name="email" id="emal" class="form-control w-100" />                        
                           <button type="submit" class="btn btn-dark text-white">Send</button>                                                                                                                                                                                                                                                                                                                   
                        </div>                              
                     </form>                                                   
                  </div>
                  <div class="col-md-12 mt-3">
                     <div class="d-inline-block sosmed">
                        <a href="{{ $footer->facebook }}" target="_blank">
                           <img src="{{ url('/project/images/ic_fb.svg') }}" class="px-2" alt="Facebook" title="Facebook" />
                        </a>
                        <a href="{{ $footer->instagram }}" target="_blank">
                           <img src="{{ url('/project/images/ic_inst.svg') }}" class="px-2"  alt="Instagram" title="Instagram" />
                        </a>
                        <a href="{{ $footer->tweeter }}" target="_blank">
                           <img src="{{ url('/project/images/ic_tweet.svg') }}" class="px-2"  alt="Tweeter" title="Tweeter" />
                        </a>
                        <a href="{{ $footer->whatsapp}}">
                           <img src="{{ url('/project/images/ic_wa.svg') }}" class="px-2"  alt="WhatsApp" title="WhatsApp" />
                        </a>
                        <a href="{{ $footer->youtube }}" target="_blank">
                           <img src="{{ url('/project/images/ic_yt.svg') }}" class="pl-2"  alt="Youtube" title="Youtube" />
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>         
</footer> 