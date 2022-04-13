@extends('layouts.admin')

@section('title', 'Edit Latar Belakang')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Edit Latar Belakang</h2>
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
                                 <form method="POST" action="{{ route('latar-belakang.update', $latar->id) }}" class="my-form-auth" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf                
                                    <div class="form-group">
                                       <label for="description">Description</label>
                                       <textarea type="text" name="description" id="description" class="form-control">{!! $latar->description !!}</textarea>                                                            
                                   </div>
                                   <div class="form-group">
                                       <label for="title_1">Title 1</label>
                                       <input type="text" name="title_1" id="title_1" value="{{ $latar->title_1 }}" class="form-control" />                                                                                                                  
                                   </div>                                               
                                   <div class="form-group">
                                       <label for="benefit_2">Benefit 1</label>
                                       <textarea type="text" name="benefit_2" id="benefit_2" class="form-control" rows="3">
                                          {{ $latar->benefit_1 }}
                                       </textarea>                                                                                                                  
                                   </div>                                               
                                   <div class="form-group">
                                       <label for="title_2">Title 1</label>
                                       <input type="text" name="title_2" id="title_2" value="{{ $latar->title_2 }}" class="form-control" />                                                                                                                  
                                   </div>                                               
                                   <div class="form-group">
                                       <label for="benefit_2">Benefit 1</label>
                                       <textarea type="text" name="benefit_2" id="benefit_2" class="form-control" rows="3">
                                          {{ $latar->benefit_2 }}
                                       </textarea> 
                                   </div>                                               
                                   <div class="form-group">
                                       <label for="title_3">Title 1</label>
                                       <input type="text" name="title_3" id="title_3" value="{{ $latar->title_3 }}" class="form-control" />                                                                                                                  
                                   </div>                                               
                                   <div class="form-group">
                                       <label for="benefit_3">Benefit 3</label>
                                       <textarea type="text" name="benefit_2" id="benefit_2" class="form-control" rows="3">
                                          {{ $latar->benefit_3 }}
                                       </textarea> 
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
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<script>
   ClassicEditor
           .create( document.querySelector( '#description' ) )
           .then( editor => {
                   console.log( editor );
           } )
           .catch( error => {
                   console.error( error );
           } );
</script>
@endpush