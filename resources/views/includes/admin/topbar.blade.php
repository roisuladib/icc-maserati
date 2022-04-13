<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top">
   <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
       <i class="fa fa-bars"></i>
   </button>
   <div class="search d-none d-lg-block ml-auto mt-2">
       <form action="">
           <label>
              <input type="text" name="" id="" placeholder="Search here.." />
              <ion-icon name="search-outline"></ion-icon>
           </label>
       </form>
   </div>
   <ul class="navbar-nav ml-0">
       <li class="nav-item dropdown no-arrow d-sm-none">
           <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-search fa-fw"></i>
           </a>
           <!-- Dropdown - Messages -->
           <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
               aria-labelledby="searchDropdown">
               <form class="form-inline mr-auto w-100 navbar-search">
                   <div class="input-group">
                       <input type="text" class="form-control bg-light border-0 small"
                           placeholder="Search for..." aria-label="Search"
                           aria-describedby="basic-addon2">
                   </div>
               </form>
           </div>
       </li>

       <li class="nav-item">
           <a class="nav-link" href="#">
               <span style="color: #0c0d36" class="mr-2 d-none d-lg-inline">{{ Auth::user()->name }}</span>
               <img src="{{ Storage::url(Auth::user()->photo) }}" style="border-radius: 100%; widht: 45px; height: 45px;" alt="{{ Auth::user()->name }}" title="Login by {{ Auth::user()->name }}">
           </a>
       </li>

   </ul>
</nav>