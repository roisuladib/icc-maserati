@extends('layouts.admin')

@section('title')
   Home / Latar Belakang
@endsection

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Home / Latar Belakang</h2>
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
                                 <div class="table-responsive">
                                    <table class="table table-hover table-striped scroll-horizonal-vertical w-100" id="crudTable">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>Description</th>
                                             <th>Title 1</th>
                                             <th>Benefit 1</th>                                          
                                             <th>Title 2</th>
                                             <th>Benefit 2</th>                                          
                                             <th>Title 3</th>
                                             <th>Benefit 3</th>                                          
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
               data: 'description',
               name: 'description'
            },
            {
               data: 'title_1',
               name: 'title_1'
            },
            {
               data: 'benefit_1',
               name: 'benefit_1'
            },
            {
               data: 'title_2',
               name: 'title_2'
            },
            {
               data: 'benefit_2',
               name: 'benefit_2'
            },
            {
               data: 'title_3',
               name: 'title_3'
            },
            {
               data: 'benefit_3',
               name: 'benefit_3'
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