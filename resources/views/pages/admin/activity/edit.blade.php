@extends('layouts.admin')

@section('title', 'Edit Activity')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Edit Activity</h2>
                  <p class="sub">Maserati is really easy very goods</p>
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
                                 <form method="POST" action="{{ route('activities.update', $activity->id) }}" class="my-form-auth" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf                
                                    <div class="form-group">
                                       <label for="title">Title</label>
                                       <input type="text" name="title" id="title" class="form-control" value="{{ $activity->title }}" required autofocus />                                                            
                                    </div>
                                    <div class="form-group">
                                          <label for="description">Description</label>
                                          <textarea id="description" name="description" class="form-control" rows="5">
                                             {{ $activity->description }}
                                          </textarea>
                                    </div>       
                                    <div class="form-group">
                                       <label for="date">Date</label>
                                       <input type="date" name="date" id="date" class="form-control" value="{{ $activity->date }}"  />                                                            
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