<?php /* Template Name: Sobre-Nos */get_header(); ?>
<!-- SOBRE -->

<div class="container">
  <div class="row sobre-nos">
    <div class="col-md-12">
      <p class="tag">Sobre nós</p>
      <h2>Saiba um pouco sobre a PAOS</h2>
      <p class="titulo">Somos uma empresa de Sistemas de Informação, que pretende ser permanentemente reconhecida pela
        sua determinação e competência, por parte dos seus clientes, colaboradores e parceiros no mercado
        global.<br><br>

        O nosso conhecimento das mais variadas tecnologias é assegurado por uma equipa de especialistas em Tecnologias
        de Informação.<br><br>

        Efetuamos o desenvolvimento, a manutenção, o suporte e a evolução dos sistemas de informação dos nossos clientes
        nos principais setores de mercado e nas mais variadas áreas de negócio, assegurando o sucesso do seu resultado
        final.</p>
    </div>
  </div>
</div>

<!-- FIM SOBRE -->



<!-- MISSAO -->

<div class="container">
  <div class="missao">
    <div class="missao_item">
      <img src="<?= get_template_directory_uri() ?>/images/foto03.svg">
      <h4>Missão</h4>
      <p>Contribuir para a eficiência digital e upgrade tecnológico das organizações, maximizando o poder de resposta
        num mercado concorrencial. Desenvolver produtos e serviços moldáveis a um mundo em permanente inovação.</p>
    </div>

    <div class="missao_item">
      <img src="<?= get_template_directory_uri() ?>/images/foto03.svg">
      <h4>Visão</h4>
      <p>O mundo é o nosso espaço, faremos dos nossos saberes nossas forças, saberemos distinguir a ficção da realidade.
      </p>
    </div>

    <div class="missao_item">
      <img src="<?= get_template_directory_uri() ?>/images/foto03.svg">
      <h4>Valores</h4>
      <p>O cliente tem liberdade de escolher a solução mais adequada às suas necessidades. Todas as soluções têm
        vantagens e são abordadas em igualdade. A partilha e a parceria são formas fraternas de cidadania criando valor
        acrescentado aos nossos clientes e à sociedade em geral.</p>
    </div>

  </div>
</div>

<!-- FIM MISSAO -->



<!-- EQUIPE -->

<!-- Perfil na página  -->
<div class="container mt-5">
  <div class="row equipe">
    <?php
    $cards = mycmb2_get_field('profile_cards');
    if ($cards) {
      $i = 0;
      while ($i < count($cards) && $i < 8) {
        ?>
        <div class=" funcionarios" id="<?= $cards[$i]['card_nome'] ?>">
          <div class="hexMask"><img src="<?= $cards[$i]['card_foto'] ?>" alt="card foto" class="profile-pic hexMask"></div>
          <h5>
            <?= $cards[$i]['card_nome'] ?>
          </h5>
          <p>
            <?= $cards[$i]['card_cargo'] ?>
          </p>
          <input type="hidden" value="<?= $cards[$i]['card_sobre'] ?>">
          <a href="<?php if (isset($cards[$i]['card_linkedin'])) {
            echo $cards[$i]['card_linkedin'];
          } else {
            echo 'https://www.linkedin.com';
          } ?>" class="linkedin">
            <center><i class="fa-brands fa-linkedin-in" style="color: #4E93CF; font-size: 18px;"></i></center>
          </a>
        </div>
        <?php
        $i++;
      }
    } ?>

  </div>
</div>
<!-- FIM Perfil na página  -->


<!-- INICIO MODAL -->

<section class="modal_container" data-modal="container">
  <button id="btnFecharModal" data-modal="fechar" class="fechar btn btn-secondary">
    X
  </button>
  <div class="modal_content">
    <div class="hexMask"><img class="modal_foto" src="./images/equipe01.svg" alt="" /></div>
    <p class="modal_name">Fulano da Silva</p>
    <p class="modal_cargo">Cargo</p>
    <p class="modal_sobre"></p>
  </div>
</section>
<!-- FIM MODAL -->


<?php get_footer(); ?>