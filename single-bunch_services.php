<?php get_header();

/* Campos serviços */
$subtitulo_serv = get_field('subtitulo_serv');
$titulo_dos_passos = get_field('titulo_dos_passos');
$imagem_descricao = get_field('imagem_descricao');
$imagem_descricao_url = $imagem_descricao['url'];

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
       <h2><?php echo $subtitulo_serv ?></h2>
       <?php while( have_posts() ): the_post();
            the_content();
         endwhile;?>
    </article>
    <figure>
        <img src="<?php echo $imagem_descricao_url ?>">
    </figure>
</div>
<div id="etapa_serv">
    <h3><?php echo $titulo_dos_passos ?></h3>
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
            <hr class="orange">
                <span>Passo 2</span>
                <hr class="green">
            </div>
            <div class="content_pass">
                <h4><?php echo $titulo_passo2_serv ?></h4>
                <p><?php echo $descricao_passo2_serv ?></p>
                <img src="<?php echo $figura_passo2_url ?>" alt="<?php echo $figura_passo2_alt ?>">
            </div>
        </li>
        <li id="passo3" class="passo_item">
            <div class="passo_title">
                <hr class="green">
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
<section id="contact_serv">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <P class="p_intro">Caso você tenha alguma dúvida ou gostaria de contratar nossos serviços, entre em contato conosco pelo formulário ou pelos outros meios listados.</p>
                <?php echo do_shortcode('[contact-form-7 id="340" title="Contact Page"]') ?>
            </div>
            <div class="info-column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <ul class="contact-info">			
								<li>
                                    <i class="flaticon-phone-call-1"></i>
                                    <p>(11) 4118-6609</p>
                                    <p></p>
                                </li>			
								<li>
                                    <i class="flaticon-mail-1"></i>
                                    <p>hello@b4people.com.br</p>
                                    <p></p>
                                </li>							
								<li>
                                    <i class="flaticon-location-pin"></i>
                                    <p>Av. Paulista, 1842 - 15º andar - Conj. 155 - Cerqueira César
                                    <br>São Paulo - SP, 01311-200</p>
                                    <p></p>
                                </li>    
							</ul>
                            <ul class="social-icon-three">								
								<li><a href="https://www.linkedin.com/in/anabavon"><i class="fab sl-social-linkedin"></i></a></li>    
						    </ul>
                        </div>
                    </div>
        </div>
    </div>

</section>    


            
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
<?php get_footer() ?>