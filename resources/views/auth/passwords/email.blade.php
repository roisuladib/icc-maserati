@extends('layouts.auth')

@section('title')
    Forgot Password
@endsection
@section('content')
<section class="auth">
    <div class="container">
       <div class="row">
          <div class="col-sm-12 col-lg-6 text-center d-none d-lg-block">
             <img src="{{ url('/project/images/ilus-login.jpg')}}" class="sign-ilus" height="460px" />
          </div>
          <div class="col-sm-12 col-lg-4 align-middle">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
             <div class="content-auth">                  
                <img src="{{ url('/project/images/ic_logo.png') }}" class="sign-logo" height="60px" />             
                <h1 class="title-signin">Forgot Password</h1>   
                <p class="title-forgot-password">Make sure your account is registered manually not via Google Account</p>                
                <form action="{{ route('password.email') }}" method="POST" class="my-form-auth b-20">
                    @csrf
                   <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus autocomplete="email" required/>                       
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                   </div>                                       
                   <div class="buttom-sign">
                      <button type="submit" class="btn btn-pro bt-auth">Send Your Email</button>                        
                   </div>
                </form>           
             </div>
          </div>
       </div>
    </div>
</section>
@endsection
