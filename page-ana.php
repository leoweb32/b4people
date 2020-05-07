
<?php 
/* template name:Sobre a Ana */
get_header();

    /* Campos */
    $titulo_sobre = get_field('titulo_sobre');
    $descricao_sobre = get_field('descricao_sobre');
    $imagem_sobre = get_field('imagem_lateral');
    $imagem_sobre_url = $imagem_sobre['url'];
    $imagem_sobre_alt = $imagem_sobre['alt'];
?>


<div id="title_serv">
    <h1><?php the_title() ?></h1>
</div>

<div class="container-fluid" id="ana_top">
    <div class="row">
        <article class="col-lg-5">
            <?php the_content() ?>
        </article>
        <div id="image_linkedin" class="col-lg-7">
            <img class="ana" src="<?php echo $imagem_sobre_url ?>" alt="Ana Bavon">
            <div id="linkedin_area">
                <a href="https://www.linkedin.com/in/anabavon/" target="_blank">
                    <img src="<?php echo get_template_directory_uri()?>/images/linkedin.png">
                </a>    
            </div>
        </div>  
    </div>
</div>

<section id="imprensa">
   <h2>Ana na Mídia</h2>
   <div class="container">

         <?php
                $posts = get_posts(array(
                    'orderby'   => 'asc',
                    'post_type' => 'imprensa',
                    'orderby'=>'date',
                    'posts_per_page' => 20,
                    'order'=>'desc'
                ));
                if( $posts ): ?>
         <div class="row">
            <?php foreach( $posts as $post ): setup_postdata( $post );?>
                <?php 
                    $url_thumb_serv = get_the_post_thumbnail_url();
                    $link_news = get_field('link_noticia');
                ?> 
                <div class="item_imp col-lg-3 col-md-4">
                    <a href="<?php echo $link_news ?>" target="_blank">
                        <figure>
                            <img src="<?php echo $url_thumb_serv ?>">
                        </figure>
                        <?php the_title() ?>
                    </a>
                </div>

                        <?php endforeach; ?>
                    </div>
                <?php wp_reset_postdata(); ?>
        <?php endif; ?>
   </div>

<section id="servicos">
    <div id="intro">
        <h2>Como fazemos</h2>
        <p>Soluções estruturadas e sistêmicas personalizadas e alinhadas aos objetivos de inclusão, cultura e inovação da sua empresa.</p>
    </div>
            <?php
                $posts = get_posts(array(
                    'orderby'   => 'asc',
                    'post_type' => 'bunch_services',
                    'posts_per_page' => 4,
                    'orderby'=>'title',
                    'order'=>'asc',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'services_category',
                            'field' => 'term_id',
                            'terms' => 67,
                        )
                    )
                ));
                if( $posts ): ?>
                    <ul class="container">
                        <?php foreach( $posts as $post ): setup_postdata( $post );?>
                        <?php 
                            $url_thumb_serv = get_the_post_thumbnail_url();
                            $descricao_serv = get_field('descricao_serv');
                            $subtitulo_serv = get_field('subtitulo_serv');
                        ?> 
                        <li>
                            <figure>
                                <img src="<?php echo $url_thumb_serv ?>">
                            </figure>
                            <h3><?php the_title() ?></h3>
                            <p><?php echo $descricao_serv ?></p>
                            <a href="<?php echo get_permalink() ?>"><button>Saiba mais</button></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
                    <div id="cert">
                        <div id="text_cert">
                            Nossos valores em D&I estão alinhados com a metodologia interseccional Gender-based
                            Analysis + e frameworks for equality da ONU.
                        </div>
                        <div id="brand_cert">
                        <img src="<?php echo get_theme_file_uri( )?>/images/gba_logo.png" alt="GBA">
                        <img src="<?php echo get_theme_file_uri( )?>/images/onu_mulheres.png" alt="Onu mulheres">
                        </div>
                    </div>

</section>
<?php get_footer(); ?>