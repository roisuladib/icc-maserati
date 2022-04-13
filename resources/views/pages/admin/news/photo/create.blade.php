@extends('layouts.admin')

@section('title', 'Create News')
@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Create News</h2>
                  <p class="sub">Maserati is really very good</p>
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
                                 <form method="POST" action="{{ route('news-photos.store') }}" id="createUser" class="my-form-auth" enctype="multipart/form-data">
                                    @csrf                
                                    <div class="form-group">
                                       <label for="photos_id">Title News</label>
                                       <select name="photos_id" class="form-control custom-select custom-input">
                                          <option value="" disabled selected>~ Select News ~</option>
                                          @foreach ($news as $new)
                                             <option value="{{ $new->id }}">
                                                {{ $new->title }}
                                             </option>
                                          @endforeach
                                       </select>
                                    </div>    
                                    <div class="form-group">
                                       <label for="link">Photo</label>
                                       <input type="file" name="link" id="link" class="form-control" />                                                            
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