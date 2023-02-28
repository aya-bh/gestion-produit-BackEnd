






<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ route('accueil') }}" class="nav-link {{ Route::is('accueil') ? 'active' : '' }} ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Tableau du bord
          </p>
        </a>
       
      </li>
      @role('admin')
      <li class="nav-item">
        <a href="{{ route('utilisateur.accueil') }}" class="nav-link {{ Route::is('utilisateur.accueil') ? 'active' : '' }}">
          <i class="nav-icon fas fa-solid fa-users"></i>
          <p>
            Gestion des utilisateurs
          </p>
        </a>
      </li>
      <!--<li class="nav-item">
        <a href="{{ route('roles.accueil') }}" class="nav-link {{ Route::is('roles.accueil') ? 'active' : '' }}">
          <i class="nav-icon  fas fa-archive"></i>
          <p>
            Gestion des rôles
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('permissions.accueil') }}" class="nav-link {{ Route::is('permissions.accueil') ? 'active' : '' }}">
          <i class="nav-icon fas fa-exclamation-circle"></i>
          <p>
            Gestion des permissions
          </p>
        </a>
      </li> -->
      <li class="nav-item">
        <a href="{{ route('categorie.accueil') }}" class="nav-link {{ Route::is('categorie.accueil') ? 'active' : '' }}">
          <i class="nav-icon fas fa-align-justify"></i>
          <p>
            Gestion des Catégories
          </p>
        </a>
     
      </li>
      @endrole
      <li class="nav-item">
        <a href="{{ route('produit.accueil') }}" class="nav-link {{ Route::is('produit.accueil') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tree"></i>
          <p>
            Gestion des produits
          </p>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->