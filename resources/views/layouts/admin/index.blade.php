<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>ADMIN ~ @yield('title') {{ Auth::user()->name }}</title>
   <link rel="shortcut icon" href="{{ url('/project/images/ic_logo.png') }}" type="image/x-icon" />           

   @stack('prepend-style')
   @include('includes.admin.style')
   @stack('addon-style')
   
</head>
<body>
   <div class="my-container">
      
      @include('includes.admin.sidebar')

      <!-- Main Content -->
      <div class="main">
         <div class="topbar">
            <div class="my-toggle">
               <ion-icon name="menu-outline"></ion-icon>
            </div>
            <!-- Search -->
            <div class="search">
               <label>
                  <input type="text" name="" id="" placeholder="Search here.." />
                  <ion-icon name="search-outline"></ion-icon>
               </label>
            </div>
            <!-- User Image -->
            <div class="user">
               <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" style="border-radius: 100%" alt="{{ Auth::user()->name }}" title="Login by {{ Auth::user()->name }}">
            </div>
         </div>

         @yield('content')         

      </div>
   </div>

   @stack('prepend-script')
   @include('includes.admin.script')
   @stack('addon-script')

</body>
</html>