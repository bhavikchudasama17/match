<!-- Author:bhavik chudasama
admin sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
  
  <div class="sidebar-brand-text mx-3">TUBE </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{{route('adm.index')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>DASHBOARD</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Menu
</div>
<li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>TABLES</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Tables:</h6>
           
            <a class="collapse-item" href="#">Users</a>
            
          </div>
        </div>
      </li>
<!-- Nav Item - Pages Collapse Menu -->

    <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Components:</h6>
      <a class="collapse-item" href="buttons.html">Buttons</a>
      <a class="collapse-item" href="cards.html">Cards</a>
    </div>
  </div> -->


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="tables.html">
  <i class='fas fa-phone-volume'></i>
    <span>CONTACT US</span></a>
</li>
<li class="nav-item">
@if(Auth::user()->email=='bhavik1@gmail.com')         
      <a href="admin/register" class="nav-link"><span>Add Admin</span></a>
      <a href="#" class="nav-link"><span>Admins</span></a>            

            
@endif
</li>
<li class="nav-item">
  <a class="nav-link" href="tables.html">
  <i class='fas fa-exclamation-circle'></i>
    <span>ABOUT US</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>