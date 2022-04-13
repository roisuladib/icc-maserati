@extends('layouts.admin')

@section('title')
   Create Users
@endsection
@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Create New User</h2>
                  <p class="sub">List of Users in Maserati</p>
               </div>
               <div id="formInput">
                  <div class="content">
                     <div class="row">
                        <div class="col-md-12">
                           @if ($errors->any())
                              <div class="alert alert-danger">
                                 <ul>
                                    @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                    @endforeach
                                 </ul>
                              </div>
                           @endif
                           <div class="card shadow b-20">
                              <div class="card-body">
                                 <form method="POST" action="{{ route('users.store') }}" id="createUser" class="my-form-auth" enctype="multipart/form-data">
                                    @csrf                
                                    <div class="form-group">
                                       <label for="name">Full name</label>
                                       <input type="text" name="name" id="name" class="form-control" required autofocus />                                                            
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
                                       <label for="telephone">Telephone</label>
                                       <input type="number" name="telephone" id="telephone" class="form-control" required />                                                 
                                    </div>  
                                    <div class="form-group">
                                        <label for="photo">Photo</label>
                                        <input type="file" name="photo" id="photo" accept="image/*" class="form-control" />                                               
                                     </div>   
                                    <div class="form-group">
                                       <label for="role">Role</label>
                                       <select name="role" id="role" class="form-control custom-select" required>
                                          <option value="ADMIN" selected>~ Select Role ~</option>
                                          <option value="ADMIN">ADMIN</option>
                                          <option value="USER">USER</option>
                                       </select>
                                    </div>                                                
                                    <button type="submit" class="btn btn-pro bt-auth">Save</button>
                                </form>   
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@push('addon-script')
    <script src="{{ url('/project/vendor/vue-2/vue.js') }}"></script>
    <script src="{{ url('/project/vendor/vue-2/vue-toasted.min.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        Vue.use(Toasted);
        let signUp = new Vue({
            el: '#createUser',
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
                                '<strong style="font-weight: 600;"> Email &nbsp;</strong> is available', {
                                    position: 'top-center',
                                    className: 'toas-av',                                
                                    backgroundColor: '#20bf6b',
                                    duration: 5700
                                }
                            );
                            self.emailUnavailable =  false;
                            
                        }
                        else {
                            self.$toasted.error(
                                '<strong style="font-weight: 600;"> Email &nbsp;</strong> is already created!', {
                                    position: 'top-center',
                                    className: 'toas-un',
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