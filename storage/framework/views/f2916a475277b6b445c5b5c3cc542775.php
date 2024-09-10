  
  <?php $__env->startSection('container'); ?> 
  <div class="login justify-content-center d-flex" style="margin-top: 8rem;">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 style="text-center", class="card-title">Welcome to Pusri Guard</h5>
    <p class="card-text">Your trusted audit management solution</p>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="Log in" class="btn btn-primary">Log in</button>
</form>
  </div>
</div>
  </div>
  
   <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ratutarisya/Documents/applications/coba-laravel/resources/views/login.blade.php ENDPATH**/ ?>