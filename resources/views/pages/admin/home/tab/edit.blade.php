@extends('layouts.admin')

@section('title', 'Edit Home / Tabs')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Edit Home / Tabs</h2>
                  <p class="sub">Edit Tabs is really easy very goods</p>
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
                                 <form method="POST" action="{{ route('tabs.update', $tabs->id) }}" id="createUser" class="my-form-auth" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf   
                                    <div class="form-group">
                                          <label for="tab_1"> Tab 1</label>
                                          <textarea type="tab_1" name="tab_1" id="tab" class="form-control" rows="3">
                                             {!! $tabs->tab_1 !!}
                                          </textarea>                      
                                    </div>                                              
                                    <div class="form-group">
                                          <label for="tab_2"> Tab 2</label>
                                          <textarea type="tab_2" name="tab_2" id="tab" class="form-control" rows="3">
                                             {!! $tabs->tab_2 !!}
                                          </textarea>                      
                                    </div>                                              
                                    <div class="form-group">
                                          <label for="tab_3"> Tab 3</label>
                                          <textarea type="tab_3" name="tab_3" id="tab" class="form-control" rows="3">
                                             {!! $tabs->tab_3 !!}
                                          </textarea>                      
                                    </div>                                              
                                    <div class="form-group">
                                          <label for="tab_4"> Tab 4</label>
                                          <textarea type="tab_4" name="tab_4" id="tab" class="form-control" rows="3">
                                             {!! $tabs->tab_4 !!}
                                          </textarea>                      
                                    </div>                                              
                                    <div class="form-group">
                                          <label for="tab_5"> Tab 5</label>
                                          <textarea type="tab_5" name="tab_5" id="tab" class="form-control" rows="3">
                                             {!! $tabs->tab_5 !!}
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
      const tabs = document.querySelectorAll('#tab');
      for (var i = 0; i < tabs.length; ++i) {
         ClassicEditor.create(tabs[i]);
      }
   </script>
@endpush