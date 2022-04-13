@extends('layouts.admin')

@section('title', 'News / Photos')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">News / Photos</h2>
                  <p class="sub">Maserati for all</p>
               </div>
               <div id="data">
                  <div class="content">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card">
                              @if ($message = Session::get('success'))
                              <div class="alert alert-success alert-dismissible fade show m-0 mt-4 b-20" role="alert">
                                 <p class="m-0 text-danger"><strong>{{ $message }}</strong></p>
                                 <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                           @endif
                              <div class="card-body">                              
                                 <a href="{{ route('news-photos.create') }}" class="btn btn-pro mb-4">Add new</a>
                                 <div class="table-responsive">
                                    <table class="table table-hover table-striped scroll-horizonal-vertical w-100" id="crudTable">
                                       <thead>
                                          <tr>                                             
                                             <th>Id</th>
                                             <th>News</th>
                                             <th>Photo</th>                                                                                                                                                                                            
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>                         
                                    </table>
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
   </div>
@endsection

@push('addon-script')
   <script>
      const dataTable = $('#crudTable').DataTable({
         processing: true,
         serverSide: true,
         ordering: true,
         ajax: {
            url: '{!! url()->current() !!}'
         },
         columns: [
            {
               data: 'id',
               name: 'id',
               width: '1%'
            },
            {
               data: 'news.title',
               name: 'news.title'
            },
            {
               data: 'link',
               name: 'link'
            },
            {
               data: 'action',
               name: 'action',
               orderable: false,
               searchable: false,    
               width: '7%'           
            },
         ]
         
      });
   </script>
@endpush