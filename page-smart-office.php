<?php /* Template Name: Smart Office */get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <p class="tag" data-lang="smartOffice-smartoffice-p1">Smart Office</p>
      <h2 data-lang="smartOffice-smartoffice-h2">Dinamismo é o que nos move</h2>
      <p class="titulo" data-lang="smartOffice-smartoffice-p2">
        Somos um empresa dinâmica, atual e sem fronteiras. O nosso espaço de trabalho é o mundo e não
        nos deixamos limitar pela geografia. Somos dotados de soluções tecnológicas avançadas e sistemas
        integrados que nos permitem maximizar a nossa eficiência, produtividade e conetividade,
        independentemente da localização de cada um. O conforto dos nossos colaboradores é uma
        prioridade, por isso, deslocalizamos o trabalho e não as pessoas.
      </p>
    </div>
  </div>
</div>

<div class="container smart-office-flex">
  <div class="flex-item">
    <div class="img-smart-office">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/smart_office_deslocalizacao.png"
        alt="smart_office_deslocalizacao">
    </div>
    <h4 data-lang="smartOffice-deslocalizacao-h4">Deslocalização</h4>
    <p data-lang="smartOffice-deslocalizacao-p1">A nossa geografia é o mundo e a
      interligação digital dos nossos
      colaboradores coloca-os lado a lado na
      mesma sala.</p>
  </div>
  <div class="flex-item">
    <div class="img-smart-office">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/smart_office_metodologia.png"
        alt="smart_office_metodologia">
    </div>
    <h4 data-lang="smartOffice-metodologias-h4">Metodologias</h4>
    <p data-lang="smartOffice-metodologias-p1">Utilizamos nos nosso projetos
      metodologias AGILE, nomeadamente
      SCRUM onde temos muita experiência e
      profissionais certificados.</p>
  </div>
  <div class="flex-item">
    <div class="img-smart-office">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/smart_office_connect_teams.png"
        alt="smart_office_connect_teams">
    </div>
    <h4 data-lang="smartOffice-connectTeams-h4">Connect teams</h4>
    <p data-lang="smartOffice-connectTeams-p1">Equipas always online sem dependência da
      plataforma tecnológica.
    </p>
  </div>
  <div class="flex-item">
    <div class="img-smart-office">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/smart_office_team.png" alt="smart_office_team">
    </div>
    <h4 data-lang="smartOffice-teamService-h4">Team as a service</h4>
    <p data-lang="smartOffice-teamService-p1">Somos uma equipa digital, focada e
      alinhada com as mais recentes evoluções
      tecnológicas, desenvolvendo os melhores
      processos de negócio com base nas
      metodologias mais eficientes.</p>
  </div>
  <div class="flex-item">
    <div class="img-smart-office">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/smart_office_cloud.png" alt="smart_office_cloud">
    </div>
    <h4 data-lang="smartOffice-gestaoProcesso-h4">Ferramentas de gestão processual</h4>
    <p data-lang="smartOffice-gestaoProcesso-p1">Utilizamos ferramentas de trabalho ágil e
      interligadas, residentes na Cloud por forma
      a permitir um trabalho dinâmico e
      independente da localização.</p>
  </div>

</div>




<?php include("contact_section.php"); ?>
<?php get_footer(); ?>