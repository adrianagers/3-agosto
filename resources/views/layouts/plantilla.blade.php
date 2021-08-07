<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse  justify-content-center"  id="navbarNav">
            <ul class="navbar-nav   ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" hfref="inicio" >INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca-de">PORTAFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes-somos">CONTACTANOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar-->

<div class="">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-3 bg-info">
            <br><br>
            <ul class="list-group list-group-flush  ">
                <li class="list-group-item bg-info text-uppercase fs-5 ">Accion </li>
                <li class="list-group-item bg-info text-uppercase fs-5 ">Drama</li>
                <li class="list-group-item bg-info text-uppercase fs-5 ">Comedia</li>
                <li class="list-group-item bg-info text-uppercase fs-5 ">Terror</li>
                <li class="list-group-item bg-info text-uppercase fs-5 ">Fantasia</li>
                <li class="list-group-item bg-info text-uppercase fs-5 ">Ficcion</li>
                <li class="list-group-item bg-info text-uppercase fs-5 ">Belico</li>
                <li class="list-group-item bg-info text-uppercase fs-5 ">Deportivo</li>
                <li class="list-group-item bg-info text-uppercase fs-5 ">Suspenso</li>
                <li class="list-group-item bg-info text-uppercase fs-5 ">Historico</li>
            </ul>
            <br><br>
        </div>
        <!--End Sidebar -->
        <!-- Content--->
        <div class="col-md-9" style="">
             @yield('contenido')
        </div>
        <!-- end Content-->
    </div>
</div>
<footer  class="fixed-bottom p-4 color- bg-dark">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias cum dolore explicabo incidunt laborum laudantium nihil qui sapiente. Asperiores excepturi id magni veniam? Consequatur corporis exercitationem fugiat provident sit!
</footer>


</body>
</html>
