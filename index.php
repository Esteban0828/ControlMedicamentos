<?php 
include('./Components/ObtenerCantidades.php');
include('./Components/ObtenerUltimaTransaccion.php');
include('./Components/ObtenerProductosRecientes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedControl</title>
    <link rel="stylesheet" href="./Styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Android -->

    <meta name="theme-color" content="#F5F6F8"> </meta>

    <!-- IOS -->

    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" href="img/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-152x152.png">

    <!-- iPhone 8, 7, 6s, 6 (750px x 1334px) --> 
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="img/icons-ios/4.7 inch.png">
    <!-- iPhone X, Xs (1125px x 2436px) --> 
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" href="img/icons-ios/5.8 inch.png">
    <!-- iPhone 8 Plus, 7 Plus, 6s Plus, 6 Plus (1242px x 2208px) --> 
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3)" href="img/icons-ios/5.5 inch.png">
    <!-- iPhone 13 (1170px x 2532px) --> 
    <link rel="apple-touch-startup-image" media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3)" href="img/icons-ios/6.1 inch.png">

    <link rel="apple-touch-startup-image" media="screen and (device-width: 430px) and (device-height: 932px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="img/icons-ios/6.7 inch.png">
    <link rel="apple-touch-startup-image" media="screen and (device-width: 393px) and (device-height: 852px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="img/icons-ios/6.7 inch.png">
    <link rel="apple-touch-startup-image" media="screen and (device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="img/icons-ios/6.7 inch.png">

    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>
<body class="">
    <h1 class="title">Inicio</h1>
    
    <section class="pb-4 pe-3 ps-3">
        <div class="row align-items-center grupoCuadros mt-3 g-0 ">
            <a href="./pages/transacciones.php" class="col cuadro">
                    <div class="row">
                        <div class="recuadroicono mt-2 ms-3">
                                <svg class="iconoCuadro" xmlns="http://www.w3.org/2000/svg" width="28" height="25" viewBox="0 0 28 25" fill="none">
                                    <g clip-path="url(#clip0_9_76)">
                                    <path d="M27.4125 7.35348C28.1938 6.74313 28.1938 5.75192 27.4125 5.14157L21.4125 0.454071C20.6313 -0.156281 19.3625 -0.156281 18.5812 0.454071C17.8 1.06442 17.8 2.05563 18.5812 2.66598L21.1688 4.68747H2C0.89375 4.68747 0 5.38571 0 6.24997C0 7.11423 0.89375 7.81247 2 7.81247H21.1688L18.5812 9.83395C17.8 10.4443 17.8 11.4355 18.5812 12.0459C19.3625 12.6562 20.6313 12.6562 21.4125 12.0459L27.4125 7.35837V7.35348ZM6.58125 24.541C7.3625 25.1513 8.63125 25.1513 9.4125 24.541C10.1938 23.9306 10.1938 22.9394 9.4125 22.3291L6.83125 20.3125H26C27.1063 20.3125 28 19.6142 28 18.75C28 17.8857 27.1063 17.1875 26 17.1875H6.83125L9.41875 15.166C10.2 14.5556 10.2 13.5644 9.41875 12.9541C8.6375 12.3437 7.36875 12.3437 6.5875 12.9541L0.5875 17.6416C-0.19375 18.2519 -0.19375 19.2431 0.5875 19.8535L6.5875 24.541H6.58125Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_9_76">
                                        <rect width="28" height="25" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                        </div>
                    </div>
                        <div class="row cantidadCuadro">
                            <span><?php echo $count?></span>
                        </div>
                        <div class="row textoCuadro">
                            <span>Transacciones</span>
                        </div>
            </a>
            <a href="./pages/clientes.php" class="col cuadro2">
                <div class="row">
                    <div class="recuadroicono2">
                        <svg class="iconoCuadro  mt-2 ms-3" xmlns="http://www.w3.org/2000/svg" width="32" height="25" viewBox="0 0 32 25" fill="none">
                            <g clip-path="url(#clip0_7_53)">
                              <path d="M7.03125 0C8.06725 0 9.06082 0.41155 9.79339 1.14411C10.5259 1.87668 10.9375 2.87025 10.9375 3.90625C10.9375 4.94225 10.5259 5.93582 9.79339 6.66839C9.06082 7.40095 8.06725 7.8125 7.03125 7.8125C5.99525 7.8125 5.00168 7.40095 4.26911 6.66839C3.53655 5.93582 3.125 4.94225 3.125 3.90625C3.125 2.87025 3.53655 1.87668 4.26911 1.14411C5.00168 0.41155 5.99525 0 7.03125 0ZM25 0C26.036 0 27.0296 0.41155 27.7621 1.14411C28.4947 1.87668 28.9062 2.87025 28.9062 3.90625C28.9062 4.94225 28.4947 5.93582 27.7621 6.66839C27.0296 7.40095 26.036 7.8125 25 7.8125C23.964 7.8125 22.9704 7.40095 22.2379 6.66839C21.5053 5.93582 21.0938 4.94225 21.0938 3.90625C21.0938 2.87025 21.5053 1.87668 22.2379 1.14411C22.9704 0.41155 23.964 0 25 0ZM0 14.585C0 11.709 2.33398 9.375 5.20996 9.375H7.29492C8.07129 9.375 8.80859 9.5459 9.47266 9.84863C9.40918 10.2002 9.37988 10.5664 9.37988 10.9375C9.37988 12.8027 10.2002 14.4775 11.4941 15.625C11.4844 15.625 11.4746 15.625 11.46 15.625H1.04004C0.46875 15.625 0 15.1563 0 14.585ZM19.79 15.625C19.7803 15.625 19.7705 15.625 19.7559 15.625C21.0547 14.4775 21.8701 12.8027 21.8701 10.9375C21.8701 10.5664 21.8359 10.2051 21.7773 9.84863C22.4414 9.54102 23.1787 9.375 23.9551 9.375H26.04C28.916 9.375 31.25 11.709 31.25 14.585C31.25 15.1611 30.7812 15.625 30.21 15.625H19.79ZM10.9375 10.9375C10.9375 9.6943 11.4314 8.50201 12.3104 7.62294C13.1895 6.74386 14.3818 6.25 15.625 6.25C16.8682 6.25 18.0605 6.74386 18.9396 7.62294C19.8186 8.50201 20.3125 9.6943 20.3125 10.9375C20.3125 12.1807 19.8186 13.373 18.9396 14.2521C18.0605 15.1311 16.8682 15.625 15.625 15.625C14.3818 15.625 13.1895 15.1311 12.3104 14.2521C11.4314 13.373 10.9375 12.1807 10.9375 10.9375ZM6.25 23.6963C6.25 20.1025 9.16504 17.1875 12.7588 17.1875H18.4912C22.085 17.1875 25 20.1025 25 23.6963C25 24.4141 24.4189 25 23.6963 25H7.55371C6.83594 25 6.25 24.4189 6.25 23.6963Z" fill="#F5F6F8"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_7_53">
                                <rect width="31.25" height="25" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                    </div>
                </div>
                <div class="row cantidadCuadro2">
                    <span><?php echo $conteoClientes?></span>
                </div>
                <div class="row textoCuadro2">
                    <span>Clientes</span>
                </div>
            </a>
            
        </div>
    </section>

    <section class="mt-0">
        <h5 class="subtitle">Última transacción</h5>
        <div class="card" style="width: 100%;">
            <div class="ms-3">
              <div class="row align-items-center  p-3">
                <div class="col ms-0">
                    <div class="row gx-0 ms-0  align-items-center">
                        <div class="col fotoProducto">
                        <img class="col fotoProducto4" src="<?php echo $ultima_transaccion['ImagenProducto']; ?>" alt="Producto">
                        </div>
                            <svg class="col" xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                                <path d="M17.6223 10.8828C18.1246 10.3945 18.1246 9.60156 17.6223 9.11328L11.1938 2.86328C10.6915 2.375 9.87589 2.375 9.37366 2.86328C8.87143 3.35156 8.87143 4.14453 9.37366 4.63281L13.6125 8.75H1.28571C0.574554 8.75 0 9.30859 0 10C0 10.6914 0.574554 11.25 1.28571 11.25H13.6085L9.37768 15.3672C8.87545 15.8555 8.87545 16.6484 9.37768 17.1367C9.87991 17.625 10.6955 17.625 11.1978 17.1367L17.6263 10.8867L17.6223 10.8828Z" fill="#F41F1F"/>
                            </svg>
                        
                        <div class="col fotoCliente">
                        <img class=" fotoCliente2" src="<?php echo $ultima_transaccion['ImagenCliente']; ?>" alt="Cliente">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <?php 
                        $Nombre = strlen($ultima_transaccion['Nombre']) > 13 ? substr($ultima_transaccion['Nombre'], 0, 13) . '...' : $ultima_transaccion['Nombre'];
                        $ApellidoPaterno = strlen($ultima_transaccion['ApellidoPaterno']) > 10 ? substr($ultima_transaccion['ApellidoPaterno'], 0, 10) . '...' : $ultima_transaccion['ApellidoPaterno'];
                        $Fecha = date('d-m-Y', strtotime($ultima_transaccion['Fecha']));

                     ?>
                    <h6 class="NombreComercialCard"><?php echo $ultima_transaccion['NombreComercial']; ?></h6>
                    <p class="subtituloCard m-0"><?php echo $Fecha; ?></p>
                    <p class="subtituloCard m-0"><?php echo $Nombre. ' ' . $ApellidoPaterno; ?></p>
                    <p class="subtituloCard2 m-0"><?php echo $ultima_transaccion['Cantidad']; ?> pzs.</p>
                </div>
              </div>
            </div>
          </div>
    </section>
    
    <section class="mt-4 ultimacard mb-5">

        <div class="row align-items-start">
          <div class="col align-items-start">
            <h5 class="subtitle">Productos</h5>
          </div>
          <div class="col">
            <h5 class="subtitle2"><a class="subtitle2" href="./pages/productos.php">Ver todos</a></h5>
          </div>
        </div>

        <?php foreach ($ProductosRecientes as $Producto) { 
              $id_Producto = $Producto['Med_ID']; // Ajusta el nombre del campo según la estructura de tu tabla
              $url = "./vistas/vistaProducto.php?id=" . $id_Producto;
        ?>
          
        <a href="<?php echo $url; ?>" class="text-decoration-none">
            <div class="card mb-3" style="width: 100%;">
                <div class="ms-3">
                    <div class="row align-items-center ps-1 pt-3 pe-1 pb-3">
                        <div class="col-4 col-md-1 pe-0">
                            <div class=" pe-0">
                            <img class="fotoProducto2" src="<?php echo $Producto['Imagen']; ?>" alt="">
                            </div>
                        </div>
                        <?php
                                $nombreComercial = strlen($Producto['NombreComercial']) > 18 ? substr($Producto['NombreComercial'], 0, 18) . '...' : $Producto['NombreComercial'];
                                $PrincipioActivo = strlen($Producto['PrincipioActivo']) > 10 ? substr($Producto['PrincipioActivo'], 0, 10) . '...' : $Producto['PrincipioActivo'];
                                $Laboratorio = strlen($Producto['Laboratorio']) > 26 ? substr($Producto['Laboratorio'], 0, 26) . '...' : $Producto['Laboratorio'];
                                $fechaCaducidad = date('d-m-Y', strtotime($Producto['Caducidad']));
                        ?>
                        <div class="col-8 col-md ps-0">
                            <h6 class="NombreComercialCard2 mb-0"><?php echo $nombreComercial; ?></h6>
                            <p class="subtituloCardProducto m-0"><?php echo $Laboratorio; ?></p>
                            <p class="subtituloCardProducto m-0"><?php echo $fechaCaducidad; ?> | <?php echo $Producto['Anaquel']; ?></p>
                            <p class="subtituloCardProducto2 m-0"><?php echo $Producto['Existencia']; ?> pzs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    <?php } ?>

        <!-- <a href="./pages/vistas/vistaProducto.html" class="text-decoration-none">
            <div class="card mb-3" style="width: 100%;">
                <div class="ms-3">
                    <div class="row align-items-center ps-1 pt-3 pe-1 pb-3">
                        <div class="col-4 col-md-1 pe-0">
                            <div class="fotoProducto2 pe-0"></div>
                        </div>
                        <div class="col-8 col-md ps-0">
                            <h6 class="NombreComercialCard2 mb-0">NombreComercial</h6>
                            <p class="subtituloCardProducto m-0">PrincipioActivo  |  Anaquel A1</p>
                            <p class="subtituloCardProducto m-0">Laboratorio</p>
                            <p class="subtituloCardProducto2 m-0">9 pzs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </a> --> 
    </section>

    <nav class="nav">
        <a href="./pages/agregar.html" class="nav__link align-items-end">
          <i class="material-icons nav__icon"><svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.2857 4.375C14.2857 3.40703 13.4877 2.625 12.5 2.625C11.5123 2.625 10.7143 3.40703 10.7143 4.375V12.25H2.67857C1.69085 12.25 0.89286 13.032 0.89286 14C0.89286 14.968 1.69085 15.75 2.67857 15.75H10.7143V23.625C10.7143 24.593 11.5123 25.375 12.5 25.375C13.4877 25.375 14.2857 24.593 14.2857 23.625V15.75H22.3214C23.3092 15.75 24.1071 14.968 24.1071 14C24.1071 13.032 23.3092 12.25 22.3214 12.25H14.2857V4.375Z" fill="#5F6873"/>
            </svg>
            </i>
        </a>
       
        <a href="#" class="nav__link">
          <i class="material-icons nav__icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="57" height="57" viewBox="0 0 238 238">
            <image width="238" height="238" xlink:href="data:img/png;base64,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"/>
            <image id="house-solid_1" data-name="house-solid 1" x="70" y="75" width="99" height="88" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGMAAABYCAYAAADhhkn7AAADn0lEQVR4nO2d7XXaMBSGJU7/Nxu0naB0A7JBuwHZoEyQZoK0E8AGyQakE0AnSDtB2OD2iF73GHIAy7pXurLf53digx5LfvWFXI0Q0RUR3RPRCx2yJqJZlV+qRljEhs7zdezlpA4RTYno+YKIhuXAi6McLOK4WbrEQ6hJYy0zFYhoHimhzQZChEgU0RCETAdRIKUI7b6AiIYXCOkBJyZJEW0hn6srkFJ0jK6pzMdZuhFwYtIW0XBfTcHkpmd0TQV9kWM4MeUW0bBG9GWEomsq6IsoJaa+jDP6KkZXCIkhU3RNpUj0neS8GT91a+ec9advWUKIz3WjloiaXpQr7/1NrptlqRn8lNUmIjDnd1uWz61eM1hE7Z2rrXPu2nu/07yJas3gHu4Qern7JpaI3mveRK1msIihDcjtuIZsNS4uLoPb1xoSU1+CkC/e+yfpC4s2U1yNhyzCcQhZa0RfMRkcXTcDF9EmpKxvkhcUkcGzZzVG11RuJYfhk98ZA4muqTw6525So2+SDJ4tw+q9fyT3RXrLGGh0TeU3J61e0Tdaxgiiayq9+yJRL/CRRNdUekffzjWj0lHX0oSX+qrrZ+hUM0YcXVNZxiwJulgzEF1F6DQvclYGoqsoF6PvSRmIriqcFfJKBqKrOiej78ELHNE1C030fVXG/2WMcNS1JEHI5rgvspeBPkQxlu2duZ6bpg1EFGXhvf8eZDw457CbpzwfggwaeykYYZF1eSc4yxVkGGLCnRBQnu2E529BWXbe+8cgY8HThaAc+xHdCQ9aXTvnxFfIgYs0qxP3rdPBQCH3xE/1Od5hFDea8ID/PPFPoTV6bI/gxky7znjIBHTnznvfedUhoq0hIMMQkGEIyDAEZBgCMgwBGbp8jLk6ZOgSNXsKGYZ4U9Fn3fIQwq+Of/+WV7pMa5nfr0HGlgfTeo0s86K8sALjVv6jyWK9mXry3n/qKyIQBuJ4fCjbD7L0xboMsQLkfRKd90qUwLKMVUqNOMEP4euJYlnGH+kLav3mhxSItoaADENAhiEgwxCQYQjIMARkGAIyDAEZhoAMQ0CGISDDEJChS9SoM2ToEjXyDBmGgAxDxMjIPTGjtZPK7Ja5zjJ4h01OIVr3yrldLmrzamwzlWsOeaV4cMid0nWP2apP8/Lp85o8ax+rE35QXvk75Dlijo920xKS7RD18PuLSt8h/1l/fAyo1Hl7oTaIHn/Q8TvMBB+sICEI7lernXN/AYVfMlOL0ks+AAAAAElFTkSuQmCC"/>
          </svg>
          </i>
        </a>
      
      
        <a href="./pages/configuracion.html" class="nav__link align-items-start">
          <i class="material-icons nav__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_9_83)">
            <path d="M22.8869 7.68898C23.0346 8.09051 22.91 8.53818 22.5916 8.82433L20.5932 10.6427C20.6439 11.0258 20.6716 11.4181 20.6716 11.815C20.6716 12.2119 20.6439 12.6042 20.5932 12.9873L22.5916 14.8057C22.91 15.0918 23.0346 15.5395 22.8869 15.941C22.6839 16.4902 22.4393 17.0164 22.1577 17.524L21.9408 17.8979C21.6362 18.4056 21.2947 18.8855 20.9209 19.3378C20.6486 19.6701 20.1963 19.7809 19.7901 19.6517L17.2194 18.8348C16.601 19.3101 15.9179 19.7071 15.1887 20.007L14.6118 22.6423C14.5195 23.0623 14.1965 23.3946 13.7719 23.4639C13.135 23.57 12.4796 23.6254 11.8104 23.6254C11.1412 23.6254 10.4858 23.57 9.84891 23.4639C9.42431 23.3946 9.10124 23.0623 9.00894 22.6423L8.43203 20.007C7.70283 19.7071 7.01977 19.3101 6.40133 18.8348L3.83526 19.6563C3.42912 19.7855 2.97683 19.6701 2.70453 19.3424C2.33069 18.8902 1.98917 18.4102 1.68456 17.9025L1.46764 17.5287C1.18612 17.021 0.941508 16.4948 0.738437 15.9456C0.59075 15.5441 0.715361 15.0964 1.03381 14.8103L3.03221 12.9919C2.98144 12.6042 2.95375 12.2119 2.95375 11.815C2.95375 11.4181 2.98144 11.0258 3.03221 10.6427L1.03381 8.82433C0.715361 8.53818 0.59075 8.09051 0.738437 7.68898C0.941508 7.13977 1.18612 6.61363 1.46764 6.10596L1.68456 5.73212C1.98917 5.22444 2.33069 4.74446 2.70453 4.29217C2.97683 3.95987 3.42912 3.84911 3.83526 3.97833L6.40594 4.79523C7.02439 4.31986 7.70744 3.92295 8.43665 3.62296L9.01355 0.98766C9.10586 0.567674 9.42892 0.235377 9.85353 0.166148C10.4904 0.0553828 11.1458 0 11.815 0C12.4842 0 13.1396 0.0553828 13.7765 0.161533C14.2011 0.230762 14.5241 0.563058 14.6164 0.983045L15.1934 3.61834C15.9226 3.91833 16.6056 4.31524 17.2241 4.79061L19.7947 3.97372C20.2009 3.84449 20.6532 3.95987 20.9255 4.28755C21.2993 4.73985 21.6408 5.21983 21.9454 5.72751L22.1624 6.10134C22.4439 6.60902 22.6885 7.13515 22.8916 7.68436L22.8869 7.68898ZM11.815 15.5072C12.7942 15.5072 13.7334 15.1182 14.4258 14.4258C15.1182 13.7334 15.5072 12.7942 15.5072 11.815C15.5072 10.8358 15.1182 9.89665 14.4258 9.20423C13.7334 8.51181 12.7942 8.12281 11.815 8.12281C10.8358 8.12281 9.89665 8.51181 9.20423 9.20423C8.51181 9.89665 8.12281 10.8358 8.12281 11.815C8.12281 12.7942 8.51181 13.7334 9.20423 14.4258C9.89665 15.1182 10.8358 15.5072 11.815 15.5072Z" fill="#5F6873"/>
            </g>
            <defs>
            <clipPath id="clip0_9_83">
            <rect width="23.63" height="23.63" fill="white"/>
            </clipPath>
            </defs>
            </svg>
            </i>
        </a>
      </nav>
    </body>

<script>
        // Función para obtener parámetros de la URL
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }
        
        // Verificar si el parámetro 'registro_exitoso' está presente en la URL
        var registroExitoso = getParameterByName('registro_exitoso');
        if (registroExitoso === 'true') {
            // Mostrar una alerta de SweetAlert
            Swal.fire({
                icon: 'success',
                title: '¡Registro exitoso!',
                text: 'El cliente se ha registrado correctamente.',
                showConfirmButton: false,
                 timer: 2500 // Cerrar automáticamente después de 3 segundos
            });
        }

        // Verificar si el parámetro 'registro_producto' está presente en la URL
        var registroExitoso2 = getParameterByName('registro_exitoso2');
        if (registroExitoso2 === 'true') {
            // Mostrar una alerta de SweetAlert
            Swal.fire({
                icon: 'success',
                title: '¡Registro exitoso!',
                text: 'El producto se ha registrado correctamente.',
                showConfirmButton: false,
                 timer: 2500 // Cerrar automáticamente después de 3 segundos
            });
        }
    </script>
</html>