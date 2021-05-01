<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Ejemplo de Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
  <body>
    
<header class="site-header sticky-top py-1" style="background-color: #003049;">
  <nav class="container d-flex flex-column flex-md-row justify-content-between" style="color: #fff;">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="#">Nosotros</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Productos</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Contacto</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Soporte</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Precio</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Información</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Carrito</a>
  </nav>
</header>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Laboratorio 08</h1>
      <p class="lead fw-normal">Este Laboratorio fue realizado por Lincoln Martinez</p>
      <a class="btn btn-outline-secondary" href="#">Registrate</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Producto 1</h2>
        <p class="lead">Producto de gran calidad.</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Producto 2</h2>
        <p class="lead">Diseño responsivo.</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Framework css</h2>
        <p class="lead">Booststrap</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Framework</h2>
        <p class="lead">Marco de trabajo.</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Backend</h2>
        <p class="lead">Programado en php.</p>
      </div>
      <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Frontend</h2>
        <p class="lead">html, css.</p>
      </div>
      <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  </div>
</main>

<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
    </div>
    <div class="col-6 col-md">
      <h5>Caracteristicas</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#"></a></li>
        <li><a class="link-secondary" href="#">Características aleatorias</a></li>
        <li><a class="link-secondary" href="#">Características de equipo</a></li>
        <li><a class="link-secondary" href="#">Desarrolladores</a></li>
        <li><a class="link-secondary" href="#">Otros</a></li>
        <li><a class="link-secondary" href="#">Ultima vez</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Recursos</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Negocio</a></li>
        <li><a class="link-secondary" href="#">Educación</a></li>
        <li><a class="link-secondary" href="#">Gobierno</a></li>
        <li><a class="link-secondary" href="#">Juegos</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Nosotros</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Equipo</a></li>
        <li><a class="link-secondary" href="#">Locaciones</a></li>
        <li><a class="link-secondary" href="#">Privacidad</a></li>
        <li><a class="link-secondary" href="#">Terminos</a></li>
      </ul>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      
  </body>
</html>
