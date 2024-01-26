<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="inicio.php">SUMINIAPP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-folder-tree"></i> Documentación
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                  <a class="dropdown-item" href="{{ route("documentos-problema") }}">
                    <i class="fa-solid fa-brain"></i> Problema
                  </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" href="{{ route("documentos-er") }}">
                  <i class="fa-solid fa-diagram-project"></i> Diagrama E-R
                </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" href="{{ route("documentos-script") }}">
                  <i class="fa-solid fa-database"></i> Script SQL
                </a>
              </li>
              
              
            </ul>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="{{ route('historico-index') }}">
                <i class="fa-solid fa-chart-line"></i> Histórico
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedor-index') }}">
              <i class="fa-solid fa-truck-field-un"></i> Proveedores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('producto-index') }}">
              <i class="fa-solid fa-puzzle-piece"></i> Productos
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:red">
            <i class="fa-solid fa-user-ninja"></i> {{ auth()->user()->name; }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route("logout") }}"> <i class="fa-solid fa-right-from-bracket"></i>  Salir</a></li>
            </ul>
          </li>
        </ul> 
      </div>
    </div>
  </nav>