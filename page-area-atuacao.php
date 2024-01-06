<?php /* Template Name: Áreas atuação */get_header(); ?>
<div class="container" id="page-atuacao">
  <div class="row">
    <div class="col">
      <p class="tag">Áreas de atuação</p>
      <h2>Conheça nossas especialidades</h2>
      <p class="titulo">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever
        since the 1500s, Ipsum passages, and more recently with desktop
        publishing software like vPageMaker including versions of Lorem Ipsum.
      </p>
    </div>
  </div>


  <!-- AREAS DE ATUACAO -->

  <div class="grid-area-atuacao">
    <div class="  ">
      <div class="img-area-atuacao">
        <img src="<?= get_stylesheet_directory_uri() ?>/images/foto03.svg">
      </div>
      <div class="box-cinza">
        <i class="fa-solid fa-laptop-code" style="color: #D2D3D4; font-size: 40px;"></i>
        <h4>Produtos</h4>
        <p>Potenciando as altas competências técnicas da
          nossa equipa, procuramos constantemente a
          criação e evolução de produtos, sempre com a
          visão de proporcionar a melhor solução aos
          nossos clientes. Criamos produtos próprios e
          estabelecemos parcerias com fabricantes,
          apresentando uma oferta generalizada para os
          diferentes mercados onde trabalhamos.
        </p>
      </div>
    </div>

    <div class="  ">
      <div class="img-area-atuacao">
        <img src="<?= get_stylesheet_directory_uri() ?>/images/foto03.svg">
      </div>
      <div class="box-cinza">
        <i class="ffa-sharp fa-regular fa-earth-americas" style="color: #D2D3D4; font-size: 40px;"></i>
        <h4>Nearshore</h4>
        <p>Com a internacionalização dos projetos e a
          facilidade de comunicações, procuramos
          potenciar essas mais valias e oferecer aos
          nossos clientes soluções mais abrangentes e
          flexíveis, independentes da geografia das nossas
          equipas e clientes. Temos experiência
          comprovada em gestão de equipas à distância e
          mantemos os processos de gestão auditados e
          monitorizamos os seus resultados.</p>
      </div>
    </div>

    <div class="  ">
      <div class="img-area-atuacao">
        <img src="<?= get_stylesheet_directory_uri() ?>/images/foto03.svg">
      </div>
      <div class="box-cinza">
        <i class="fa-regular fa-screwdriver-wrench" style="color: #D2D3D4; font-size: 40px;"></i>
        <h4>Serviços</h4>
        <p>Apostamos na criação e implementação de
          soluções que melhor se enquadrem nas
          necessidades dos nossos clientes, analisando
          sempre a evolução do mercado.</p>
      </div>
    </div>

    <div class="  ">
      <div class="img-area-atuacao">
        <img src="<?= get_stylesheet_directory_uri() ?>/images/foto03.svg">
      </div>
      <div class="box-cinza">
        <i class="fa-sharp fa-regular fa-clock" style="color: #D2D3D4; font-size: 40px;"></i>
        <h4>Outsourcing</h4>
        <p>Somos especialistas em soluções de
          outsourcing nas diferentes áreas tecnológicas,
          possibilitando que os nossos clientes dediquem
          o seu tempo ao core do seu negócio.</p>
      </div>
    </div>
  </div>
</div>
<!-- FIM AREAS DE ATUACAO -->
<?php include("contact_section.php"); ?>

<?php get_footer(); ?>