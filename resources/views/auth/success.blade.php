@extends('layouts.auth')

@section('title')
   Succes Register
@endsection

@section('content')   
   <section class="auth" id="success">
      <div class="container">
         <div class="row align-items-center justify-content-center" data-aos="fade-in">
            <div class="col-sm-12 col-lg-6 text-center">
               <img src="{{ url('/project/images/ic_logo.png') }}" width="300px" alt="Success">
               <h3>Welcome to Maserati Auto Club Indonesia</h3>
               <p>You have successfully registered with us. Let's grow up now !</p>
               <div class="row">
                  <div class="col-sm-12">
                     <a href="{{ route('admin') }}" class="btn btn-pro btn-sukses">Go to ADMIN</a>                                    
                  </div>                  
               </div>
            </div>
         </div>
      </div>
   </section>   
@endsection