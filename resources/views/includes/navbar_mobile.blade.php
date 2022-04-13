<!-- Modal Nav-->        
<div class="modal fade" id="modalNavMobile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalNavMobileLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <a href="{{ route('/') }}">
               <img src="{{ url('/project/images/ic_logo.png') }}" height="50px" alt="Logo" />                                                                                                               
            </a>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item align-self-start px-1">                     
                  <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('/') }}">
                     <img src="{{ url('/project/images/navbar-mobile/ic_home.png') }}" alt="Home" />
                     HOME
                  </a>                                 
               </li>                            
               <li class="nav-item align-self-start px-1">
                  <a class="nav-link {{ (request()->is('member*')) ? 'active' : '' }}" href="{{ route('member') }}">
                     <img src="{{ url('/project/images/navbar-mobile/ic_members.png') }}" alt="Member" />
                     MEMBER
                  </a>
               </li>                                                        
               <li class="nav-item align-self-start px-1">
                  <a class="nav-link {{ (request()->is('activity*')) ? 'active' : '' }}" href="{{ route('activity') }}">
                     <img src="{{ url('/project/images/navbar-mobile/ic_activity.png') }}" alt="Activity" />
                     ACTIVITY
                  </a>
               </li>                                                        
               <li class="nav-item align-self-start px-1">
                  <a class="nav-link pr-0 {{ (request()->is('news*')) ? 'active' : '' }}" href="{{ route('news') }}">
                     <img src="{{ url('/project/images/navbar-mobile/ic_news.png') }}" alt="News" />
                     NEWS
                  </a>
               </li>                                            
            </ul> 
         </div>         
      </div>
   </div>
</div>