<?php
$page = get_page_by_title("recrutamento");
$content = apply_filters('the_content', $page->post_content); ?>


<div class="container wpc7form-container">
    <h4>Quer fazer parte da PAOS? Envie-nos a sua candidatura e junte-se a nós! </h4>
    <p class="quote">* campo de preenchimento obrigatório</p>
    <?php
    echo $content;
    ?>
</div>