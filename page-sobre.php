
<?php 
/* template name:Sobre a B4People */
get_header();

/* Campos */
$titulo_sobre = get_field('titulo_sobre');
$descricao_sobre = get_field('descricao_sobre');
$imagem_sobre = get_field('imagem_sobre');
$imagem_sobre_url = $imagem_sobre['url'];
$imagem_sobre_alt = $imagem_sobre['alt'];

$titulo_fazemos = get_field('titulo_fazemos');
$descricao_fazemos = get_field('descricao_fazemos');
$imagem_fazemos = get_field('imagem_fazemos');
$imagem_fazemos_url = $imagem_fazemos['url'];
$imagem_fazemos_alt = $imagem_fazemos['alt'];

?>


<div id="title_serv">
    <h1><?php the_title() ?></h1>
</div>
<section id="quem_somos">
    <div id="text_quem">
        <h2><?php echo $titulo_sobre ?><h2>
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
    <h2>Como fazemos</h2>
    <p>Soluções estruturadas e sistêmicas personalizadas e alinhadas aos
objetivos de inclusão, cultura e inovação da sua empresa.</p>

    <ul>
        <li>
            <figure>
            </figure>
            <h3></h3>
            <p></p>
            <button></button>
        </li>
        <li>
            <figure>
            </figure>
            <h3></h3>
            <p></p>
            <button></button>
        </li>
        <li>
            <figure>
            </figure>
            <h3></h3>
            <p></p>
            <button></button>
        </li>
        <li>
            <figure>
            </figure>
            <h3></h3>
            <p></p>
            <button></button>
        </li>
    </ul>
</section>

<section id="sobre_ana">
    <div class="container">
        <div id="text_ana">
                <h3></h3>
                <h4></h4>
                <p></p>
                <button></button>
            </div>
            <img src=""> 
    </div>

</section>

<section id="depoimentos">
    <div id="clientes"></div>
</section>

<section id="equipe">
    <div id="text_equipe">
    </div>
    <div id="equipe_list">
        <div id="equipe_item">
            <img src="">
            <span class="label_name"></span>
        </div>
        <div id="equipe_item">
            <img src="">
            <span class="label_name"></span>
        </div>
        <div id="equipe_item">
            <img src="">
            <span class="label_name"></span>
        </div>
        <div id="equipe_item">
            <img src="">        
            <span class="label_name"></span>
        </div>
    </div>
</section>
<?php get_footer(); ?>
