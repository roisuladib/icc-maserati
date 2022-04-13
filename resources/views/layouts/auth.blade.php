<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title')</title>
   <link rel="shortcut icon" href="{{ url('/project/images/ic_logo.png') }}" type="image/x-icon/png" />
   <link rel="stylesheet" href="{{ url('/project/vendor/bootstrap-4.6/css/bootstrap.min.css') }}" />    
   <link rel="stylesheet" href="{{ url('/project/style/main.css') }}" />
   @stack('style')
</head>
<body>

   @yield('content')
   
   @stack('script')
</body>
</html>