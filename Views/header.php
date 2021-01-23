<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi Local</title>
 
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon"  href="Assets/img/logo.png"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="overlay-scollbar">
<!--Nabvar--->
  <div class="navbar">
    <ul class="navbar-nav">
      <!--Navbar Izquierdo-->
      <li class="nav-item">
        <a class="nav-link">
          <i class="fas fa-bars" onclick="collapseSidebar()"></i>
        </a>
      </li>
      <li class="nav-item">
          <img src="Assets/img/logo.png" alt="ServiLogo" class="logo logo-light">
          <img src="Assets/img/logo.png" alt="ServiLogo" class="logo logo-dark">

      </li>
    </ul>
    <!--Final izquierdo-->
    <!--Nav Derecho-->

     <ul class="navbar-nav nav-right">
     <li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li>
      <li class="nav-item dropdown">
        <a class="nav-link">
        <i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu" ></i>
        <span class="navbar-badge">15</span>
      </a>
      <ul id="notification-menu" class="dropdown-menu notification-menu">

       <div class="dropdown-menu-header">
          <span>Notificaciones</span>
        </div>
        <div class="dropdown-menu-content overlay-scrollbar">
          <li class="dropdown-menu-item">
             <a href="#" class="dropdown-menu-link">
                <div>
                  <i class="fas fa-gift"></i>
                </div>
                <span>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br>
                <span>
                   15/01/2021
                </span>
              </span>
             </a>
          </li>
        </div>
        <div class="dropdown-menu-footer">
          <span>Todas las Notificaciones</span>
        </div>
      </ul>
      </li>
      <li class="nav-item">
        <div class="user dropdown">
          <img src="Assets/img/perfil.jpg" alt="User imagen" class="dropdown-toggle" data-toggle="user-menu">
          <ul id="user-menu" class="dropdown-menu">
            <li class="dropdown-menu-item">
              <a class="dropdown-menu-link">
                <div >
                  <i class="fas fa-user-tie"></i>
                </div>
                <span>Perfil</span>
              </a>
            </li>
            <li class="dropdown-menu-item">
              <a href="#nombre" class="dropdown-menu-link">
                <div >
                  <i class="fas fa-user-cog"></i>
                </div>
                <span>Configuracion</span>
              </a>
            </li>
            <li class="dropdown-menu-item">
              <a href="#nombre" class="dropdown-menu-link">
                <div >
                  <i class="fas fa-user-cog"></i>
                </div>
                <span>Cerrar Sesion</span>
              </a>
            </li>

          </ul>
        </div>
      </li>
    </ul>
     <!--End nav rigth-->
  </div>
  <!--End navbar-->

 <!-- sidebar -->
 <div id="menu" class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="?c=inicio" class="sidebar-nav-link">
					<div>
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<span>
						Panel
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="?c=producto" class="sidebar-nav-link active=?">
					<div>
						<i class="fas fa-poll-h"></i>
					</div>
					<span>Productos</span>
				</a>
			</li>
			
		</ul>
  </div> 
  <!--End sidebar-->
 

 

