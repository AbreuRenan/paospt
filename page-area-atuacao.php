<?php /* Template Name: Áreas atuação */get_header(); ?>

<div class="container" id="page-atuacao">
  <div class="row">
    <div class="col">
      <p class="tag" data-lang='areaAtuacao-areaAtuacao-p1'>Áreas de atuação</p>
      <h2 data-lang='areaAtuacao-areaAtuacao-h2'>Conheça as nossas especialidades</h2>
      <p class="titulo" data-lang='areaAtuacao-areaAtuacao-p2'>
        A nossa polivalência e vasta experiência nas muitas categorias e ramos tecnológicos conferem-nos a
        capacidade de apresentar soluções 360º aos nossos clientes.
      </p>
    </div>
  </div>


  <!-- AREAS DE ATUACAO -->

  <div class="grid-area-atuacao">
    <div class="  ">
      <div class="img-area-atuacao">
        <img src="<?= get_stylesheet_directory_uri() ?>/images/atuacao_produtos.png">
      </div>
      <div class="box-cinza">
        <i class="fa-solid fa-laptop-code" style="color: #D2D3D4; font-size: 40px;"></i>
        <h4 data-lang='areaAtuacao-areaAtuacao-produtos-h4'>Produtos</h4>
        <p data-lang='areaAtuacao-areaAtuacao-produtos-p1'>Potenciando as altas competências técnicas da
          nossa equipa, procuramos constantemente a criação e evolução de produtos, sempre com a visão de proporcionar a melhor solução aos
          nossos clientes. Criamos produtos próprios e estabelecemos parcerias com fabricantes, apresentando uma oferta generalizada para os
          diferentes mercados onde trabalhamos.
        </p>
      </div>
    </div>

    <div class="  ">
      <div class="img-area-atuacao">
        <img src="<?= get_stylesheet_directory_uri() ?>/images/atuacao_nearshore.png">
      </div>
      <div class="box-cinza">
        <i class="ffa-sharp fa-regular fa-earth-americas" style="color: #D2D3D4; font-size: 40px;"></i>
        <h4 data-lang='areaAtuacao-areaAtuacao-nearshore-h4'>Nearshore</h4>
        <p data-lang='areaAtuacao-areaAtuacao-nearshore-p1'>Com a internacionalização dos projetos e a
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
        <img src="<?= get_stylesheet_directory_uri() ?>/images/atuacao_servicos.png">
      </div>
      <div class="box-cinza">
        <i class="fa-regular fa-screwdriver-wrench" style="color: #D2D3D4; font-size: 40px;"></i>
        <h4 data-lang='areaAtuacao-areaAtuacao-servicos-h4'>Serviços</h4>
        <p data-lang='areaAtuacao-areaAtuacao-servicos-p1'>Apostamos na criação e implementação de
          soluções que melhor se enquadrem nas
          necessidades dos nossos clientes, analisando
          sempre a evolução do mercado.</p>
      </div>
    </div>

    <div class="  ">
      <div class="img-area-atuacao">
        <img src="<?= get_stylesheet_directory_uri() ?>/images/atuacao_outsourcing.png">
      </div>
      <div class="box-cinza">
        <i class="fa-sharp fa-regular fa-clock" style="color: #D2D3D4; font-size: 40px;"></i>
        <h4 data-lang='areaAtuacao-areaAtuacao-outsourcing-h4'>Outsourcing</h4>
        <p data-lang='areaAtuacao-areaAtuacao-outsourcing-p1'>Somos especialistas em soluções de
          outsourcing nas diferentes áreas tecnológicas,
          possibilitando que os nossos clientes dediquem
          o seu tempo ao core do seu negócio.</p>
      </div>
    </div>

    <div class="  ">
      <div class="img-area-atuacao">
        <img src="<?= get_stylesheet_directory_uri() ?>/images/atuacao_projetos.png">
      </div>
      <div class="box-cinza">
        <i class="fa-sharp fa-regular fa-rectangle-history" style="color: #D2D3D4; font-size: 40px;"></i>
        <h4  data-lang='areaAtuacao-areaAtuacao-projetos-h4'>Projetos</h4>
        <p  data-lang='areaAtuacao-areaAtuacao-projetos-p1'>Planeamos, organizamos, desenvolvemos, implementamos e gerimos de forma
          integral projetos
          tecnológicos à medida das necessidades específicas de cada cliente, tendo em vista a melhoria dos
          seus resultados. Aplicamos todo o nosso conhecimento e experiência para que os objetivos definidos
          sejam atingidos dentro do prazo estipulado.</p>
      </div>
    </div>

  </div>
</div>
<!-- FIM AREAS DE ATUACAO -->
<?php include("contact_section.php"); ?>

<?php get_footer(); ?>