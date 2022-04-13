@extends('layouts.admin')

@section('title', 'Edit Home / Header')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Edit Home / Header</h2>
                  <p class="sub">Maserati is really is easy very goods</p>
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
                                 <form method="POST" action="{{ route('headers.update', $header->id) }}" class="my-form-auth" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf                
                                    <div class="form-group">
                                       <label for="photo">Photo</label>
                                       <input type="file" name="photo" id="photo" accept=".png, .jpg, .jpeg. gif, .svg" value="{{ Storage::url($header->photo) }}" class="form-control">                                                   
                                    </div>
                                    <div class="form-group">
                                       <label for="description"></label>
                                       <textarea type="text" name="description" id="description" class="form-control" rows="5">{{ $header->description }}</textarea>                                                                                             
                                    </div>                                               
                                    <div class="form-group">
                                       <label for="name">Name</label>
                                       <input type="text" name="name" id="name" value="{{ $header->name }}" class="form-control" required>                                                   
                                    </div>                                           
                                    <div class="form-group">
                                       <label for="job">Job</label>
                                       <input type="text" name="job" id="job" value="{{ $header->job }}" class="form-control" required>                                                   
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
@endpush