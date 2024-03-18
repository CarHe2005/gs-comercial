<?php
//Aqui se encontrara el formulario del login para ingresar a los index, con sus funciones correspondientes, no incluye su logica
// la incluye en la direccion de abajo.
include "controlador/loginvalidar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login Usuario</title>
    <link rel="icon" href="vista/img/icon.ico">
    <link rel="stylesheet" href="vista/login.css">
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Icons -->
</head>
<!-- carrusel de img, netamente decorativo, no tiene ninguna función relevante o que realice algun cambio en el ingreso.-->
<body class="bg-light">
      <section>
            <div class="row g-0">
                  <div class="col-lg-7 d-none d-lg-block">
                        <div id="carouselExampleIndicators" class="carousel slide">
                              <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                              <div class="carousel-inner">
                                <div class="carousel-item img-1 min-vh-100 active">
                                  <!-- <img src="vista/img/carrusel1.jpg" class="d-block w-100" alt="..."> -->
                                </div>
                                <div class="carousel-item img-2 min-vh-100">
                                  <!-- <img src="vista/img/carrusel2.jpg" class="d-block w-100" alt="..."> -->
                                </div>
                                <div class="carousel-item img-3 min-vh-100">
                                  <!-- <img src="vista/img/carrusel3.jpg" class="d-block w-100" alt="..."> -->
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                  </div>
                  <!-- formulario, se encuentran los inputs de ingreso de la info, tener presente que su metodo de envio es metodo
                  POST si este cambia puede dar problemas en el envio y verificación de la info, debe ser el mismo metodo que el de el controlador-->
                  <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
                        <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-2">
                            <img src="vista/img/logo.png" alt="Logo El Gran Surtidor" class="img-fluid p-4" id="logoElGranSurtidor"> 
                        </div>
                        <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                              <h1 class="font-weight-bold mb-2">Acceda a su cuenta</h1>
                              <form method="POST" action="">
                                    <div class="mb-4">
                                      <label for="correo" class="form-label font-weight-bold">Usuario</label>
                                      <input type="text" class="form-control bg-hueso border-0" placeholder="Ingresa tu Usuario" name="COR_USU" id="COR_USU" >
                                    </div>
                                    <div class="mb-4">
                                      <label for="contraseña" class="form-label font-weight-bold">Contraseña</label>
                                      <input type="password" class="form-control bg-hueso border-0" placeholder="Ingresa tu Contraseña" name="CON_USU" id="CON_USU">
                                    </div>
                                    <button type="submit" href="./sedes/index.html" class="btn btn-primary w-100 border-0" id="iniciar">Iniciar Sesión</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </section>
                        </body>
                        </html>
