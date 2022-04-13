@extends('layouts.admin')

@section('title', 'News / Videos')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="content-admin" data-aos="fade-up">
               <div class="heading">
                  <h2 class="title">News / Videos</h2>
                  <p class="sub">Maserati for all</p>
               </div>
               <div id="data">
                  <div class="content">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card">
                              <div class="card-body">                              
                                 <a href="{{ route('news-videos.create') }}" class="btn btn-pro mb-4">Add new</a>
                                 <div class="table-responsive">
                                    <table class="table table-hover table-striped scroll-horizonal-vertical w-100" id="crudTable">
                                       <thead>
                                          <tr>                                             
                                             <th>Id</th>
                                             <th>News</th>
                                             <th>Video</th>                                                                                                                                                                                            
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