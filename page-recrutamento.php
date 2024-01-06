<?php
/* Template Name: Recrutamento */
get_header();
?>

<div id="primary" class="container">
    <main id="main" class="col row flex-column">
        <p class="tag">Recrutamento</p>
        <h2>Venha fazer parte do nosso time</h2>
        <p class="titulo">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, Ipsum passages, and more recently with desktop
            publishing software like vPageMaker including versions of Lorem Ipsum.
        </p>
        <?php include("recruitPosts.php"); ?>
        <?php include("recruitForm.php"); ?>


    </main>
</div>
<?php include("contact_section.php"); ?>
<?php get_footer(); ?>