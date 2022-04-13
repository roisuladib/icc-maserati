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
                                 <form method="POST" action="{{ route('news.store') }}" id="createUser" class="my-form-auth" enctype="multipart/form-data">
                                    @csrf                
                                    <div class="form-group">
                                          <label for="title">Title</label>
                                          <input type="text" name="title" id="title" class="form-control" required autofocus />                                                            
                                    </div>
                                    <div class="form-group">
                                          <label for="content">Content</label>
                                          <textarea id="contentku" name="content"></textarea>
                                    </div>    
                                    <div class="form-group">
                                       <label for="youtube">Link Iframe Youtube</label>
                                       <textarea name="youtube" id="youtube" rows="3" class="form-control"></textarea>                                                                                                
                                   </div>  
                                    <div class="form-group">
                                       <label for="date">Date</label>
                                       <input type="date" name="date" id="date" class="form-control" />                                                            
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
      .create( document.querySelector( '#contentku' ) )
      .then( editor => {
               console.log( editor );
      } )
      .catch( error => {
               console.error( error );
      } );
  </script>
@endpush