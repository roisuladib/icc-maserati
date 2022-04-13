<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Maserati Auto Club | @yield('title')</title>
   <link rel="shortcut icon" href="{{ url('/project/images/ic_logo.png') }}" type="image/x-icon" />           
   
   @stack('prepend-style')
   @include('includes.style')
   @stack('addon-style')

</head>
<body>
   <div class="maserati">
      
      {{-- Content --}}
      @yield('content')      
     
      {{-- Footer --}}
      @include('includes.footer')

   </div>

   {{-- Modal Navbar Mobile --}}
   @include('includes.navbar_mobile')
   
   {{-- Chat Box --}}
   @include('includes.chat_box')
   
   {{-- Script --}}
   @stack('prepend-script')
   @include('includes.script')
   @stack('addon-script')
     
</body>
</html>