  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('back.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Tableau de Bord</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>RFGB</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('back.clients') }}">
              <i class="bi bi-circle"></i><span>Clients</span>
            </a>
          </li>
          <li>
            <a href="{{ route('back.clientsActifs') }}">
              <i class="bi bi-circle"></i><span>Comptes Actifs</span>
            </a>
          </li>
          <li>
            <a href="{{ route('back.clientsInactifs') }}">
              <i class="bi bi-circle"></i><span>Comptes Inactifs</span>
            </a>
          </li>
          <li>
            <a href="{{ route('back.depotsClients') }}">
              <i class="bi bi-circle"></i><span>Opérations de Dépot</span>
            </a>
          </li>
          <li>
            <a href="{{ route('back.virementsClients') }}">
              <i class="bi bi-circle"></i><span>Opérations de Virement</span>
            </a>
          </li>
          <li>
            <a href="{{ route('back.suiviOps') }}">
              <i class="bi bi-circle"></i><span>Suivi opérations</span>
            </a>
          </li>
          
           
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Paramètres</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('back.profileAdmin') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

 

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('contactsUi.index') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
 

    </ul>

  </aside><!-- End Sidebar-->