<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-2 pt-3">
    <ul class="nav flex-column pt-3 pt-md-0">
      <a href="/dashboard">
        <li class="nav-item mb-3 mt-4">
          <span class="nav-link d-flex justify-content-between align-items-center">
            <span>
              <i class="fa-solid fa-house"></i>
              <span class="sidebar-text">Inicio</span>
            </span>
          </span>
        </li>
      </a>
      <a href="/profile">
        <li class="nav-item mb-3 mt-4">
          <span class="nav-link d-flex justify-content-between align-items-center">
            <span>
            <i class="fa-solid fa-user"></i>
              <span class="sidebar-text">Perfil</span>
            </span>
          </span>
        </li>
      </a>
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
      <a href="/receitas">
        <li class="nav-item mb-3">
          <span class="nav-link d-flex justify-content-between align-items-center">
            <span>
              <i class="fa-solid fa-plus"></i>
              <span class="sidebar-text">Adicionar Receita</span>
            </span>
          </span>
        </li>
      </a>
      <a href="/despesas">
        <li class="nav-item mb-3">
          <span class="nav-link d-flex justify-content-between align-items-center">
            <span>
              <i class="fa-solid fa-minus"></i>
              <span class="sidebar-text">Adicionar Despesa/Gasto</span>
            </span>
          </span>
        </li>
      </a>
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
      <li class="nav-item mb-3">
        <span
          class="nav-link {{ Request::segment(1) !== 'bootstrap-tables' ? 'collapsed' : '' }} d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-app">
          <span>
          <i class="fa-solid fa-dollar-sign"></i>
            <span class="sidebar-text">Consulta de Tansações</span>
          </span>
        </span>
        <div class="multi-level collapse {{ Request::segment(1) == 'bootstrap-tables' ? 'show' : '' }}" role="list"
          id="submenu-app" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::segment(1) == 'bootstrap-tables' ? 'active' : '' }}">
              <a class="nav-link" href="/bootstrap-tables">
                <span class="sidebar-text">Geral</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="multi-level collapse {{ Request::segment(1) == 'bootstrap-tables' ? 'show' : '' }}" role="list"
          id="submenu-app" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::segment(1) == 'bootstrap-tables' ? 'active' : '' }}">
              <a class="nav-link" href="/bootstrap-tables">
                <span class="sidebar-text">Por Categoria</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="multi-level collapse {{ Request::segment(1) == 'bootstrap-tables' ? 'show' : '' }}" role="list"
          id="submenu-app" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::segment(1) == 'bootstrap-tables' ? 'active' : '' }}">
              <a class="nav-link" href="/bootstrap-tables">
                <span class="sidebar-text">Por Conta</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item mb-3">
        <span
          class="nav-link  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#reports">
          <span>
          <i class="fa-solid fa-paste"></i>
            <span class="sidebar-text">Relatorios</span>
          </span>
        </span>
        <div class="multi-level collapse" role="list" id="reports" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="/bootstrap-tables">
                <span class="sidebar-text">Balanço Geral</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="multi-level collapse" role="list"
          id="reports" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="/bootstrap-tables">
                <span class="sidebar-text">Por Categoria</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="multi-level collapse" role="list"
          id="reports" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="/bootstrap-tables">
                <span class="sidebar-text">Por Conta</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="multi-level collapse" role="list"
          id="reports" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="/bootstrap-tables">
                <span class="sidebar-text">Por Data</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
    </ul>
  </div>
</nav>
