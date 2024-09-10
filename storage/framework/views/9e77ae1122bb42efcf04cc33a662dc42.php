<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #2c5d80;">
  <div class="container">
    <img src="/img/logo pusri.png" alt="logo pusri" style="width: 35px;margin-right: 10px"> 
    <a class="navbar-brand" href="/">Pusri<br>Guard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === "Home") ? 'active' : ''); ?>" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === "FAQ") ? 'active' : ''); ?> " href="/faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === "Contact") ? 'active' : ''); ?> " href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH /Users/ratutarisya/Documents/applications/coba-laravel/resources/views/partials/navbar.blade.php ENDPATH**/ ?>