<aside class="main-sidebar sidebar-dark-primary elevation-4">



<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Ayu Diah P</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    @foreach ($projects as $project)
<li class="nav-item">
<a href="{{ route('codes', ['project_id' => $project->id]) }}" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
{{ $project->project }}
<i class="right fas fa-angle-right"></i>
</p>
</a>
</li>
@endforeach



<li class="nav-item">
<a href="#" data-toggle="modal" data-target="#modal-default4" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Create New Project

</p>
</a>
</li>
</ul>
</aside>