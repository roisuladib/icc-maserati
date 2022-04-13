<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
   <a class="sidebar-brand d-flex align-items-center justify-content-center my-4" href="{{ route('admin') }}">
       <div class="sidebar-brand-icon">
           <img src="{{ url('/project/images/ic_navbar.svg') }}" alt="">
       </div>
       <div class="sidebar-brand-text ml-3">Maserati</div>
   </a>
    <li class="nav-item {{ (request()->is('adib') ? 'active' : '') }}">
        <a class="nav-link px-4" href="{{ route('admin') }}">
        <ion-icon class="mr-2" name="heart"></ion-icon>
           <span>Overview</span>
        </a>
    </li>
    <li class="nav-item" {{ (request()->is('adib/home/*') ? 'active' : '') }}>
        <a class="nav-link collapsed px-4" href="#" data-toggle="collapse" data-target="#home"
            aria-expanded="true" aria-controls="home">
            <ion-icon class="mr-2" name="home"></ion-icon>
            <span>Home</span>
        </a>
        <div id="home" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-collapse py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('headers.index') }}">Header</a>
                <a class="collapse-item" href="{{ route('latar-belakang.index') }}">Latar Belakang</a>
                <a class="collapse-item" href="{{ route('tabs.index') }}">Tab</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ (request()->is('adib/member*') ? 'active' : '') }}">
        <a class="nav-link collapsed px-4" href="#" data-toggle="collapse" data-target="#member"
            aria-expanded="true" aria-controls="member">
            <ion-icon class="mr-2" name="ribbon"></ion-icon>
            <span>Member</span>
        </a>
        <div id="member" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-collapse py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('level.index') }}">Level</a>
                <a class="collapse-item" href="{{ route('tab.index') }}">Tab</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ (request()->is('adib/activities*') ? 'active' : '') }}">
        <a class="nav-link px-4" href="{{ route('activities.index') }}">
            <ion-icon class="mr-2" name="alarm"></ion-icon>
            <span>Activity</span>
        </a>
    </li>
    <li class="nav-item {{ (request()->is('adib/news') ? 'active' : '') }}">
        <a class="nav-link px-4" href="{{ route('news.index') }}">
            <ion-icon class="mr-2" name="notifications"></ion-icon>
            <span>News</span>
        </a>
    </li>
    <li class="nav-item {{ (request()->is('adib/news-photos*') ? 'active' : '') }}">
        <a class="nav-link px-4" href="{{ route('news-photos.index') }}">
            <ion-icon class="mr-2" name="camera"></ion-icon>
            <span>Gallery</span>
        </a>
    </li>
    <li class="nav-item {{ (request()->is('adib/footer*') ? 'active' : '') }}">
        <a class="nav-link px-4" href="{{ route('footer.index') }}">
            <ion-icon class="mr-2" name="leaf"></ion-icon>
            <span>Footer</span>
        </a>
    </li>
    <li class="nav-item {{ (request()->is('adib/users*') ? 'active' : '') }}">
        <a class="nav-link px-4" href="{{ route('users.index') }}">
            <ion-icon class="mr-2" name="person"></ion-icon>
            <span>Users</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link px-4" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <ion-icon class="mr-2" name="exit"></ion-icon>
            <span>Log out</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
             </form>
        </a>
    </li>
</ul>