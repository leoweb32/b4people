
<?php 
/* template name:Sobre a Ana */
get_header();

/* Campos */
$titulo_sobre = get_field('titulo_sobre');
$descricao_sobre = get_field('descricao_sobre');
$imagem_sobre = get_field('imagem_sobre');
$imagem_sobre_url = $imagem_sobre['url'];
$imagem_sobre_alt = $imagem_sobre['alt'];


?>


<div id="title_serv">
    <h1><?php the_title() ?></h1>
</div>
<article>
    <?php the_content() ?>
</article>
<?php get_footer(); ?>
