<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags --> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" intergrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxbOOl7
+AMvyTG2x" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<link href="/css/style.css" 
rel="stylesheet" >

<title>Pusri Guard | <?php echo e($title); ?></title> 
</head> 
<body> 

<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-4">
    <?php echo $__env->yieldContent('container'); ?>
</div>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <?php if(session()->has('success')): ?>
        <script>
            toastr.success("<?php echo e(session('success')); ?>");
        </script>
    <?php elseif(session()->has('error')): ?>
        <script>
            toastr.error("<?php echo e(session('error')); ?>");
        </script>
    <?php elseif(session()->has('info')): ?>
        <script>
            toastr.warning("<?php echo e(session('info')); ?>");
        </script>
    <?php endif; ?>
 </body>
</html><?php /**PATH C:\xampp\htdocs\pusri1\resources\views/layouts/main.blade.php ENDPATH**/ ?>