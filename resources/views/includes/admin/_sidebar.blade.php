<div class="navigation">
   <ul>
      <li>
         <a href="#">
            <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
            <span class="title">Maserati</span>
         </a>
      </li>
      <li class="{{ (request()->is('adib*') ? 'active' : '') }}">
         <a href="{{ route('admin') }}">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="title">Overview</span>
         </a>
      </li>
      <li>
         <a href="{{ route('users.index') }}">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
            <span class="title">Users</span>
         </a>
      </li>
      <li>
         <a href="{{ route('activites.index') }}">
            <span class="icon"><ion-icon name="bulb-outline"></ion-icon></ion-icon></span>
            <span class="title">Activities</span>
         </a>
      </li>
      <li>
         <a href="#">
            <span class="icon"><ion-icon name="notifications-outline"></ion-icon></ion-icon></span>
            <span class="title">News</span>
         </a>
      </li>
      <li>
         <a href="#">
            <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
            <span class="title">Message</span>
         </a>
      </li>
      <li>
         <a href="#">
            <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
            <span class="title">Help</span>
         </a>
      </li>
      <li>
         <a href="#">
            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
            <span class="title">Settings</span>
         </a>
      </li>      
      <li>
         <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
            <span class="title">Sign Out</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
         </a>
      </li>
   </ul>
</div>