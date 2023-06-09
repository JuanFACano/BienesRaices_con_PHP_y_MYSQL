<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/bienesraices/build/css/app.css" />
  <title>Bienes Raices</title>
</head>

<body>
  <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
    <div class="contenedor contenido-header">
      <div class="barra">
        <a href="/bienesraices/index.php">
          <img class="logo-header" src="/bienesraices/build/img/logo.svg" alt="Logotipo de Bienes Raices" />
        </a>
        <div class="mobile-menu">
          <img src="/bienesraices/build/img/barras.svg" alt="icono menu responsive" />
        </div>
        <div class="derecha">
          <img class="dark-mode-boton" src="/bienesraices/build/img/dark-mode.svg" alt="modo oscuro" />
          <nav class="navegacion">
            <a href="nosotros.php">Nosotros</a>
            <a href="anuncios.php">Anuncios</a>
            <a href="blog.php">Blog</a>
            <a href="contacto.php">Contacto</a>
          </nav>
        </div>
      </div>
      <!--.barra-->
      <?php if ($inicio) { ?>
        <h1> Venta de Casas y Departamentos <span> Exclusivos de Lujo </span>
        <?php  } ?>
        </h1>
    </div>
  </header>