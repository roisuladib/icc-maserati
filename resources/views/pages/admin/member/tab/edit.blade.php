@extends('layouts.admin')

@section('title', 'Edit Member / Tabs')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Edit Member / Tabs</h2>
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
                                 <form method="POST" action="{{ route('tab.update', $tab->id) }}" id="createUser" class="my-form-auth" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf   
                                    <div class="form-group">
                                          <label for="tab1"> Tab 1</label>
                                          <textarea type="tab1" name="tab1" id="tab" class="form-control" rows="3">
                                             {!! $tab->tab1 !!}
                                          </textarea>                      
                                    </div>                                              
                                    <div class="form-group">
                                          <label for="tab2"> Tab 2</label>
                                          <textarea type="tab2" name="tab2" id="tab" class="form-control" rows="3">
                                             {!! $tab->tab2 !!}
                                          </textarea>                      
                                    </div>                                              
                                    <div class="form-group">
                                          <label for="tab3"> Tab 3</label>
                                          <textarea type="tab3" name="tab3" id="tab" class="form-control" rows="3">
                                             {!! $tab->tab3 !!}
                                          </textarea>                      
                                    </div>                                              
                                    <div class="form-group">
                                          <label for="tab4"> Tab 4</label>
                                          <textarea type="tab4" name="tab4" id="tab" class="form-control" rows="3">
                                             {!! $tab->tab4 !!}
                                          </textarea>                      
                                    </div>                                              
                                    <div class="form-group">
                                          <label for="tab5"> Tab 5</label>
                                          <textarea type="tab5" name="tab5" id="tab" class="form-control" rows="3">
                                             {!! $tab->tab5 !!}
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