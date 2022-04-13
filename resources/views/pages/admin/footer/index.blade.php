@extends('layouts.admin')

@section('title', 'Footer')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">Footer</h2>
                  <p class="sub">List of Footer in Maserati</p>
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
                                             <th>Title</th>
                                             <th>Description</th>
                                             <th>Email</th>
                                             <th>Facebook</th>
                                             <th>Instagram</th>
                                             <th>Tweeter</th>
                                             <th>Whatsapp</th>
                                             <th>Youtube</th>
                                             <th>Capyright</th>
                                             <th>Popup Chat</th>
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
               data: 'title',
               name: 'title'
            },
            {
               data: 'description',
               name: 'description'
            },
            {
               data: 'email',
               name: 'email'
            },
            {
               data: 'facebook',
               name: 'facebook'
            },
            {
               data: 'instagram',
               name: 'instagram'
            },
            {
               data: 'tweeter',
               name: 'tweeter'
            },
            {
               data: 'whatsapp',
               name: 'whatsapp'
            },
            {
               data: 'youtube',
               name: 'youtube'
            },
            {
               data: 'copyright',
               name: 'copyright'
            },
            {
               data: 'popchat',
               name: 'popchat'
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