<?php
// Template Name: Inicio
get_header(); ?>

				
<div class="container">
    <div class="row somos-a-paos">
        <div class="col-lg-6">
            <h2>Muito prazer,<br>somos a PAOS</h2>
            <p class="titulo">Somos uma equipa digital, focada e alinhada com as mais recentes evoluções tecnológicas, desenvolvendo os melhores processos de negócio com base nas metodologias mais eficientes.<br><br>
              Utilizamos ferramentas de trabalho ágil e interligadas, residentes na Cloud por forma a permitir um trabalho dinâmico e independente da localização.</p>
            <a class="button" href="smart_office.html">Conheça nosso sistema Smart Office</a>
		</div>
		<div class="col-lg-6 my-5">
            <img src="<?= get_stylesheet_directory_uri() ?>/images/foto01.svg">
		</div>
	</div>
</div>

<!-- FIM TOPO -->





<!-- AREAS TECNOLOGICAS -->
        
        <div  class="container">
          <div class="row areas-tecnologicas">
            <div class="col-lg-6">
              <img src="<?= get_stylesheet_directory_uri() ?>/images/foto02.svg">
            </div>
            <div id="areas-tecnologicas" class="col-lg-6">
              <p class="tag">Áreas tecnológicas</p>
              <h2>Nós temos a<br>melhor solução</h2>
              <p class="titulo">Na PAOS privilegiamos a melhor solução, não a tecnologia que mais gostamos. As linguagens são escolhidas para cada projeto de acordo com a arquitetura desenhada, observando sempre os pontos fortes e os pontos fracos de cada abordagem.</p>
              <a class="button" href="areas_tecnologicas.html">Conheça nossas Áreas tecnológicas</a>
            </div>
          </div>
        </div>

<!-- FIM AREAS TECNOLOGICAS -->





<!-- AREAS DE ATUACAO -->

        <div id="areas-atuacao" class="container">
          <div class="row areas-atuacao">
            <div class="col-lg-12">
              <p class="tag">Áreas de atuação</p>
              <h2>Conheça nossas especialidades</h2>
            </div>
            
            <div class="col-lg-3">
              <div class="box-cinza">
                <i class="fa-solid fa-laptop-code" style="color: #D2D3D4; font-size: 40px;"></i>
                <h4>Produtos</h4>
                <p>Potenciando as altas competências técnicas da nossa equipa, procuramos constantemente a criação e evolução de produtos, sempre com a visão…</p>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="box-cinza">
                <i class="ffa-sharp fa-regular fa-earth-americas" style="color: #D2D3D4; font-size: 40px;"></i>
                <h4>Nearshore</h4>
                <p>Com a internacionalização dos projetos e a facilidade de comunicações, procuramos potenciar essas mais valias e oferecer aos nossos clientes soluções mais abrangentes…</p>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="box-cinza">
                <i class="fa-regular fa-screwdriver-wrench" style="color: #D2D3D4; font-size: 40px;"></i>
                <h4>Serviços</h4>
                <p>Apostamos na criação e implementação de soluções que melhor se enquadrem nas necessidades dos nossos clientes, analisando sempre a evolução do mercado.</p>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="box-cinza">
                <i class="fa-sharp fa-regular fa-clock" style="color: #D2D3D4; font-size: 40px;"></i>
                <h4>Outsourcing</h4>
                <p>Somos especialistas em soluções de outsourcing nas diferentes áreas tecnológicas, possibilitando que os nossos clientes dediquem o seu tempo…</p>
              </div>
            </div>

            <div class="col-lg-12">
              <center><a class="button" href="areas_atuacao.html">Saiba mais sobre nossas Áreas de atuação</a></center>
            </div>
          </div>
        </div>

<!-- FIM AREAS DE ATUACAO -->





<!-- CONTATO -->

        <div class="container-fluid">
          <div class="row contato">
            <div class="col-lg-12">
              <div>
                <center><p class="tag-azul">Contato</p>
                <center><h3>Marque uma reunião connosco<br>e saiba mais sobre nosso trabalho</h3>
                <center><a class="button" href="contato.html">Entre em contato conosco</a></center>
              </div>
            </div>
          </div>
        </div>

<!-- FIM CONTATO -->

<?php
get_footer();
?>