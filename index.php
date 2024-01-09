<?php
// Template Name: Inicio
get_header(); ?>


<div class="container">
  <div class="row somos-a-paos">
    <div class="col-lg-6 mb-5">
      <h2>Bem vindo à PAOS</h2>
      <p class="titulo">Somos uma equipa digital, focada e alinhada com as mais recentes evoluções tecnológicas,
        desenvolvendo os melhores processos de negócio com base nas metodologias mais eficientes.<br><br>
        Utilizamos ferramentas de trabalho ágil e interligadas, residentes na Cloud por forma a permitir um trabalho
        dinâmico e independente da localização.</p>
      <a class="button" href="/smart-office/">Conheça o nosso sistema Smart Office</a>
    </div>
    <div class="col-lg-6 col-md-12 d-flex justify-content-center">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/home.webp" alt="home_photo01">
    </div>
  </div>
</div>

<!-- FIM TOPO -->
<!-- AREAS TECNOLOGICAS -->

<div class="container">
  <div class="row areas-tecnologicas mb-5">
    <div class="col-lg-6 col-md-12 d-flex justify-content-center">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/foto02.svg" alt="home_photo02">
    </div>
    <div id="areas-tecnologicas" class="col-lg-6">
      <p class="tag">Áreas tecnológicas</p>
      <h2>Nós temos a<br>melhor solução</h2>
      <p class="titulo">Na PAOS privilegiamos a melhor solução, não a tecnologia que mais gostamos. As linguagens são
        escolhidas para cada projeto de acordo com a arquitetura desenhada, observando sempre os pontos fortes e os
        pontos fracos de cada abordagem.</p>
      <a class="button" href="/areas-tecnologicas/">Conheça as nossas Áreas tecnológicas</a>
    </div>
  </div>
</div>

<!-- FIM AREAS TECNOLOGICAS -->
<!-- AREAS DE ATUACAO -->

<div id="areas-atuacao" class="container">
  <div class="row areas-atuacao">
    <div class="col-lg-12">
      <p class="tag">Áreas de atuação</p>
      <h2>Conheça as nossas especialidades</h2>
      <p class="titulo">A nossa polivalência e vasta experiência nas muitas categorias e ramos tecnológicos conferem-nos
        a capacidade de apresentar soluções 360º aos nossos clientes.</p>
    </div>

    <div class="grid-area-atuacao">
      <div class="grid-item-area-atuacao">
        <div class="box-cinza">
          <i class="fa-solid fa-laptop-code" style="color: #D2D3D4; font-size: 40px;"></i>
          <h4>Produtos</h4>
          <p>Potenciando as altas competências técnicas da nossa equipa, procuramos constantemente a criação e evolução
            de
            produtos, sempre com a visão…</p>
        </div>
      </div>

      <div class="grid-item-area-atuacao">
        <div class="box-cinza">
          <i class="ffa-sharp fa-regular fa-earth-americas" style="color: #D2D3D4; font-size: 40px;"></i>
          <h4>Nearshore</h4>
          <p>Com a internacionalização dos projetos e a facilidade de comunicações, procuramos potenciar essas mais
            valias
            e oferecer aos nossos clientes soluções mais abrangentes…</p>
        </div>
      </div>

      <div class="grid-item-area-atuacao">
        <div class="box-cinza">
          <i class="fa-regular fa-screwdriver-wrench" style="color: #D2D3D4; font-size: 40px;"></i>
          <h4>Serviços</h4>
          <p>Apostamos na criação e implementação de soluções que melhor se enquadrem nas necessidades dos nossos
            clientes, analisando sempre a evolução do mercado.</p>
        </div>
      </div>

      <div class="grid-item-area-atuacao">
        <div class="box-cinza">
          <i class="fa-sharp fa-regular fa-clock" style="color: #D2D3D4; font-size: 40px;"></i>
          <h4>Outsourcing</h4>
          <p>Somos especialistas em soluções de outsourcing nas diferentes áreas tecnológicas, possibilitando que os
            nossos clientes dediquem o seu tempo…</p>
        </div>
      </div>
      <div class="grid-item-area-atuacao">
        <div class="box-cinza">
          <i class="fa-sharp fa-regular fa-rectangle-history" style="color: #D2D3D4; font-size: 40px;"></i>
          <h4>Projetos</h4>
          <p>Planeamos, organizamos, desenvolvemos, implementamos e gerimos de forma integral projetos tecnológicos à
            medida das necessidades específicas de cada cliente...</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12">
    <center><a class="button" href="/areas-de-atuacao/">Saiba mais sobre as nossas Áreas de atuação</a></center>
  </div>
</div>
</div>

<!-- FIM AREAS DE ATUACAO -->

<?php include("contact_section.php"); ?>

<?php
get_footer();
?>