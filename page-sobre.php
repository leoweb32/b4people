
<?php 
/* template name:Sobre a B4People */
get_header();

/* Variaveis dos Campos */

/* SObre */
$titulo_sobre = get_field('titulo_sobre');
$descricao_sobre = get_field('descricao_sobre');
$imagem_sobre = get_field('imagem_sobre');
$imagem_sobre_url = $imagem_sobre['url'];
$imagem_sobre_alt = $imagem_sobre['alt'];


/* O que fazemos */
$titulo_fazemos = get_field('titulo_fazemos');
$descricao_fazemos = get_field('descricao_fazemos');
$imagem_fazemos = get_field('imagem_fazemos');
$imagem_fazemos_url = $imagem_fazemos['url'];
$imagem_fazemos_alt = $imagem_fazemos['alt'];

/* Pegar página da Ana */
$id_ana = 3814;
$p = get_page($id_ana);
$ana_sobre = get_field('breve_descricao', $id_ana);
$ana_titulo = apply_filters('the_title', $p->post_title);
$url_thumb = get_the_post_thumbnail_url($id_ana);
$link = get_permalink($id_ana);

/* Equipe */

?>



<div id="title_serv">
    <h1><?php the_title() ?></h1>
</div>
<section id="quem_somos">
    <div id="text_quem">
        <h2><?php echo $titulo_sobre ?></h2>
        <?php echo $descricao_sobre ?>
    </div>
    <figure class="figure_quem">
        <img src="<?php echo $imagem_sobre_url ?>" alt="<?php echo $imagem_fazemos_alt ?>">
    </figure>
</section>

<section id="oque_fazemos">
    <figure class="figure_oque">
        <img src="<?php echo $imagem_fazemos_url ?>" alt="<?php echo $imagem_fazemos_alt ?>">
    </figure>
    <div id="textoque">
        <h2><?php echo $titulo_fazemos ?></h2>
        <?php echo $descricao_fazemos ?>
    </div>
</section>

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
                    'order'=>'asc'
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
</section>

<section id="sobre_ana">
    <div class="container">
        <div id="text_ana">
            <h2><?php echo $ana_titulo;?></h2>
            <?php echo $ana_sobre ?>
            <a href="<?php echo $link ?>">
                <button>Conheça mais a Ana</button>
            </a>    
        </div>
        <img src="<?php echo $url_thumb ?>">
    </div>
</section>
<section id="depoimentos">
    <?php echo do_shortcode('[sp_testimonial id="3870"]'); ?>
</section>

<section id="equipe">
    <div id="text_equipe">
        <div id="align_equipe">    
            <?php 
            $query = new WP_Query(array( 'pagename' => 'somos-uma-consultoria-em-gestao-das-diversidades-verdadeiramente-diversa' ));
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();?>

                        <h2><?php the_title()?></h2>
                        <?php echo $conteudo = the_content();
                    }
                }
            ?>
        </div>    

    </div>
    <div id="equipe_list">
    <?php
        $posts = get_posts(array(
            'orderby'   => 'asc',
                            'post_type' => 'bunch_team',
                            'posts_per_page' => 4,
                            'orderby'=>'title',
                            'order'=>'asc'
            ));
            if( $posts ): ?>
              
                <ul>
                    <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
                    <?php $i++ ?>
                        <div class="equipe_item item<?php echo $i ?>">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" >
                            <span class="label_name"><?php the_title() ?></span>
                        </div>
                    <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>

