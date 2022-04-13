@extends('layouts.admin')

@section('title')
   Home / Header
@endsection

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Home / Latar Header</h2>
                  <p class="sub">Maserati for all</p>
               </div>
               <div id="data">
                  <div class="content">
                     <div class="row">
                        <div class="col-md-12">
                           @if ($message = Session::get('success'))
                              <div class="alert alert-success alert-dismissible fade show m-0 mt-4 b-20" role="alert">
                                 <p class="m-0 text-danger"><strong>{{ $message }}</strong></p>
                                 <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                           @endif
                           <div class="card">
                              <div class="card-body">                              
                                 <a href="{{ route('headers.create') }}" class="btn btn-pro mb-4">Add new</a>
                                 <div class="table-responsive">
                                    <table class="table table-hover table-striped scroll-horizonal-vertical w-100" id="crudTable">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>Photo</th>
                                             <th>Description</th>
                                             <th>Name</th>
                                             <th>Job</th>                                        
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody></tbody>                           
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
               name: 'id'
            },
            {
               data: 'photo',
               name: 'photo'
            },
            {
               data: 'description',
               name: 'description'
            },
            {
               data: 'name',
               name: 'name'
            },
            {
               data: 'job',
               name: 'job'
            },
            {
               data: 'action',
               name: 'action',
               orderable: false,
               searchable: false,
               width: '9%'
            },
         ]
         
      });
   </script>
@endpush