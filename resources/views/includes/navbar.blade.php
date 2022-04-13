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