<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<aside class="sidebar">

 
  <div class="sidebar-logo">
    <div class="logo-icon">
      <i class="fa-solid fa-paw"></i>
    </div>
    <span class="logo-text">AnimalPV</span>
  </div>

  
  <p class="sidebar-section-title">Menú principal</p>
  <nav>
    <ul>
      <li class="active">
        <a href="index.php">
          <i class="fa-solid fa-house"></i>
          Inicio
        </a>
      </li>
      <li class="has-submenu">
        <a href="#" class="submenu-toggle">
          <i class="fa-solid fa-paw main-icon"></i>
          <span class="label">Nuestros Animales</span>
          <i class="fa-solid fa-chevron-down arrow"></i>
        </a>
        <ul class="submenu">
          <li>
            <a href="gatos.php">
              <i class="fa-solid fa-cat"></i>
              Gatos
            </a>
          </li>
          <li>
            <a href="perros.php">
              <i class="fa-solid fa-dog"></i>
              Perros
            </a>
          </li>
          <li>
            <a href="loros.php">
              <i class="fa-solid fa-crow"></i>
              Loros
            </a>
          </li>
          <li>
            <a href="hamsters.php">
              <i class="fa-solid fa-shield-cat"></i>
              Hámsters
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="cita.php">
          <i class="fa-solid fa-calendar-days"></i>Citas</a></li>
      <li>
        <a href="#">
          <i class="fa-solid fa-heart"></i>
          Reencuentros
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-message"></i>
          Contacto
          <span class="nav-badge">2</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-bell"></i>
          Notificaciones
          <span class="nav-badge">3</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-bowl-food"></i>
          Alimentos
        </a>
      </li>
    </ul>
  </nav>

  <p class="sidebar-section-title">Información</p>
  <nav>
    <ul>
      <li>
        <a href="#">
          <i class="fa-solid fa-bullhorn"></i>
          Anuncios
        </a>
      </li>
    </ul>
  </nav>

  
  <div class="sidebar-footer">
   
    <div class="config-card">
      <div class="config-card-header">
        <i class="fa-solid fa-gear"></i>
        <span>¿Necesitas ayuda?</span>
      </div>
      <p class="config-card-text">Accede a la configuración y ajusta tu cuenta.</p>
      <a href="#" class="config-card-btn">Configuración</a>
    </div>

    <p class="sidebar-section-title" style="padding-top:8px;">Cuenta</p>

    <div class="account-card">
      <div class="account-avatar">
        <i class="fa-solid fa-user"></i>
      </div>
      <p class="account-text">Inicia sesión para acceder a todas las funciones</p>
      <a href="crud/Login.php" class="btn-login">
        <i class="fa-solid fa-right-to-bracket"></i>
        Iniciar Sesión
      </a>
      <a href="#" class="btn-register">
        ¿No tienes cuenta? <strong>Regístrate</strong>
      </a>
    </div>
  </div>

</aside>
