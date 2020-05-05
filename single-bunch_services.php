<?php get_header();

/* Campos serviços */
$descricao_serv = get_field('descricao_serv');
$subtitulo_serv = get_field('subtitulo_serv');


$passos_serv = get_field('passos_serv');

if($passos_serv){

        $titulo_passo1_serv = $passos_serv['titulo_passo1_serv'];
        $descricao_passo1_serv = $passos_serv['descricao_passo1_serv'];
        $figura_passo1_serv = $passos_serv['figura_passo1_serv'];
        $figura_passo1_url = $figura_passo1_serv['url'];
        $figura_passo1_alt = $figura_passo1_serv['alt'];

        $titulo_passo2_serv = $passos_serv['titulo_passo2_serv'];
        $descricao_passo2_serv = $passos_serv['descricao_passo2_serv'];
        $figura_passo2_serv = $passos_serv['figura_passo2_serv'];
        $figura_passo2_url = $figura_passo2_serv['url'];
        $figura_passo2_alt = $figura_passo2_serv['alt'];

        $titulo_passo3_serv = $passos_serv['titulo_passo3_serv'];
        $descricao_passo3_serv = $passos_serv['descricao_passo3_serv'];
        $figura_passo3_serv = $passos_serv['figura_passo3_serv'];
        $figura_passo3_url = $figura_passo3_serv['url'];
        $figura_passo3_alt = $figura_passo3_serv['alt'];
}


?>

<div id="title_serv">
    <h1><?php the_title() ?></h1>
</div>
<div id="intro_serv">
    <article id="text_serv">
       <h2><?php echo $descricao_serv ?></h2>
       <?php while( have_posts() ): the_post();
            the_content();
         endwhile;?>
    </article>
    <figure>
        <img src="<?php?>">
    </figure>
</div>
<div id="etapa_serv">
    <h3><?php $subtitulo_serv ?></h3>

    <ul id="passos">
        <li id="passo1" class="passo_item">
            <div class="passo_title">
                <span>Passo 1</span>
                <hr>
            </div>
            <div class="content_pass">
                <h4><?php echo $titulo_passo1_serv ?></h4>
                <p><?php echo $descricao_passo1_serv ?></p>
                <img src="<?php echo $figura_passo1_url ?>" alt="<?php echo $figura_passo1_alt ?>">
            </div>
        </li>
        <li id="passo2" class="passo_item">
            <div class="passo_title">
                <span>Passo 2</span>
                <hr>
            </div>
            <div class="content_pass">
                <h4><?php echo $titulo_passo2_serv ?></h4>
                <p><?php echo $descricao_passo2_serv ?></p>
                <img src="<?php echo $figura_passo2_url ?>" alt="<?php echo $figura_passo2_alt ?>">
            </div>
        </li>
        <li id="passo3" class="passo_item">
            <div class="passo_title">
                <span>Passo 3</span>
            </div>
            <div class="content_pass">
                <h4><?php echo $titulo_passo3_serv ?></h4>
                <p><?php echo $descricao_passo3_serv ?></p>
                <img src="<?php echo $figura_passo3_url ?>" alt="<?php echo $figura_passo3_alt ?>">
            </div>
        </li>
    <ul>
</div>    

<?php get_footer() ?>