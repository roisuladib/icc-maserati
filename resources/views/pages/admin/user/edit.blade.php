@extends('layouts.admin')

@section('title', 'Edit Users')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Edit New User</h2>
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
                                 <form method="POST" action="{{ route('users.update', $user->id) }}" id="createUser" class="my-form-auth" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf                
                                    <div class="form-group">
                                       <label for="name">Full name</label>
                                       <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required autofocus />                                                            
                                   </div>
                                   <div class="form-group">
                                       <label for="email">Email address</label>
                                       <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" />                      
                                   </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" />                                                                         
                                    </div>
                                    <div class="form-group">
                                       <label for="telephone">Telephone</label>
                                       <input type="number" name="telephone" id="telephone" class="form-control" value="{{ $user->telephone }}" required />                                                 
                                    </div>    
                                    <div class="form-group">
                                       <label for="photo">Photo</label>
                                       <input type="file" name="photo" id="photo" accept="image/*" class="form-control" />                                               
                                    </div>    
                                    <div class="form-group">
                                       <img src="{{ Storage::url($user->photo) }}" width="100" style="border-radius: 100%" alt="">                                             
                                    </div>    
                                    <div class="form-group">
                                       <label for="role">Role</label>
                                       <select name="role" id="role" class="form-control custom-select" required>
                                          <option value="{{ $user->role }}" selected>~ {{ $user->role }} ~</option>
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