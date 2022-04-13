@extends('layouts.admin')

@section('title')
   Selamat Datang {{ Auth::user()->name }}
@endsection

@section('content')     
<div class="container-fluid">
   <div class="row">
       <div class="col-lg-12">
          <div class="content-admin">
             <div class="heading">
                <h2 class="title">Overview</h2>
                <p class="sub">Welcome to in Maserati</p>
             </div>
          </div>
         <div class="card-box">
            <div class="my-card">
               <div>
                  <div class="numbers">170.599</div>
                  <div class="card-name">Daily views</div>
               </div>
               <div class="icon-box">
                  <ion-icon name="eye-outline"></ion-icon>
               </div>
            </div>
            <div class="my-card">
               <div>
                  <div class="numbers">1099</div>
                  <div class="card-name">Messages</div>
               </div>
               <div class="icon-box">
                  <ion-icon name="chatbubbles-outline"></ion-icon>
               </div>
            </div>
            <div class="my-card">
               <div>
                  <div class="numbers">1799</div>
                  <div class="card-name">Members</div>
               </div>
               <div class="icon-box">
                  <ion-icon name="cash-outline"></ion-icon>
               </div>
            </div>
         </div>
       </div>
   </div>
</div>
@endsection