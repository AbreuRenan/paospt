<footer>
    <div class="container">
        <div class="row footer">
            <div class="col-lg-12">
                <center><a href="#" aria-label="ir ao topo"> <img class="footer-logo"
                            src="<?= get_stylesheet_directory_uri() ?>/images/logo_paos_peq.svg" alt="small_logo">
                </center>
                <nav class="footer">
                    <ul class="footer-list">
                        <li><i class="fa-regular fa-envelope" style="color: #4E93CF; font-size: 22px;"></i><a
                                href="mailto:geral@paos.pt">geral@paos.pt</a></li>
                        <li><i class="fa-regular fa-circle-phone" style="color: #4E93CF; font-size: 22px;"></i>
                            <a id="telefone-footer" href="tel:+351210503536">+351 210 503 536</a>
                        </li>
                        <li><i class="fa-brands fa-linkedin-in" style="color: #4E93CF; font-size: 22px;"></i><a
                                href="https://www.linkedin.com/company/paos-si/" target="_blank">Linkedin</a></li>
                    </ul>
                </nav>

                <center>
                    <a href="https://maps.app.goo.gl/G4E3QRJB58NzSFcr5" target="_blank">
                        <p>
                            <i class="fa-regular fa-location-dot" style="color: #4E93CF; font-size: 22px;"></i> Avenida
                            da
                            República 27 – 7º andar - 1050-186 Lisboa - Portugal
                        </p>
                    </a>
                </center>
                <nav class="footer legal-docs">
                    <ul>
                        <li id="assoft">Membros associados <a href="https://www.assoft.org/pt/" target="_blank">
                                <img src="<?= get_stylesheet_directory_uri() ?>/images/logo_assoft.svg"
                                    alt="logo_assoft"></a>
                            <a href="https://www.livroreclamacoes.pt" target="_blank">
                                <img class="LRE"
                                    src="<?= get_stylesheet_directory_uri() ?>/images/LRE_Theme.Logo_White.png"
                                    alt="Livro de Reclamações"></a>
                        </li>
                        <li><a href="/politica/">Política de Privacidade</a></li>
                        <li><a href="/termos/">Termos e Condições</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>