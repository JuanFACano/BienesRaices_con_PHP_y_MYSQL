<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion contenido-centrado">
  <h1>Nuestro Blog</h1>
  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcser="build/img/blog1.webp" type="image/webp" />
        <source srcser="build/img/blog1.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.html">
        <h4>Terraza en el techo de tu casa</h4>
        <p>Escrito el: <span>20/10/2023</span> por <span>Admin</span></p>
        <p>
          Consejos para construir una terraza en el techo de tu casa con los
          mejoes materiales y ahorrando dinero
        </p>
      </a>
    </div>
  </article>
  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcser="build/img/blog2.webp" type="image/webp" />
        <source srcser="build/img/blog2.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.html">
        <h4>Guia para la decoracion de tu hogas</h4>
        <p>Escrito el: <span>20/10/2023</span> por <span>Admin</span></p>
        <p>
          Maximiza el espacio en tu hogar con esta guia, aprende a combinar
          muebles y colores para darle vida a tu espacio
        </p>
      </a>
    </div>
  </article>
  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcser="build/img/blog3.webp" type="image/webp" />
        <source srcser="build/img/blog3.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/blog3.jpg" alt="texto entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.html">
        <h4>Terraza en el techo de tu casa</h4>
        <p>Escrito el: <span>20/10/2023</span> por <span>Admin</span></p>
        <p>
          Consejos para construir una terraza en el techo de tu casa con los
          mejoes materiales y ahorrando dinero
        </p>
      </a>
    </div>
  </article>
  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcser="build/img/blog4.webp" type="image/webp" />
        <source srcser="build/img/blog4.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/blog4.jpg" alt="texto entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.html">
        <h4>Guia para la decoracion de tu hogas</h4>
        <p>Escrito el: <span>20/10/2023</span> por <span>Admin</span></p>
        <p>
          Maximiza el espacio en tu hogar con esta guia, aprende a combinar
          muebles y colores para darle vida a tu espacio
        </p>
      </a>
    </div>
  </article>
</main>


<?php
incluirTemplate('footer') ?>