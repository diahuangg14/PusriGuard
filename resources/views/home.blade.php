@extends('layouts.main')
  
  @section('container') 
  
  <div class="home text-start">

  <div class="text" style="width: 30rem;margin-top: 13rem;margin-left: -50px;">

  <h1 style="font-size: 3rem;font-weight: bold;">Welcome Back</h1> 
  <p> Our Audit Management Application streamlines audit processes, ensuring compliance and efficiency.
    It offers features for planning, conducting, and reporting audits,
     with real-time analytics and automated workflows. 
    The user-friendly interface and robust security ensure high 
    standards of governance and accountability.</p>

    <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" href="/login">Log in</a>

    <img style="position:absolute; top:50px;right: 0;z-index: -1;" src="/img/baruu.png" alt="baruu">
  </div>
  </div>

 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Log in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card-body">
    <h5 style="text-center", class="card-title">Welcome to Pusri Guard</h5>
    <p class="card-text">Your trusted audit management solution</p>
    <form method="post" enctype="multipart/form-data" action="/login">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="Log in" class="btn btn-primary">Log in</button>
</form>
  </div>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

   
   @endsection

