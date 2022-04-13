@extends('layouts.auth')

@section('title')
    Login
@endsection
@section('content')
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <div class="content-auth">     
                        <div class="text-left">
                            <img src="{{ url('/project/images/ic_logo.png') }}" class="sign-logo" height="70px" />             
                            <h1 class="title-signin">Let's Begin</h1>  
                        </div>
                        <form method="POST" action="{{ route('login') }}" class="my-form-auth b-20">
                            @csrf                                
                            <div class="form-group">
                                <label for="email">Email address</label>                        
                                <input type="email" name="email" id="email"  class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>                        
                                <input type="password" name="password" id="password"  class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            {{-- <p class="text-right">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-link">
                                        Forgot password
                                    </a>                                   
                                @endif
                            </p>                      --}}
                            <div class="buttom-sign">
                                <button type="submit" class="btn btn-pro bt-auth">Login</button>
                            </div>
                        </form>           
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection
@push('script')
    <script src="{{ url('/project/vendor/bootstrap-4.6/js/bootstrap.min.js') }}"></script>
@endpush
