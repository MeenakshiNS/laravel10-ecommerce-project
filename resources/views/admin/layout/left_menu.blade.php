<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('admin.dashboard') }}" class="brand-link">
    <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">EKart</span>
    </a>
    
    <div class="sidebar">
    
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block">Alexander Pierce</a>
    </div>
    </div>
    
   
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
   
    <li class="nav-item">
    <a href="{{ route('admin.dashboard') }}" class="nav-link">
    <i class="nav-icon fas fa-th"></i>
    <p>
    Dashboard 📊
    </p>
    </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('admin.product.list') }}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
        Products 🛍️
        </p>
        </a>
        </li>

        <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Logout 🚨
            </p>
            </a>
            </li>
   
    </ul>
    </nav>
    
    </div>
    
    </aside>