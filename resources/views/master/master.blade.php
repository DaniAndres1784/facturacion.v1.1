<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facturacion V1.1</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="nav has-shadow" id="top">
    <div class="container">
      <div class="nav-left">
        <a class="nav-item" href="../index.html">
          <img src="../images/bulma.png" alt="Description">
        </a>
      </div>
      <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>
      <div class="nav-right nav-menu">
        <a class="nav-item is-tab is-active">
          Inicio
        </a>
        <a class="nav-item is-tab">
          Facturacion
        </a>
        <a class="nav-item is-tab">
          Servicios
        </a>
        <a class="nav-item is-tab">
        Pagos
        </a>
        <span class="nav-item">
          <a class="button">
            Log in
          </a>
          <a class="button is-info">
            Sign up
          </a>
        </span>
      </div>
    </div>
  </nav>
  @yield('contenido')
</body>
</html>