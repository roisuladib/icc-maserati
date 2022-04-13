@extends('layouts.auth')

@section('title')
    Register
@endsection

@section('content')
<section class="auth" id="signUp">
    <div class="container">
       <div class="row">    
          <div class="col-sm-12 col-lg-6 text-center d-none d-lg-block">
             <img src="{{ url('/project/images/ilus-login.jpg') }}" class="sign-ilus" height="460px" />
          </div>           
          <div class="col-sm-12 col-lg-4 align-middle">
             <div class="content-auth">
             <div class="text-left">
                <img src="{{ url('/project/images/ic_logo.png') }}" class="sign-logo" height="60px" />             
                <h1 class="title-signin">Register</h1>
             </div>
                <form method="POST" action="{{ route('register') }}" id="signUp" class="my-form-auth b-20">
                    @csrf                
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" v-model="name" required autocomplete="name" autofocus />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                      
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" v-model="email" value="{{ old('email') }}" @change="checkForEmailAvailability()" :class="{ 'is-invalid' : this.emailUnavailable }" required autocomplete="email" />                      
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" required/>                                          
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control" required autocomplete="new-password" />                                          
                    </div>                                                        
                    <div class="buttom-sign">
                      <button type="submit" :disabled="this.emailUnavailable" class="btn btn-pro bt-auth">Sign up</button>
                      <a href="{{ route('login') }}" type="button" class="btn btn-alt bt-auth">Log in</a>
                    </div>
                </form>                  
             </div>
          </div>
       </div>
    </div>
 </section> 
@endsection
@push('script')
    <script src="{{ url('/project/vendor/vue-2/vue.js') }}"></script>
    <script src="{{ url('/project/vendor/vue-2/vue-toasted.min.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        Vue.use(Toasted);
        let signUp = new Vue({
            el: '#signUp',
            methods: {
                checkForEmailAvailability: function () {
                    let self = this;
                    axios.get('{{ route('api-register-check') }}', {
                        params: {
                            email:this.email
                        }
                    }).then(function (response) {
                        if (response.data == 'Available') {
                            self.$toasted.show(
                                'Your email is available, please register immediately', {
                                    position: 'top-center',
                                    className: ['toas-av'],                                
                                    backgroundColor: '#20bf6b',
                                    duration: 5700
                                }
                            );
                            self.emailUnavailable =  false;
                            
                        }
                        else {
                            self.$toasted.error(
                                'Sorry, it seems that the email is already registered on our system !', {
                                    position: 'top-center',
                                    className: ['toas-un'],
                                    duration: 5700
                                }
                            );
                            self.emailUnavailable =  true;                        
                        }
                        // handle success
                        console.log(response)
                    });
                }
            },      
            data (){
                return {
                    name: '',
                    email: '',         
                    emailUnavailable: false,                                    
                }
            },     
        }); 
    </script>
@endpush
