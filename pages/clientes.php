<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedControl</title>
    <link rel="stylesheet" href="../Styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
  .group {
 display: flex;
 line-height: 28px;
 align-items: center;
 position: relative;
 max-width: 100%;
  }

  .input {
  width: 100%;
  height: 40px;
  line-height: 28px;
  padding: 0 1rem;
  padding-left: 2.5rem;
  border: 2px solid transparent;
  border-radius: 8px;
  outline: none;
  background-color: #e8e8e8;
  color: #0d0c22;
  transition: .3s ease;
  }

  .input::placeholder {
  color: #9e9ea7;
  }

  .input:focus, input:hover {
  outline: none !important;
  border-color: rgba(234,76,137,0.4);
  background-color: #fff;
  box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
  }

  .icon {
  position: absolute;
  left: 1rem;
  fill: #9e9ea7;
  width: 1rem;
  height: 1rem;
  }

</style>
<body class="">
    <div class="header fixed-top">
          <h1 class="title">Clientes</h1>
          <section>
            <div class="row">
              <div class="col-12">
      
                <div class="group mb-3">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                <input placeholder="Buscar" type="search" class="input" id="searchInput">
              </div>
              </div>
            </div>
          </section>
  </div>
    <section class="mt-4 ultimacard2 mb-4" style="margin-bottom: 15% !important; margin-top: 12% !important;">

    <?php 
    include('../Components/ObtenerClientes.php');
    foreach ($Clientes as $cliente) {

      // Obtener el ID del cliente
    $id_cliente = $cliente['Cli_ID']; // Ajusta el nombre del campo según la estructura de tu tabla

    // Construir la URL del enlace con el ID del cliente
    $url = "./vistas/vistaCliente.php?id=" . $id_cliente;
      ?>
          <a href="<?php echo $url; ?>" class="text-decoration-none">
              <div class="card mb-3" style="width: 100%;">
                  <div class="ms-2 mt-1 mb-1">
                      <div class="row align-items-center ps-0 pt-1 pe-0 pb-1">
                          <div class="col-3 pe-0 ps-0">
                              <div class="fotoCliente3 ms-3 ps-0"> <img class="fotoCliente4" src="<?php echo $cliente['Imagen']; ?>" alt=""> </div>
                          </div>
                          <div class="col-9 mb-0 ms-0 ps-0">
                              <!-- Imprime el nombre completo del cliente -->
                              <h6 class="NombreComercialCard2 mb-0 ms-0 ps-0"><?php echo $cliente['Nombre'] . ' ' . $cliente['ApellidoPaterno'] . ' ' . $cliente['ApellidoMaterno']; ?></h6>
                          </div>
                      </div>
                  </div>
              </div>
          </a>
      <?php 
      }
      ?>
      <!-- <a href="./vistas/vistaCliente.html" class="text-decoration-none">
        <div class="card mb-3" style="width: 100%;">
            <div class="ms-2 mt-1 mb-1">
                <div class="row align-items-center ps-0 pt-1 pe-0 pb-1">
                    <div class="col-3 pe-0 ps-0">
                        <div class="fotoCliente3 ms-3 ps-0"></div>
                    </div>
                    <div class="col-9 mb-0 ms-0 ps-0">
                        <h6 class="NombreComercialCard2 mb-0 ms-0 ps-0">Nombre ApellidoP ApellidoM</h6>
                    </div>
                </div>
            </div>
        </div>
    </a> -->
    
      
    </section>

    <nav class="nav">
        <a href="./agregar.html" class="nav__link align-items-end">
          <i class="material-icons nav__icon"><svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.2857 4.375C14.2857 3.40703 13.4877 2.625 12.5 2.625C11.5123 2.625 10.7143 3.40703 10.7143 4.375V12.25H2.67857C1.69085 12.25 0.89286 13.032 0.89286 14C0.89286 14.968 1.69085 15.75 2.67857 15.75H10.7143V23.625C10.7143 24.593 11.5123 25.375 12.5 25.375C13.4877 25.375 14.2857 24.593 14.2857 23.625V15.75H22.3214C23.3092 15.75 24.1071 14.968 24.1071 14C24.1071 13.032 23.3092 12.25 22.3214 12.25H14.2857V4.375Z" fill="#5F6873"/>
            </svg>
            </i>
        </a>
       
        <a href="../index.php" class="nav__link">
          <i class="material-icons nav__icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="57" height="57" viewBox="0 0 238 238">
            <image width="238" height="238" xlink:href="data:img/png;base64,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"/>
            <image id="house-solid_1" data-name="house-solid 1" x="70" y="75" width="99" height="88" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGMAAABYCAYAAADhhkn7AAADn0lEQVR4nO2d7XXaMBSGJU7/Nxu0naB0A7JBuwHZoEyQZoK0E8AGyQakE0AnSDtB2OD2iF73GHIAy7pXurLf53digx5LfvWFXI0Q0RUR3RPRCx2yJqJZlV+qRljEhs7zdezlpA4RTYno+YKIhuXAi6McLOK4WbrEQ6hJYy0zFYhoHimhzQZChEgU0RCETAdRIKUI7b6AiIYXCOkBJyZJEW0hn6srkFJ0jK6pzMdZuhFwYtIW0XBfTcHkpmd0TQV9kWM4MeUW0bBG9GWEomsq6IsoJaa+jDP6KkZXCIkhU3RNpUj0neS8GT91a+ec9advWUKIz3WjloiaXpQr7/1NrptlqRn8lNUmIjDnd1uWz61eM1hE7Z2rrXPu2nu/07yJas3gHu4Qern7JpaI3mveRK1msIihDcjtuIZsNS4uLoPb1xoSU1+CkC/e+yfpC4s2U1yNhyzCcQhZa0RfMRkcXTcDF9EmpKxvkhcUkcGzZzVG11RuJYfhk98ZA4muqTw6525So2+SDJ4tw+q9fyT3RXrLGGh0TeU3J61e0Tdaxgiiayq9+yJRL/CRRNdUekffzjWj0lHX0oSX+qrrZ+hUM0YcXVNZxiwJulgzEF1F6DQvclYGoqsoF6PvSRmIriqcFfJKBqKrOiej78ELHNE1C030fVXG/2WMcNS1JEHI5rgvspeBPkQxlu2duZ6bpg1EFGXhvf8eZDw457CbpzwfggwaeykYYZF1eSc4yxVkGGLCnRBQnu2E529BWXbe+8cgY8HThaAc+xHdCQ9aXTvnxFfIgYs0qxP3rdPBQCH3xE/1Od5hFDea8ID/PPFPoTV6bI/gxky7znjIBHTnznvfedUhoq0hIMMQkGEIyDAEZBgCMgwBGbp8jLk6ZOgSNXsKGYZ4U9Fn3fIQwq+Of/+WV7pMa5nfr0HGlgfTeo0s86K8sALjVv6jyWK9mXry3n/qKyIQBuJ4fCjbD7L0xboMsQLkfRKd90qUwLKMVUqNOMEP4euJYlnGH+kLav3mhxSItoaADENAhiEgwxCQYQjIMARkGAIyDAEZhoAMQ0CGISDDEJChS9SoM2ToEjXyDBmGgAxDxMjIPTGjtZPK7Ja5zjJ4h01OIVr3yrldLmrzamwzlWsOeaV4cMid0nWP2apP8/Lp85o8ax+rE35QXvk75Dlijo920xKS7RD18PuLSt8h/1l/fAyo1Hl7oTaIHn/Q8TvMBB+sICEI7lernXN/AYVfMlOL0ks+AAAAAElFTkSuQmCC"/>
          </svg>
          </i>
        </a>
      
      
        <a href="./configuracion.html" class="nav__link align-items-start">
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
    document.getElementById("searchInput").addEventListener("input", function() {
        var searchTerm = this.value.toLowerCase(); // Obtenemos el término de búsqueda en minúsculas

        // Recorremos todos los elementos que deseas buscar
        var cards = document.querySelectorAll(".card");
        cards.forEach(function(card) {
            var productName = card.querySelector(".NombreComercialCard2").textContent.toLowerCase(); // Obtenemos el nombre del producto
            if (productName.includes(searchTerm)) {
                card.style.display = "block"; // Mostramos el producto si coincide con el término de búsqueda
            } else {
                card.style.display = "none"; // Ocultamos el producto si no coincide con el término de búsqueda
            }
        });
    });
</script>
</html>