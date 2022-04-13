@extends('layouts.admin')

@section('title', 'Edit Footer')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Edit Footer</h2>
                  <p class="sub">Edit footer is really is easy very goods</p>
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
                                 <form method="POST" action="{{ route('footer.update', $footer->id) }}" id="createUser" class="my-form-auth" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf                
                                    <div class="form-group">
                                       <label for="title">Title</label>
                                       <input type="text" name="title" id="title" class="form-control" value="{{ $footer->title }}" required />                                                            
                                   </div>
                                   <div class="form-group">
                                       <label for="dexcription">Description</label>
                                       <textarea type="dexcription" name="dexcription" id="dexcription" class="form-control" rows="3" required autofocus>
                                          {{ $footer->description }}"
                                       </textarea>                      
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="email">Link Email</label>
                                             <input type="text" name="email" id="email" value="{{ $footer->email }}" class="form-control" />                                                                         
                                          </div> 
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="facebook">Link Facebook</label>
                                             <input type="text" name="facebook" id="facebook" value="{{ $footer->facebook }}" class="form-control" />                                                                         
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="instagram">Link Instagram</label>
                                             <input type="text" name="instagram" id="instagram" value="{{ $footer->instagram }}" class="form-control" />                                                                         
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="tweeter">Link Tweeter</label>
                                             <input type="text" name="tweeter" id="tweeter" value="{{ $footer->tweeter }}" class="form-control" />                                                                         
                                          </div>   
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="whatsapp">Link Whatsapp</label>
                                             <input type="text" name="whatsapp" id="whatsapp" value="{{ $footer->whatsapp }}" class="form-control" />                                                                         
                                          </div>    
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="youtube">Link Youtube</label>
                                             <input type="text" name="youtube" id="youtube" value="{{ $footer->youtube }}" class="form-control" />                                                                         
                                          </div>  
                                       </div>  
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="copyright">Copyright</label>
                                             <input type="text" name="copyright" id="copyright" value="{{ $footer->copyright }}" class="form-control" />                                                                         
                                          </div>                                       
                                       </div>                                  
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="popchat">Link Popup Chat</label>
                                             <input type="text" name="popchat" id="popchat" value="{{ $footer->popchat }}" class="form-control" />                                                                         
                                          </div>                                       
                                       </div>                                  
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