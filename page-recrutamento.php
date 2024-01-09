<?php
/* Template Name: Recrutamento */
get_header();
?>

<div id="primary" class="container">
    <main id="main" class="col row flex-column">
        <p class="tag">Recrutamento</p>
        <h2>Venha fazer parte da nossa equipa</h2>
        <p class="titulo">
            Quer fazer parte da PAOS?<br>
            Envie-nos a sua candidatura e junte-se a nós.
        </p>
        <?php include("recruitPosts.php"); ?>
        <?php include("recruitForm.php"); ?>


    </main>
</div>
<?php include("contact_section.php"); ?>
<?php get_footer(); ?>