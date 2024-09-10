<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #2c5d80;">
  <div class="container">
    <img src="/img/logo pusri.png" alt="logo pusri" style="width: 35px;margin-right: 20px;"> 
    <a class="navbar-brand" href="/">Departement<br>TI PSP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "FAQ") ? 'active' : ''}} " href="/faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Contact") ? 'active' : ''}} " href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>